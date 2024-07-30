<?php
require_once 'vendor/autoload.php';


if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

   if (!isset($_SESSION['user_id'])) {
      header('Location: login.php');
      exit;
  }
   // Создайте сессию Stripe
   \Stripe\Stripe::setApiKey('sk_test_51PP1KtDyJXIrVcSsXjjyzorn0PiPW4ne4BpbFNc7K22irXWgBd8ocTaX7Uw8z9P05f3551O9whafyFhsRF6xxyRX00CKIYHzOb');

   // Получите выбранные товары из сессии
   $cart = $_SESSION['cart'];
   $total = 0;
   $items = [];

   foreach ($cart as $product_id => $quantity) {
       $stmt = $pdo->prepare('SELECT * FROM products WHERE id =?');
       $stmt->execute([$product_id]);
       $product = $stmt->fetch(PDO::FETCH_ASSOC);

       if ($product) {
           $total += $product['price'] * $quantity;
           $items[] = [
               'price_data' => [
                   'currency' => 'rub',
                   'unit_amount' => $product['price'] * 100,
                   'product_data' => [
                       'name' => $product['title'],
                   ],
               ],
               'quantity' => $quantity,
           ];
       }
   }

   // Создайте Checkout Session
   $checkout_session = \Stripe\Checkout\Session::create([
       'payment_method_types' => ['card'],
       'line_items' => $items,
       'mode' => 'payment',
       'success_url' => 'https://example.com/success',
       'cancel_url' => 'https://example.com/cancel',
   ]);

   // Redirect to Checkout Session
   header('Location: '. $checkout_session->url);
   exit;
   
   if ($checkout_session->payment_status == 'paid') {

      $user_id = $_SESSION['user_id'];
      $fio = $_POST['fio'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $index = $_POST['index'];
  
      $stmt = $pdo->prepare('UPDATE users SET fio =?, phone =?, address =?, `index` =? WHERE id =?');
      $stmt->execute([$fio, $phone, $address, $index, $user_id]);


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
      exit;}
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
      <div class="customer-info">
  <h2>Информация о клиенте</h2>
  <form action="index.php?page=order" method="post">
    <label for="fio">ФИО:</label>
    <input type="text" id="fio" name="fio" required><br><br>
    <label for="phone">Телефон:</label>
    <input type="tel" id="phone" name="phone" required><br><br>
    <label for="address">Адрес:</label>
    <input type="text" id="address" name="address" required><br><br>
    <label for="index">Почтовый индекс:</label>
    <input type="text" id="index" name="index" required><br><br>
    <div class="buttons">      
      <input type="submit" value="Оформить заказ" name="placeorder">
    </div>
  </form>
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

        <script>

</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="path/to/jquery.ajaxForm.min.js"></script>
        </body>
</html>