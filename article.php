<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

// Get the article ID from the URL parameter
$id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : null;

// If the article ID is not set or is not valid, redirect to the homepage
if (!$id) {
  header('Location: index.php');
  exit;
}

// Fetch the article from the database
$stmt = $pdo->prepare('SELECT * FROM articles WHERE id = ?');
$stmt->execute([$id]);
$article = $stmt->fetch();

// If the article does not exist, redirect to the homepage

?>


<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/article.css">


      <title><?php echo htmlspecialchars($article['title']); ?></title>
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
      <main class="main">
      

      <section class="about2 section" id="about">
      <div class="about__container2 container">
         
      
      <div class="all container">
      <div class="title2">
      <?php echo htmlspecialchars($article['title2']); ?>
      </div>
      
      <div class="title3"><?php echo htmlspecialchars($article['title']); ?></div>
      
      <div class="photo">
      <img src="png/<?=$article['image']?>" alt="stat pic" class="stat__pic1">
      <div class="photo1"><?=$article['underphoto']?></div>
      </div>
      <button class="button__link" id="toggle-font-size">Изменить размер текста</button>
     <div class="descript"><?=$article['description']?></div>
     </div>


      <div class="but">
      <p><a href="javascript:history.back()">Назад к списку статей</a></p>
      </div>
     
          </div>     
      </section>




</main>

        <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br>PALITRA</h1>
               </a>

               <p class="footer__description">
               Журнал об <br>
               изобразительном искусстве
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
const toggleFontSizeButton = document.getElementById('toggle-font-size');
const descriptElement = document.querySelector('.descript');

toggleFontSizeButton.addEventListener('click', () => {
  if (descriptElement.style.fontSize === '25px') {
    descriptElement.style.fontSize = ''; // reset to original font size
  } else {
    descriptElement.style.fontSize = '25px';
  }
});
        </script>


      
      <script src="js/main.js"></script>
   </body>
</html>




      
