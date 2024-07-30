<?php
// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: index.php?page=cart');
    exit;
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page

if (isset($_POST['order'])) {

   if (!isset($_SESSION['user_id'])) {
      header('Location: login.php');
      exit;
  }
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
   // Loop through the post data so we can update the quantities for every product in cart
   foreach ($_POST as $k => $v) {
       if (strpos($k, 'quantity') !== false && is_numeric($v)) {
           $id = str_replace('quantity-', '', $k);
           $quantity = (int)$v;
           // Always do checks and validation
           if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
               // Update new quantity
               $_SESSION['cart'][$id] = $quantity;
           }
       }
   }
   // Prevent form resubmission...
   header('Location: index.php?page=cart');
   exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['price'] * (int)$products_in_cart[$product['id']];
    }
}
?>

<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/list1.css">
      <link rel="stylesheet" href="css/cart.css">


      <title>Корзина</title>
   </head>
   <body>
      
      <header class="header" id="header">
         <nav class="nav container">
            
               <img src="png/logo1.svg" class="nav__logo">
           

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="index.php?page=main" class="nav__link">
                        <span>Главная</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="index.php?page=products" class="nav__link">
                        <span>Журналы</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="index.php?page=rasprostranenie" class="nav__link">            
                        <span>Распространение</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="index.php?page=redaction" class="nav__link">
                        <span>Редакция</span>
                     </a>
                  </li>
               </ul>

               
               <div class="nav__close" id="nav-close">
               <i class="ri-close-large-line"></i>
               </div>

               <div class="nav__social">
                  <a href="index.php?page=cart" target="_blank" class="nav__social-link">
                     <i class="ri-shopping-bag-2-line"></i>
                  </a>

                  <a href="index.php?page=login" target="_blank" class="nav__social-link">
                     <i class="ri-user-3-line"></i>
                  </a>

            
               </div>
            </div>

            
            <div class="nav__toggle" id="nav-toggle">
               <i class="ri-menu-line"></i>
            </div>
         </nav>
      </header>
      <?php if (empty($products)):?>
  <main class="main">
    <div class="cart content-wrapper container">
      <div class="zagol1"><p>Корзина пуста :(</p></div>
    </div>
  </main>
<?php else:?>
      <main class="main">
<div class="cart content-wrapper container">
<div class="zagol"><p>Выбранные товары</p></div>
    <form id="cartForm" action="index.php?page=cart" method="post">
        <table id="cartTable">
            <thead>
                <tr>
                    <td colspan="2">Номер журнала</td>
                    <td>Цена</td>
                    <td>Количество</td>
                    <td>Общая стоимость</td>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                <td colspan="5" style="text-align:center;">Товаров в корзине нет.</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="jimg/<?=$product['img']?>" alt="<?=$product['title']?>">
                        </a>
                    </td>
                    <td class="opis">
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['title']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Удалить</a>
                    </td>
                    <td class="price"><?=$product['price']?>&nbsp;руб</td>
                    <td class="quantity">
                    <button type="submit" name="update" class="quantity-btn minus" data-action="minus" data-id="<?=$product['id']?>">-</button>
<input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" readonly>
<button type="submit" name="update" class="quantity-btn plus" data-action="plus" data-id="<?=$product['id']?>">+</button>
                    </td>
                    <td class="price"><?=$product['price'] * $products_in_cart[$product['id']]?>&nbsp;руб</td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="vivod container">
        <div class="subtotal">
            <span class="text">Общая сумма:</span>
            <span class="price"><?=$subtotal?>&nbsp;руб</span>
        </div>
        <a href="index.php?page=order" class="button__link" id="order-btn">Оформить заказ</a>
        </div>
        <div id="overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

        <div id="auth-modal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); z-index: 2; text-align: center;">
  <p style="margin-bottom: 10px;">Вы не авторизованы.</p>
  <p style="margin-bottom: 20px;">Пожалуйста, авторизуйтесь, чтобы продолжить.</p>
  <a href="index.php?page=login" style="text-align: center;">Перейти к авторизации</a>
  <button id="close-modal" class="button__link" style="display: block;" data-dismiss="modal">Закрыть</button>
</div>

 
    <?php if (isset($_POST['placeorder']) && isset($_SESSION['cart']) &&!empty($_SESSION['cart'])) {
        if (!isset($_SESSION['user_id'])) {
            echo '<p class="error-message">Вы не авторизованы. Пожалуйста, <a href="index.php?page=login">авторизуйтесь</a>, чтобы продолжить.</p>';
        }
    }
 ?>
    <p class="error-message"><?php if (isset($_POST['placeorder']) && isset($_SESSION['cart']) &&!empty($_SESSION['cart'])) {
        if (!isset($_SESSION['user_id'])) {
            echo 'Вы не авторизованы. Пожалуйста, <a href="index.php?page=login">авторизуйтесь</a>, чтобы продолжить.';
        }
    }?></p>
</div>
</main>
<?php endif;?>
        <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br>PALITRA</h1>
               </a>

               <p class="footer__description">
                  Журнал об <br> изобразительном искусстве
               </p>
            </div>

            <div class="footer__content grid">
               <div>
                  <h3 class="footer__title">О нас</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="" class="footer__link">1</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">2</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">3</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">О нас</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="" class="footer__link">1</a>
                     </li>

                     <li>
                        <a href="" class="footer__link">2</a>
                     </li>
                     
                     <li>
                        <a href="" class="footer__link">3</a>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Связаться</h3>

                  <div class="footer__social">
                     <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-telegram-line"></i>
                     </a>

                     <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-phone-line"></i>
                     </a>

                     <a href="" target="_blank" class="footer__social-link">
                        <i class="ri-mail-line"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <span class="footer__copy">
            &#169; Все права защищены
         </span>

        </footer>

        <script>
document.addEventListener('DOMContentLoaded', function() {
    const quantityBtns = document.querySelectorAll('.quantity-btn');

    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.dataset.action;
            const id = this.dataset.id;
            const input = document.querySelector(`input[name="quantity-${id}"]`);
            const currentValue = parseInt(input.value);

            if (action === 'minus' && currentValue > 1) {
                input.value = currentValue - 1;
                updateCart(id, currentValue - 1);
            } else if (action === 'plus' && currentValue < parseInt(input.max)) {
                input.value = currentValue + 1;
                updateCart(id, currentValue + 1);
            }
        });
    });

    function updateCart(id, quantity) {
    fetch('update_quantity.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `id=${id}&quantity=${quantity}`
    }).then(response => response.json())
   .then(data => {
          console.log(data); // Обработка ответа сервера

          // Находим элементы на странице, которые нужно обновить
          const priceElement = document.getElementById(`price-${id}`);
          const totalElement = document.getElementById(`total-${id}`);

          // Обновляем значения на странице
          priceElement.textContent = data.new_price.toFixed(2); // Округляем до двух десятичных знаков
          totalElement.textContent = data.total.toFixed(2); // Округляем до двух десятичных знаков
     })
   .catch(error => console.error('Error:', error));
}
});

document.getElementById('order-btn').addEventListener('click', function(event) {
    event.preventDefault();
    <?php if (!isset($_SESSION['user_id'])):?>
      document.getElementById('auth-modal').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
    <?php else:?>
      window.location.href = 'index.php?page=order';
    <?php endif;?>
  });

  document.getElementById('close-modal').addEventListener('click', function() {
    document.getElementById('auth-modal').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
  });

  document.getElementById('overlay').addEventListener('click', function() {
  document.getElementById('auth-modal').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
});
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="path/to/jquery.ajaxForm.min.js"></script>
        </body>
</html>