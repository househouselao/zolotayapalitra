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

// Обновляем сессию корзины на сервере
if (isset($_POST['quantity']) && isset($_POST['product_id'])) {
   $product_id = (int)$_POST['product_id'];
   $quantity = (int)$_POST['quantity'];
   if (isset($_SESSION['cart'][$product_id])) {
       $_SESSION['cart'][$product_id] = $quantity;
   }
}

// Обновляем количество товаров в базе данных
if (isset($_POST['quantity']) && isset($_POST['product_id'])) {
   $product_id = (int)$_POST['product_id'];
   $quantity = (int)$_POST['quantity'];
   $stmt = $pdo->prepare('UPDATE products SET quantity = ? WHERE id = ?');
   $stmt->execute([$quantity, $product_id]);
}
// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}


if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

  
   if (!isset($_SESSION['user_id'])) {
      ?>
       <html>
           <head>
               <title>Корзина</title>
               <link rel="stylesheet" href="css/list1.css">
               <link rel="stylesheet" href="css/cart.css">
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
           </head>
           <body>
           <header class="header" id="header">
         <nav class="nav container">
            
               <img src="png/logo1.svg" class="nav__logo">
           

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="index.html" class="nav__link">
                        <span>Главная</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="index.php?page=products" class="nav__link">
                        <span>Журналы</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">            
                        <span>Распространение</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="#" class="nav__link">
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
               <main class="main">
                   <div class="cart1  container">
                       <p class="error-message">Вы не авторизованы. Пожалуйста, <a href="login.php">авторизуйтесь</a>, чтобы продолжить.</p>
                   </div>
               </main>
               <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br>PALITRA</h1>
               </a>

               <p class="footer__description">
                  чоточочотчотчоч <br> чоточтотчотчт
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
           </body>
       </html>
       <?php
       exit;
   }

   // Create a new order
   $order = array();
   foreach ($_SESSION['cart'] as $product_id => $quantity) {
       $stmt = $pdo->prepare('SELECT * FROM products WHERE id =?');
       $stmt->execute([$product_id]);
       $product = $stmt->fetch(PDO::FETCH_ASSOC);

       if ($product) {
           $order[] = array(
               'product_id' => $product_id,
               'quantity' => $quantity,
               'price' => $product['price']
           );
       }
   }
   // Insert the order into the database
   $stmt = $pdo->prepare('INSERT INTO orders (user_id, order_date, total) VALUES (?, NOW(),?)');
   $total = 0;
   foreach ($order as $item) {
       $total += $item['quantity'] * $item['price'];
   }
   $stmt->execute([$_SESSION['user_id'], $total]);
   $order_id = $pdo->lastInsertId();

   // Вставить элементы заказа в базу данных
   foreach ($order as $item) {
       if (!empty($item['price'])) {
           $stmt = $pdo->prepare('INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?,?,?,?)');
           $stmt->execute([$order_id, $item['product_id'], $item['quantity'], $item['price']]);
       }
   }
   
   // Calculate the subtotal using the updateTotal() function
   $quantityInputs = array();
   foreach ($_SESSION['cart'] as $product_id => $quantity) {
       $quantityInputs[] = array(
           'productId' => $product_id,
           'quantity' => $quantity
       );
   }
   $total = 0;
   foreach ($quantityInputs as $input) {
       $price = $pdo->prepare('SELECT price FROM products WHERE id =?');
       $price->execute([$input['productId']]);
       $price = $price->fetchColumn();
       $total += $input['quantity'] * $price;
   }
   
   // Clear the cart
   unset($_SESSION['cart']);
   header('Location: index.php?page=order&id='. $order_id);
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
                     <a href="index.html" class="nav__link">
                        <span>Главная</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="index.php?page=products" class="nav__link">
                        <span>Журналы</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#" class="nav__link">            
                        <span>Распространение</span>
                     </a>
                  </li>


                  <li class="nav__item">
                     <a href="#" class="nav__link">
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
      <main class="main">
   <div class="cart content-wrapper container">
      <div class="zagol"><p>Выбранные товары</p></div>
    
    <form action="index.php?page=cart" method="post">
        <table>
            <thead>
                <tr>
                    <td colspan="2">Номер журнала</td>
                    <td>Цена</td>
                    <td>Количество</td>             
                </tr>
            </thead>
            <tbody>
                <?php if (empty($products)): ?>
                <tr>
                    <td colspan="5" style="text-align:center;">Товаров в корзине нет.</td>
                </tr>
                <?php else: ?>
                <?php foreach ($products as $product): ?>
                <tr class="table1" data-product-id="<?=$product['id']?>">
                <td class="img">
                        <a href="index.php?page=product&id=<?=$product['id']?>">
                            <img src="jimg/<?=$product['img']?>" alt="<?=$product['title']?>">
                        </a>
                    </td>
                    <td class="opis">
                        <a href="index.php?page=product&id=<?=$product['id']?>"><?=$product['title']?></a>
                        <br>
                        <a href="index.php?page=cart&remove=<?=$product['id']?>" class="remove">Remove</a>
                    </td>
                    <td class="price"><?=$product['price']?> &nbsp;руб</td>
                    <td class="quantity">
    <div class="quantity-controls">
        <button class="quantity-button minus">-</button>
        <input type="number" name="quantity-<?=$product['id']?>" value="<?=$products_in_cart[$product['id']]?>" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
        <button class="quantity-button plus">+</button>
    </div>
