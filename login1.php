<?php

// Определите переменную $pdo
$pdo = null;

// Конфигурация
$dsn = 'mysql:host=127.0.0.1;dbname=shoppingcart';
$username = 'root';
$password = '';

// Создайте соединение с базой данных
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Соединение не удалось: '. $e->getMessage();
    exit();
}

// Проверьте, что соединение было установлено успешно
if ($pdo === null) {
    echo 'Ошибка соединения с базой данных';
    exit();
}


if (isset($_POST['email'], $_POST['password'])) {
    // Обработка данных формы
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Поиск пользователя в базе данных
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email =?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Проверка пароля
        if (password_verify($password, $user['password'])) {
            // Авторизация успешна
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            header('Location: index.php');
            exit();
        } else {
            echo 'Неправильный пароль!';
        }
    } else {
        echo 'Пользователь не найден!';
    }
}
?>

<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/login.css">

      <link rel="stylesheet" href="css/swiper-bundle.min.css">

      <title>-</title>
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
  <section class="login container">
    <?php if (isset($_SESSION['user_id'])): ?>
        <div class="nadpis">
      <p>Вы уже вошли в аккаунт. Хотите <a href="logout.php">выйти</a>?</p>
    <?php else: ?>
        </div>


      <div class="login-box">
         <h2>Вход</h2>
        <form>
         <div class="user-box">
            <input type="email" name="email" required="">
            <label>Почта</label>
         </div>
         <div class="user-box">
            <input type="password" name="password" required="">
            <label>Пароль</label>
         </div>
         <a href="">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value="Войти">
         </a>
        </form> 
      </div>

    <?php endif; ?>
  </section>
</main>
<footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br> PALITRA</h1>
               </a>

               <p class="footer__description">
                  информация <br> информация
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

      <script src="js/swiper-bundle.min.js"></script>
      
      <script src="js/main.js"></script>
   </body>
</html>
