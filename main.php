<!DOCTYPE html>
   <html lang="ru">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

      
      <link rel="stylesheet" href="css/styles.css">

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



         <section class="home section" id="home">
            <div class="home__container container grid">
               <img src="png/1 (2).jpg" alt="image" class="home__img">

               <div class="home__data">
                  <h1 class="home__title">
                     ДОРОГИЕ ЧИТАТЕЛИ!
                  </h1>

                  <p class="home__description">Вышел в свет новый номер журнала «Золотая палитра» – <br>№ 1/22, 2023, несколько статей которого посвящены важной сегодня теме – экспертизе и атрибуции художественных произведений.

                  </p>

                  <div class="home__buttons">
                     <a href="#" class="button1">
                        <span>
                           <i class="ri-arrow-right-line"></i>
                        </span>
                        О ЖУРНАЛЕ
                     </a>

                     <a href="index.php?page=product&id=22" class="button__link">ПРИОБРЕСТИ</a>
                  </div>
               </div>
            </div>
         </section>
 
         </section>

         <section class="container1">
         
         <div class="card__container swiper">
            <h1 class="card__nazv">
               ПОПУЛЯРНЫЕ СТАТЬИ
            </h1>
            <div class="card__content">              
               <div class="swiper-wrapper">
                  <article class="card__article swiper-slide">
                     <a href="#">
                     <div class="card__image">
                        <img src="cards/c1.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
      
                     <div class="card__data">                 
                        <h3 class="card__name">Европейский фарфор эпохи Просвещения</h3>
                        <p class="card__description">
                           Декоративно-прикладное искусство
                        </p>
      
                        <a href="/zp/article.php?id=7" class="card__button">Читать</a>
                     </div>
                     </a>
                  </article>
      
                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="cards/с2.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
      
                     <div class="card__data">
                        <h3 class="card__name">Зритель в роли эксперта</h3>
                        <p class="card__description">
                           Экспертиза и атрибуция
                        </p>
      
                        <a href="#" class="card__button">Читать</a>
                     </div>
                  </article>
      
                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="cards/c3.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
      
                     <div class="card__data">
                        <h3 class="card__name">Новое вознесение духа: К.С. Петров-Водкин и революция</h3>
                        <p class="card__description">
                           Русское искусство
                        </p>
      
                        <a href="#" class="card__button">Читать</a>
                     </div>
                  </article>
      
                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="cards/c4.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
      
                     <div class="card__data">
                        <h3 class="card__name">Михаил Хрисогонов (1891-1982) – портретист, педагог, пейзажист</h3>
                        <p class="card__description">
                           Русское зарубежье
                        </p>
      
                        <a href="#" class="card__button">Читать</a>
                     </div>
                  </article>

                  <article class="card__article swiper-slide">
                     <div class="card__image">
                        <img src="cards/с5.png" alt="image" class="card__img">
                        <div class="card__shadow"></div>
                     </div>
      
                     <div class="card__data">
                        <h3 class="card__name">Анатолий Петушков: «О себе и своей живописи»</h3>
                        <p class="card__description">
                           Современное искусство
                        </p>
      
                        <a href="#" class="card__button">Читать</a>
                     </div>
                  </article>
               </div>
            </div>

            
            <div class="swiper-button-next">
               <i class="ri-arrow-right-s-line"></i>
            </div>
            
            <div class="swiper-button-prev">
               <i class="ri-arrow-left-s-line"></i>
            </div>

            
            <div class="swiper-pagination"></div>
         </div>
      </section>

         <section class="about section" id="about">
            <div class="about__container container grid">
               <div class="about__data">
                  <h2 class="section__title">
                     Узнайте больше <br>
                     о мире искусства 
                  </h2>

                  <p class="about__description">
                     Журнал публикует статьи о русском искусстве, искусстве советского периода, современном, религиозном, декоративно-прикладном; о художниках русского зарубежья, меценатах и собирателях, а также архивные материалы, дневники и воспоминания.
                     
                  </p>

                  <a href="" class="button">
                     Узнать больше <i class="ri-arrow-right-line"></i>
                  </a>
               </div>

               <div class="about__image">
                  <img src="png/palitra.png" alt="about image" class="about__img">
                  <div class="about__shadow"></div>
               </div>

            </div>
         </section>
   </main>
      
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <h1>ZOLOTAYA <br> PALITRA</h1>
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

      <script src="js/swiper-bundle.min.js"></script>
      
      <script src="js/main.js"></script>
   </body>
</html>