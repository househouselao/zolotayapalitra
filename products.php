<?php
// The amounts of products to show on each page
$num_products_on_each_page = 22;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>


<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/products.css">


      <title>-</title>
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

        <section class="journals">  
         <div class="journals1 container">
      
            <div class="products-wrapper">
                <?php foreach ($products as $product): ?>
                <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
                <img src="jimg/<?=$product['img']?>"  alt="<?=$product['title']?>" class="product1">
                <span class="name"><?=$product['title']?></span>
                </a>
                <?php endforeach; ?>
                
            </div>
            <div class="buttons">
                <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
                <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
                <?php endif; ?>
            </div> 
            </div>  

            <div class="products content-wrapper">

            

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


      
      <script src="js/main.js"></script>
   </body>
</html>