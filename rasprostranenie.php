
<!DOCTYPE html>
<html lang="ri-menu-line">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

    
    <link rel="stylesheet" href="css/rasp.css">


    <title>Распространение</title>
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
    <div id="body">
        
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=60d2c60c-5268-4434-9708-ab031a19b078" type="text/javascript"></script>
    <script type="text/javascript">
        var markers = [
        
        {
            "title": ' Библио-Глобус',
            "link": 'http://maps.yandex.ru/?text=%D0%A2%D0%94%20%D0%91%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE-%D0%93%D0%BB%D0%BE%D0%B1%D1%83%D1%81&sll=37.629003917617176%2C55.758224596297104&sspn=0.094414%2C0.031459&z=17&results=20&sctx=AQAAAAEAWLpQM4PQQkDnAvKADeFLQODXSBKEK7g%2FDmlU4GQboD8%3D&ll=37.631676%2C55.760155&spn=0.011802%2C0.003932&l=map',
            "address": 'Мясницкая ул., 6/3, стр. 1 (м. Лубянка)',
            "city": 'Москва',
            "lat": '55.761029',
            "lng": '37.632192', 
            "type": '1',
            "subtitle": 'отдел «Антиквариат. Коллекционер. Подарки»',
            "weburl": 'www.bgshop.ru',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Саратовский государственный художественный музей им. А.Н. Радищева',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1029547248&ll=46.035056%2C51.532206&spn=0.011802%2C0.004350&z=17&l=map',
            "address": 'Радищева ул., 39',
            "city": ' Саратов',
            "lat": '51.5322199011053',
            "lng": '46.0350774576721', 
            "type": '3',
            "subtitle": 'Историческое здание',
            "weburl": 'www.radmuseumart.ru',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' «Лавка древностей»',
            "link": 'http://maps.yandex.ru/-/CVFpMX0~',
            "address": 'Рубинштейна ул., 4 (во дворе)',
            "city": 'Санкт-Петербург',
            "lat": '59.932154',
            "lng": '30.346654', 
            "type": '2',
            "subtitle": '',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' РГБ («Ленинка»)',
            "link": 'http://maps.yandex.ru/-/CVR3zO4H',
            "address": 'Воздвиженка ул., 3/5',
            "city": 'Москва',
            "lat": '55.751497',
            "lng": '37.609508', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.rsl.ru',
            "phone": '(800) 100-57-90'
        }
        
            ,
        
        {
            "title": ' Библиотека ГМИИ им. А.С.Пушкина',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1072168294&ll=37.605283%2C55.747320&spn=0.013518%2C0.003934&z=17&l=map',
            "address": 'ул. Волхонка, 12',
            "city": 'Москва',
            "lat": '55.747262',
            "lng": '37.605247', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Российская библиотека искусств',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1017777555&ll=37.615497%2C55.760783&spn=0.013518%2C0.003932&z=17&l=map',
            "address": 'ул. Б.Дмитровка, 8/1',
            "city": 'Москва',
            "lat": '55.760783',
            "lng": '37.615497', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": '(495) 692-09-84'
        }
        
            ,
        
        {
            "title": ' Публичная историческая библиотека',
            "link": 'http://maps.yandex.ru/?text=%D0%9F%D1%83%D0%B1%D0%BB%D0%B8%D1%87%D0%BD%D0%B0%D1%8F%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B1%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0&sll=37.61549725499996%2C55.760782997808334&sspn=0.432587%2C0.125829&z=17&results=20&ll=37.640129%2C55.756254&spn=0.013518%2C0.003933&l=map',
            "address": 'Старосадский пер., 9, стр. 1',
            "city": 'Москва',
            "lat": '55.756254',
            "lng": '37.640129', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Научная библиотека МГУ',
            "link": 'http://maps.yandex.ru/?text=%D0%9D%D0%B0%D1%83%D1%87%D0%BD%D0%B0%D1%8F%20%D0%B1%D0%B8%D0%B1%D0%BB%D0%B8%D0%BE%D1%82%D0%B5%D0%BA%D0%B0%20%D0%9C%D0%93%D0%A3&sll=37.64012905999994%2C55.75625449231287&sspn=0.013518%2C0.003933&z=12&results=20&ll=37.640129%2C55.756254&spn=0.432587%2C0.125843&l=map',
            "address": 'Воробьёвы горы, МГУ',
            "city": 'Москва',
            "lat": '55.704818',
            "lng": '37.524086', 
            "type": '5',
            "subtitle": '',
            "weburl": 'nbmgu.ru',
            "phone": ' (495) 939-42-42'
        }
        
            ,
        
        {
            "title": ' Российская национальная библиотека (РНБ)',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1057718256&ll=30.334634%2C59.933316&spn=0.013518%2C0.003500&z=17&l=map',
            "address": 'Садовая ул., 18',
            "city": 'Санкт-Петербург',
            "lat": '59.933316',
            "lng": '30.334634', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.nlr.ru',
            "phone": '(812) 310-56-72'
        }
        
            ,
        
        {
            "title": ' Библиотека Русского музея',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1118322840&ll=30.332595%2C59.938694&spn=0.013518%2C0.003499&z=17&l=map',
            "address": 'Инженерная ул., 4',
            "city": 'Санкт-Петербург',
            "lat": '59.938993',
            "lng": '30.328658', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Библиотека РАН (БАН)',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1058328717&ll=30.296887%2C59.943805&spn=0.013518%2C0.003499&z=17&l=map',
            "address": 'Биржевая линия, 1',
            "city": 'Санкт-Петербург',
            "lat": '59.944109',
            "lng": '30.297327', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.rasl.ru',
            "phone": '(812) 328-35-92'
        }
        
            ,
        
        {
            "title": ' Библиотека Саратовского художественного музея им. А.Н.Радищева',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1029547248&ll=46.035056%2C51.532206&spn=0.013518%2C0.004350&z=17&l=map',
            "address": 'Радищева ул., 39',
            "city": 'Саратов',
            "lat": '51.532237',
            "lng": '46.035346', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.radmuseumart.ru',
            "phone": '(8452) 26-16-06'
        }
        
            ,
        
        {
            "title": ' Библиотека Екатеринбургского музея изобразительных искусств',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1080335747&ll=60.603215%2C56.835136&spn=0.013518%2C0.003823&z=17&l=map',
            "address": 'Воеводина ул., 5',
            "city": 'Екатеринбург',
            "lat": '56.835223',
            "lng": '60.603499', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.emii.ru',
            "phone": '(343) 371-06-26'
        }
        
            ,
        
        {
            "title": ' Библиотека Росссийского центра науки и культуры',
            "link": 'http://www.google.com/maps?q=Le+Centre+de+Russie+pour+la+science+et+la+culture+%C3%A0+Paris,+61+Rue+Boissi%C3%A8re,+75116+Paris,+France&hl=en&ie=UTF8&sll=37.0625,-95.677068&sspn=45.149289,107.138672&oq=61,+rue+Boissiere,+75116+Paris&hq=Le+Centre+de+Russie+pour+la+science+et+la+culture&hnear=61+Rue+Boissi%C3%A8re,+75116+Paris,+%C3%8Ele-de-France,+France&t=m&z=16',
            "address": 'Буасьер ул., 61',
            "city": 'Париж',
            "lat": '48.868155',
            "lng": '2.287461', 
            "type": '5',
            "subtitle": '',
            "weburl": 'russiefrance.org',
            "phone": '+33 1 44 34 79 79'
        }
        
            ,
        
        {
            "title": ' Библиотека Третьяковской галереи',
            "link": 'http://maps.yandex.ru/-/CVbOiUNN',
            "address": '1-й Кадашевский пер., 14/13, корп. 1',
            "city": 'Москва',
            "lat": '55.74144',
            "lng": '37.620538', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Библиотека Рукописного отдела ИРЛИ РАН',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1133864119',
            "address": 'Макарова наб., 4',
            "city": 'Санкт-Петербург',
            "lat": '59.944877',
            "lng": '30.301486', 
            "type": '5',
            "subtitle": 'Пушкинский Дом',
            "weburl": 'www.pushkinskijdom.ru',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Библиотека Тверской картинной галереи',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1257700800',
            "address": 'Советская ул., 3',
            "city": 'Тверь',
            "lat": '56.862316',
            "lng": '35.899927', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.gallery.tver.ru',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Библиотека Астраханской картинной галереи им. П.М. Догадина',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1013658879&ll=48.051882%2C46.349256&spn=0.013518%2C0.005178&z=17&l=map',
            "address": 'ул. Свердлова, 81',
            "city": 'Астрахань',
            "lat": '46.349256',
            "lng": '48.051882', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.agkg.narod.ru',
            "phone": '+7 (8512) 51-64-09'
        }
        
            ,
        
        {
            "title": ' Библиотека Кирилло-Белозерского музея-заповедника',
            "link": 'http://maps.yandex.ru/?text=%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%92%D0%BE%D0%BB%D0%BE%D0%B3%D0%BE%D0%B4%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C%2C%20%D0%9A%D0%B8%D1%80%D0%B8%D0%BB%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20%D1%80%D0%B0%D0%B9%D0%BE%D0%BD%2C%20%D0%A0%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9%20%D0%A1%D0%B5%D0%B2%D0%B5%D1%80&sll=38.368751%2C59.857659&ll=38.368708%2C59.857482&spn=0.013518%2C0.003761&z=17&l=map',
            "address": '',
            "city": 'Вологодская обл., Кириллов',
            "lat": '59.857482',
            "lng": '38.368708', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.kirmuseum.ru',
            "phone": '+7 (81757) 3-14-79'
        }
        
            ,
        
        {
            "title": ' Библиотека Костромского государственного историко-архитектурного и художественного музея-заповедника',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1015799300&ll=40.930593%2C57.769511&spn=0.027037%2C0.007992&z=16&l=map',
            "address": 'просп. Мира, 7',
            "city": 'Кострома',
            "lat": '57.769872',
            "lng": '40.9305', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.kostromamuseum.ru',
            "phone": '+7 (4942) 51-38-29'
        }
        
            ,
        
        {
            "title": ' Библиотека государственного мемориального историко-художественного и природного музея-заповедника В.Д. Поленова',
            "link": 'http://maps.yandex.ru/?text=%D0%BC%D0%B5%D0%BC%D0%BE%D1%80%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D0%BA%D0%BE-%D1%85%D1%83%D0%B4%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BC%D1%83%D0%B7%D0%B5%D1%8F-%D0%B7%D0%B0%D0%BF%D0%BE%D0%B2%D0%B5%D0%B4%D0%BD%D0%B8%D0%BA%D0%B0%20%D0%9F%D0%BE%D0%BB%D0%B5%D0%BD%D0%BE%D0%B2%D0%B0&sll=-122.332305%2C47.605882&sspn=0.19965%2C0.238575&z=11&results=20&ll=37.266987%2C54.777303&spn=0.865173%2C0.276650&l=map',
            "address": '',
            "city": 'Тульская обл., Заокский р-н,  с. Страхово',
            "lat": '54.748551',
            "lng": '37.23666', 
            "type": '5',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (487) 342-11-80'
        }
        
            ,
        
        {
            "title": ' Библиотека Новосибирского государственного художественного музея',
            "link": 'http://maps.yandex.ru/?text=%D0%BD%D0%BE%D0%B2%D0%BE%D1%81%D0%B8%D0%B1%D0%B8%D1%80%D1%81%D0%BA%D0%B8%D0%B9%20%D1%85%D1%83%D0%B4%D0%BE%D0%B6%D0%B5%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BC%D1%83%D0%B7%D0%B5%D0%B9&sll=37.26698699999999%2C54.77730299999504&sspn=0.865173%2C0.276650&z=11&results=20&ll=82.921292%2C55.021767&spn=0.865173%2C0.274968&l=map',
            "address": 'просп. Красный, 5',
            "city": 'Новосибирск',
            "lat": '55.021803',
            "lng": '82.921966', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.nsartmuseum.ru',
            "phone": '+7 (383) 223-53-31'
        }
        
            ,
        
        {
            "title": ' Библиотека Пермской государственной художественной галерии',
            "link": 'http://maps.yandex.ru/?text=%D0%BF%D0%B5%D1%80%D0%BC%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8F&sll=82.92129198999999%2C55.02176675193144&sspn=0.865173%2C0.274968&z=11&results=20&ll=56.234681%2C58.016410&spn=0.865173%2C0.253978&l=map',
            "address": ' Комсомольский просп., 4',
            "city": 'Пермь',
            "lat": '58.016348',
            "lng": '56.234393', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.gallery.permonline.ru',
            "phone": '+7 (342) 212-23-95'
        }
        
            ,
        
        {
            "title": ' Библиотека Ставропольского краевого музея изобразительных искусств',
            "link": 'http://maps.yandex.ru/?ol=biz&oid=1217636224&ll=41.974357%2C45.045151&spn=0.013518%2C0.005301&z=17&l=map',
            "address": 'ул. Дзержинского, 117',
            "city": 'Ставрополь',
            "lat": '45.045151',
            "lng": '41.974464', 
            "type": '5',
            "subtitle": '',
            "weburl": 'www.artmuseum26.ru',
            "phone": '+7 (8652) 26-46-60'
        }
        
            ,
        
        {
            "title": ' Государственная Третьяковская галерея',
            "link": 'https://yandex.ru/maps/213/moscow/?z=14&ll=37.62027778%2C55.74138889&source=entity_search&mode=search&text=%D0%93%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%A2%D1%80%D0%B5%D1%82%D1%8C%D1%8F%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8F&sll=37.620278%2C55.741389&ol=biz&oid=24105504535',
            "address": 'Лаврушинский пер., 10 ',
            "city": 'Москва',
            "lat": '55.741489',
            "lng": '37.620138', 
            "type": '1',
            "subtitle": 'Основное здание ',
            "weburl": 'https://www.tretyakovgalleryshop.ru/',
            "phone": '+7 (495) 317-16-97'
        }
        
            ,
        
        {
            "title": ' "Словарный запас"',
            "link": 'http://maps.yandex.ru/?text=%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F%2C%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&sll=37.617761%2C55.755773&ol=geo&oll=37.617761%2C55.755773&ll=37.617761%2C55.755773&spn=3.021240%2C1.006774&z=9&l=map',
            "address": '',
            "city": '',
            "lat": '55.755773',
            "lng": '37.617761', 
            "type": '1',
            "subtitle": 'интернет-магазин',
            "weburl": 'www.ZapasSlov.Ru',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Государственная Третьяковская галерея',
            "link": 'https://yandex.ru/maps/213/moscow/?ll=37.613314%2C55.738414&mode=search&oid=82857910823&ol=biz&sll=37.609425%2C55.762156&sspn=0.004925%2C0.002063&text=%D0%93%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F%20%D0%A2%D1%80%D0%B5%D1%82%D1%8C%D1%8F%D0%BA%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F%20%D0%B3%D0%B0%D0%BB%D0%B5%D1%80%D0%B5%D1%8F&z=15',
            "address": 'Крымский вал, 10 ',
            "city": 'Москва',
            "lat": '55.734015',
            "lng": '37.607276', 
            "type": '1',
            "subtitle": 'Новая Третьяковка',
            "weburl": 'https://www.tretyakovgalleryshop.ru/',
            "phone": '+7 (495) 957-07-27'
        }
        
            ,
        
        {
            "title": ' Магазинус 《Серовин и Коров》',
            "link": 'https://yandex.ru/maps/213/moscow/?ll=37.571426%2C55.707005&mode=search&oid=1021300175&ol=biz&sll=37.613314%2C55.738414&sspn=0.009956%2C0.016246&text=%D0%9C%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%20%E3%80%8A%D0%90%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%BA%D0%BD%D0%B8%D0%B3%D0%B0&z=11',
            "address": 'Ленинградский пр-т, 15, стр. 11',
            "city": 'Москва',
            "lat": '55.78037',
            "lng": '37.570321', 
            "type": '1',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (495) 105-91-24'
        }
        
            ,
        
        {
            "title": ' Книжный магазин "Академкнига"',
            "link": '',
            "address": 'ул. Вавилова, 55/7',
            "city": 'Москва',
            "lat": '55.692319',
            "lng": '37.562993', 
            "type": '1',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (499) 124-55-00'
        }
        
            ,
        
        {
            "title": ' Музейно-выставочный комплекс Московской области "Новый Иерусалим"',
            "link": '',
            "address": 'Ново-Иерусалимская наб., д. 1',
            "city": 'Московская обл., г. Истра',
            "lat": '55.923599',
            "lng": '36.843', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+ 7 (498) 314-02-36'
        }
        
            ,
        
        {
            "title": ' Государственный Русский музей',
            "link": '',
            "address": 'ул. Инженерная, д. 2-4, литера 《Д》',
            "city": 'Санкт-Петербург',
            "lat": '59.938782',
            "lng": '30.332383', 
            "type": '3',
            "subtitle": '',
            "weburl": 'rusmuseum.ru',
            "phone": '+7 (812) 595-42-48'
        }
        
            ,
        
        {
            "title": ' «Артклассика»',
            "link": '',
            "address": 'Переведеновский пер., 13, стр. 13, оф. 13 (2-й эт.) (м. Бауманская)',
            "city": 'Москва',
            "lat": '55.781035',
            "lng": '37.689303', 
            "type": '1',
            "subtitle": '',
            "weburl": 'www.artclassica.ru',
            "phone": '+7(495) 646-79-45'
        }
        
            ,
        
        {
            "title": ' Саратовский государственный художественный музей им. А.Н. Радищева',
            "link": '',
            "address": 'Радищева ул., 41',
            "city": 'Саратов',
            "lat": '51.533254',
            "lng": '46.036511', 
            "type": '3',
            "subtitle": 'Здание биржи',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Саратовский государственный художественный музей им. А.Н. Радищева',
            "link": '',
            "address": 'Первомайская ул., 75',
            "city": 'Саратов',
            "lat": '51.531461',
            "lng": '46.038389', 
            "type": '3',
            "subtitle": 'Гимназический корпус',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Музей-усадьба В.Э. Борисова-Мусатова',
            "link": '',
            "address": 'Вольская ул., 33',
            "city": 'Саратов',
            "lat": '51.524254',
            "lng": '46.019041', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Дом-музей Павла Кузнецова',
            "link": '',
            "address": 'Октябрьская ул., 56',
            "city": 'Саратов',
            "lat": '51.533951',
            "lng": '46.048168', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Балаковская художественная галерея',
            "link": '',
            "address": 'Заовражная ул., 9',
            "city": 'Балаково',
            "lat": '52.044053',
            "lng": '47.772901', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Художественно-мемориальный музей К.С. Петрова-Водкина',
            "link": '',
            "address": 'Ленина ул., 208',
            "city": 'Хвалынск',
            "lat": '52.475085',
            "lng": '48.10295', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Картинная галерея им. К.С. Петрова-Водкина',
            "link": '',
            "address": 'Ленина ул. 89',
            "city": 'Хвалынск',
            "lat": '52.492795',
            "lng": '48.10872', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Энгельсская картинная галерея',
            "link": '',
            "address": 'Пл. Ленина, 36',
            "city": 'Энгельс',
            "lat": '51.500488',
            "lng": '46.12366', 
            "type": '3',
            "subtitle": '',
            "weburl": '',
            "phone": '+7 (8452) 39-18-08'
        }
        
            ,
        
        {
            "title": ' Магазин «Русское зарубежье» ',
            "link": '',
            "address": 'Нижняя Радищевская ул., 2',
            "city": 'Москва',
            "lat": '55.742827',
            "lng": '37.65185', 
            "type": '1',
            "subtitle": '',
            "weburl": 'www.domrz.ru',
            "phone": '+7 (495) 137-84-01'
        }
        
            ,
        
        {
            "title": ' Kнижный магазин в "Кладовой над оврагом"',
            "link": '',
            "address": '',
            "city": 'Московская область, пос. Архангельское',
            "lat": '55.784574',
            "lng": '37.290277', 
            "type": '1',
            "subtitle": 'музей-заповедник "Архангельское"',
            "weburl": '',
            "phone": ''
        }
        
            ,
        
        {
            "title": ' Тверская областная картинная галерея',
            "link": '',
            "address": 'ул. Советская, д. 3',
            "city": 'Тверь',
            "lat": '56.862504',
            "lng": '35.899966', 
            "type": '3',
            "subtitle": 'Тверской императорский дворец',
            "weburl": '',
            "phone": ''
        }
        
        ];
    </script>
    
    <script type="text/javascript">
        ymaps.ready(init);
        function init() {
            var myMap = new ymaps.Map("map", {
                center: [55.73, 37.75],
                zoom: 4
            }, {
                searchControlProvider: 'yandex#search'
            }),
             yellowCollection = new ymaps.GeoObjectCollection(null, {
                 preset: 'islands#yellowIcon'
             });

            var myGeoObjects = [];

            for (var i = 0; i < markers.length; i++) {
                var icon = ''

                switch (markers[i].type) {
                    case '1':
                        // book stores
                        icon = 'islands#blueHomeIcon';
                        break;
                    case '2':
                        // antique store
                        icon = 'islands#redSouvenirsIcon';
                        break;
                    case '3':
                        //  museums
                        icon = 'islands#redLeisureIcon';
                        break;
                    case '4':
                        // hotels
                        icon = 'islands#redHotelIcon';
                        break;
                    case '5':
                        // libraries
                        icon = 'islands#redBookIcon';
                        break;
                    default:
                        icon = 'islands#redBookIcon'
                        break;
                }

                var baloon = '<address><strong>' + markers[i].title + '</strong><br/>'

                if(markers[i].subtitle != '')
                {
                    baloon += markers[i].subtitle + '<br/>'
                }

                baloon += markers[i].city + ', ' + markers[i].address + '<br/>'    
                
                if (markers[i].phone != '')
                {
                    baloon += markers[i].phone + '<br/>'
                }
                if (markers[i].weburl != '')
                {
                    baloon += 'Подробнее: <a href="' + markers[i].weburl + '">' + markers[i].weburl + '</a></address>'
                }

                myGeoObjects[i] = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates: [markers[i].lat,markers[i].lng ]
                    },
                    properties: {
                        clusterCaption: markers[i].title,
                        balloonContentBody: [
                        baloon
                        ].join('')
                    }},
                    {
                        preset: icon
                    }
                );
            }

            var myClusterer = new ymaps.Clusterer();
            myClusterer.add(myGeoObjects);
            myMap.geoObjects.add(myClusterer);
        }
    </script>
    <section class="featured">
        <div class="content-wrapper container">
                 

                        <hgroup class="title3">
                            <p>УВАЖАЕМЫЕ ЧИТАТЕЛИ!</p>
                        </hgroup>
                        <div class="destext">
                        <p>
                            Приобрести номера журнала «Золотая палитра» можно в книжных магазинах и музейных киосках, адреса которых указаны ниже, а также в редакции журнала.
                            <br><br>
                            Обращаем внимание руководителей библиотек – научных, областных, музейных и учебных заведений, что можно приобрести полный комплект номеров журнала «Золотая палитра», вышедших с 2009 по 2023 год (всего – 22 номера), стоимость комплекта – 8500 руб.
                            <br><br>
                            Заказать комплект номеров можно как в редакции журнала «Золотая палитра», так и в книжном магазине <a href="https://www.artclassica.ru">«Артклассика»</a>.
                        </p>
                        </div>
                        <br />
              
        </div>
    </section>

    <section class="map section">
        <div class="content-wrapper container">
        <hgroup class="title">
                        <div class="titletext">
                            <h3>СЕТЬ ПО РАСПРОСТРАНЕНИЮ ЖУРНАЛА:</h3>
                        </div>
        </hgroup>
        <div id="map" style="height:500px; padding: 0; margin:auto; "></div>
        </div>
    </section>

    <section class="spisok section"> 
        <div class="content-wrapper1 container">
            <h3 class="magazini">МАГАЗИНЫ</h3>
            <div class="mesto">
                <div class="gorod">
                    <p>Москва</p>
                </div>
                <div class="nazv">
                    <p>Государственная Третьяковская галерея</p>
                </div>
                <div class="mesto1">
                    <p>Лаврушинский пер., 10 (м. Третьяковская): +7(495) 957-07-00 (доб. 2555)</p>
                </div>
                <div class="mesto1">
                    <p>Крымский вал, 10 (м. Октябрьская, Парк культуры): +7(495) 957-07-00 (доб. 2558)</p>
                </div>
                <div class="web">
                    <p>Интернет-магазин: <a href="https://shop.tretyakovgallery.ru/">Третьяковская галерея</a>.</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>

            <div class="mesto">
                <div class="nazv">
                    <p>Дом русского зарубежья имени Александра Солженицына</p>
                </div>
                <div class="mesto1">
                    <p>Книжный магазин «Русское зарубежье»: Нижняя Радищевская, 2 (м. Таганская) +7(495) 137-84-01;</p>
                </div>
                <div class="web">
                    <p>kmrzbookstore@yandex.ru</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>

            <div class="mesto">
                <div class="nazv">
                    <p>Государственный музей А.С. Пушкина</p>
                </div>
                <div class="mesto1">
                    <p>Пречистенка ул., 12/2 (м. Кропоткинская)</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>
            <div class="mesto">
                <div class="nazv">
                    <p>Мемориальная квартира А.С. Пушкина на Арбате</p>
                </div>
                <div class="mesto1">
                    <p>Арбат, 53 (м. Смоленская)</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>

            <div class="mesto">
                <div class="nazv">
                    <p>«Серовин и Коров», Музей русского импрессионизма</p>
                </div>
                <div class="mesto1">
                    <p>Ленинградский пр-т, 15, ст. 11 (м. Белорусская, Динамо): +7(495) 105-91-24</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>

            <div class="mesto">
                <div class="nazv">
                    <p>«Артклассика»</p>
                </div>
                <div class="mesto1">
                    <p>Переведеновский пер., 13, стр. 13, оф. 13 (2-й эт.) (м. Бауманская): +7(495) 646-79-45</p>
                </div>
                <div class="web">
                    <p>Интернет-магазин: <a href="https://www.artclassica.ru">Артклассика</a>.</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>

            <div class="mesto">
                <div class="nazv">
                    <p>«Библио-Глобус», <span class="meow">отдел</span> «Антиквариат. Коллекционер. Подарки»</p>
                </div>
                <div class="mesto1">
                    <p>Лаврушинский пер., 10 (м. Третьяковская): +7(495) 957-07-00 (доб. 2555)</p>
                </div>
                <div class="mesto1">
                    <p>Крымский вал, 10 (м. Октябрьская, Парк культуры): +7(495) 957-07-00 (доб. 2558)</p>
                </div>
                <div class="web">
                    <p>Интернет-магазин: <a href="https://shop.tretyakovgallery.ru/">Третьяковская галерея</a>.</p>
                </div>
                <div class="svgg">
                <svg width="7533" height="253" viewBox="0 0 7533 253" fill="none" xmlns="http://www.w3.org/2000/svg">
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 493 253)" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="108.383" y1="235.383" x2="323.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 489 252)" stroke="#313131" stroke-width="47"/>
<line x1="472.383" y1="235.383" x2="687.383" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 853 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 125 3)" stroke="#313131" stroke-width="47"/>
<line x1="34.383" y1="126.884" x2="141.884" y2="19.383" stroke="#313131" stroke-width="47"/>
<path d="M17 111L141.501 235.501" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6025.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M6059.5 109L5935 233.501" stroke="#313131" stroke-width="47"/>
<line x1="505.617" y1="19.617" x2="290.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 489 3)" stroke="#313131" stroke-width="47"/>
<line x1="869.617" y1="19.617" x2="654.617" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="836.383" y1="235.383" x2="1051.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1217 252)" stroke="#313131" stroke-width="47"/>
<line x1="1200.38" y1="235.383" x2="1415.38" y2="20.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1581 252)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 853 3)" stroke="#313131" stroke-width="47"/>
<line x1="1233.62" y1="19.617" x2="1018.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1217 3)" stroke="#313131" stroke-width="47"/>
<line x1="1597.62" y1="19.617" x2="1382.62" y2="234.617" stroke="#313131" stroke-width="47"/>
<line x1="1565.38" y1="234.383" x2="1780.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 1946 251)" stroke="#313131" stroke-width="47"/>
<line x1="1929.38" y1="234.383" x2="2144.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2310 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1582 2)" stroke="#313131" stroke-width="47"/>
<line x1="1962.62" y1="18.617" x2="1747.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 1946 2)" stroke="#313131" stroke-width="47"/>
<line x1="2326.62" y1="18.617" x2="2111.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="2293.38" y1="234.383" x2="2508.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 2674 251)" stroke="#313131" stroke-width="47"/>
<line x1="2657.38" y1="234.383" x2="2872.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3038 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2310 2)" stroke="#313131" stroke-width="47"/>
<line x1="2690.62" y1="18.617" x2="2475.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 2674 2)" stroke="#313131" stroke-width="47"/>
<line x1="3054.62" y1="18.617" x2="2839.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3021.38" y1="234.383" x2="3236.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3402 251)" stroke="#313131" stroke-width="47"/>
<line x1="3385.38" y1="234.383" x2="3600.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 3766 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3038 2)" stroke="#313131" stroke-width="47"/>
<line x1="3418.62" y1="18.617" x2="3203.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3402 2)" stroke="#313131" stroke-width="47"/>
<line x1="3782.62" y1="18.617" x2="3567.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="3749.38" y1="234.383" x2="3964.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4130 251)" stroke="#313131" stroke-width="47"/>
<line x1="4113.38" y1="234.383" x2="4328.38" y2="19.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4494 251)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 3766 2)" stroke="#313131" stroke-width="47"/>
<line x1="4146.62" y1="18.617" x2="3931.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4130 2)" stroke="#313131" stroke-width="47"/>
<line x1="4510.62" y1="18.617" x2="4295.62" y2="233.617" stroke="#313131" stroke-width="47"/>
<line x1="4478.38" y1="233.383" x2="4693.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 4859 250)" stroke="#313131" stroke-width="47"/>
<line x1="4842.38" y1="233.383" x2="5057.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5223 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4495 1)" stroke="#313131" stroke-width="47"/>
<line x1="4875.62" y1="17.617" x2="4660.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 4859 1)" stroke="#313131" stroke-width="47"/>
<line x1="5239.62" y1="17.617" x2="5024.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="5206.38" y1="233.383" x2="5421.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5587 250)" stroke="#313131" stroke-width="47"/>
<line x1="5570.38" y1="233.383" x2="5785.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 5951 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5223 1)" stroke="#313131" stroke-width="47"/>
<line x1="5603.62" y1="17.617" x2="5388.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5587 1)" stroke="#313131" stroke-width="47"/>
<line x1="5967.62" y1="17.617" x2="5752.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="152.03" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7481.5 141.501)" stroke="#313131" stroke-width="47"/>
<path d="M7515.5 109L7391 233.501" stroke="#313131" stroke-width="47"/>
<line x1="5934.38" y1="233.383" x2="6149.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6315 250)" stroke="#313131" stroke-width="47"/>
<line x1="6298.38" y1="233.383" x2="6513.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 6679 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 5951 1)" stroke="#313131" stroke-width="47"/>
<line x1="6331.62" y1="17.617" x2="6116.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6315 1)" stroke="#313131" stroke-width="47"/>
<line x1="6695.62" y1="17.617" x2="6480.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line x1="6662.38" y1="233.383" x2="6877.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7043 250)" stroke="#313131" stroke-width="47"/>
<line x1="7026.38" y1="233.383" x2="7241.38" y2="18.383" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 7407 250)" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 6679 1)" stroke="#313131" stroke-width="47"/>
<line x1="7059.62" y1="17.617" x2="6844.62" y2="232.617" stroke="#313131" stroke-width="47"/>
<line y1="-23.5" x2="304.056" y2="-23.5" transform="matrix(0.707107 0.707107 0.707107 -0.707107 7043 1)" stroke="#313131" stroke-width="47"/>
<line x1="7423.62" y1="17.617" x2="7208.62" y2="232.617" stroke="#313131" stroke-width="47"/>
</svg>
            </div>
            </div>
        </div>
    </section>
        


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
    </form>
    <script src="js/main.js"></script>
</body>
</html>