</td>    
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <div class="buttons">
            <input type="submit" value="Заказать" name="placeorder">
        </div>

    </form>
    <div class="total"></div> <!-- Итоговая сумма -->
    <?php if (isset($_POST['placeorder']) && isset($_SESSION['cart']) &&!empty($_SESSION['cart'])) {
        if (!isset($_SESSION['user_id'])) {
            echo '<p class="error-message">Вы не авторизованы. Пожалуйста, <a href="login.php">авторизуйтесь</a>, чтобы продолжить.</p>';
        }
    }
 ?>
    <p class="error-message"><?php if (isset($_POST['placeorder']) && isset($_SESSION['cart']) &&!empty($_SESSION['cart'])) {
        if (!isset($_SESSION['user_id'])) {
            echo 'Вы не авторизованы. Пожалуйста, <a href="login.php">авторизуйтесь</a>, чтобы продолжить.';
        }
    }?></p>
</div>
</main>

        <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br>PALITRA</h1>
               </a>

               <p class="footer__description">
                  чоточочотчотчоч <br> чоточтотчотчт
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

        
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Обновляем итоговую сумму каждый раз, когда изменяется количество продуктов в корзине
        const quantityInputs = document.querySelectorAll('input[name^="quantity-"]');
        quantityInputs.forEach(input => {
            input.addEventListener("change", function() {
                updateTotal();
            });
        });
    // Вычисляем и выводим итоговую сумму
    function updateTotal() {
        const quantityInputs = document.querySelectorAll('input[name^="quantity-"]');
        let total = 0;

        quantityInputs.forEach(input => {
            const productId = input.name.split("-")[1];
            const quantity = parseInt(input.value);
            const price = parseFloat(document.querySelector(`tr[data-product-id="${productId}"] .price`).innerText.replace('руб', ''));

            total += quantity * price;
        });

        document.querySelector('.total').innerText = total.toFixed(2) + 'руб';
        updateCartSession(); // Обновляем сессию корзины
        
    }

    // Вызываем функцию updateTotal(), чтобы инициализировать итоговую сумму
    updateTotal();

    // Добавляем обработчики событий на кнопки "+" и "-"
    const quantityButtons = document.querySelectorAll('.quantity-button');
quantityButtons.forEach(button => {
  button.addEventListener('click', function(event) {
    event.preventDefault(); // Отменить отправку формы

    const input = this.parentNode.querySelector('input[type="number"]');
    let value = parseInt(input.value);

    if (this.classList.contains('minus')) {
      value--;
    } else if (this.classList.contains('plus')) {
      value++;
    }

    input.value = Math.max(1, Math.min(value, input.max));

    // Отправляем запрос на сервер, чтобы обновить количество товаров в базе данных
    const productId = input.dataset.productId;
    const quantity = input.value;

    fetch('update-cart.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `product_id=${productId}&quantity=${quantity}`
    })
    .then(response => response.text())
    .then(message => console.log(message))
    .catch(error => console.error(error));

    // Обновляем итоговую сумму после изменения количества товара
    updateTotal();
    updateCartSession();
  });
});

    // Обновляем сессию корзины при загрузке страницы
    function updateCartSession() {
        const cart = {};
        const quantityInputs = document.querySelectorAll('input[name^="quantity-"]');
        quantityInputs.forEach(input => {
            const productId = input.name.split("-")[1];
            const quantity = parseInt(input.value);
            cart[productId] = quantity;
        });
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Обновляем сессию корзины при загрузке страницы
    window.onload = function() {
        const cart = JSON.parse(localStorage.getItem('cart'));
        if (cart) {
            Object.entries(cart).forEach(([productId, quantity]) => {
                document.querySelector(`input[name="quantity-${productId}"]`).value = quantity;
                updateTotal();
            });
        }
    };
});
</script>

</body>
</html>