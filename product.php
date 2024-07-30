<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        // Simple error to display if the id for the product doesn't exists (array is empty)
        exit('Product does not exist!');
    }

} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}

    // Prepare statement and execute, prevents SQL injection
    $stmt = $pdo->prepare('SELECT * FROM articles WHERE product_id = ?');
    $stmt->execute([$_GET['id']]);
    // Fetch the articles from the database and return the result as an Array
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/product.css">


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

      <section class="about1 section" id="about">
      <div class="about__container container grid">
          <div class="about__image">
              <img src="jimg/<?=$product['img']?>" width="500" height="500" alt="<?=$product['title']?>">
          </div>
          <div class="about__data">
            <div class="aboutnamedesc">
              <h2 class="name"><?=$product['title']?></h2>
              
              <div class="descrip">
              <?=$product['description']?>
              </div>
            </div>


      


            <form id="add-to-cart-form" method="post"> 
            <div class="button__link-container">       
    <input type="number" class="button__quan" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>        
    <input type="hidden" name="product_id" value="<?=$product['id']?>">        
    <span class="price">        
        <p><?=$product['price']?>&nbsp;руб</p>        
    </span>        
    <input type="submit" class="button__link" value="Купить">
    </div>             
</form>

<script>
    const form = document.getElementById('add-to-cart-form');

    form.addEventListener('submit', (e) => {
        e.preventDefault(); // prevent default form submission

        const formData = new FormData(form);
        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'index.php?page=cart', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Product added to cart successfully!');
                // You can also update the cart count or display a success message here
            } else {
                console.error('Error adding product to cart:', xhr.statusText);
            }
        };

        xhr.send(formData);

        $.ajax({
      url: 'cart.php',
      type: 'post',
      data: $('form').serialize(),
      success: function(response) {
        console.log(response);
        // Display a success message
        alert('Товар успешно добавлен в корзину!');
      }
    });
    });
</script>
          </div>
          </div>     
      </section>
      <section class="state section">
 <h1 class="card__nazv1">
               СТАТЬИ
            </h1>
            <div class="stat__container1 container">
            <?php foreach ($articles as $article): ?>
  <div class="stat1__item">
    <div class="stat1__data">
      <h2 class="stat1__title">
        <?=$article['title']?>
      </h2>

      <p class="stat1__description">
        <?=$article['content']?>
      </p>
      <a href="article.php?id=<?=$article['id']?>" class="button3">
        Читать
      </a>
    </div>
    <div class="<?php if ($article['id'] % 2 == 0): ?>stat1__pic stat1__pic_left<?php else: ?>stat1__pic<?php endif; ?>">
      <img src="png/<?=$article['image']?>" alt="stat pic" class="stat__pic1">
    </div>
  </div>
  <div class="clearfix"></div> <!-- Добавлено свойство clear -->
  <div style="margin-bottom: 30px;"></div> <!-- Добавлен отступ между элементами -->
<?php endforeach; ?>
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


      
      <script src="js/main.js"></script>
   </body>
</html>




      
