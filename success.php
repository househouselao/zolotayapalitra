<?php
require_once 'vendor/autoload.php';

// Установка API-ключа Stripe
\Stripe\Stripe::setApiKey('sk_test_51PP1KtDyJXIrVcSsXjjyzorn0PiPW4ne4BpbFNc7K22irXWgBd8ocTaX7Uw8z9P05f3551O9whafyFhsRF6xxyRX00CKIYHzOb');


$checkout_session_id = $_SESSION['checkout_session_id'];
// Получение данных о сессии Checkout в Stripe
$checkout_session = \Stripe\Checkout\Session::retrieve($checkout_session_id);


// Создаем запись о заказе в базе данных
$stmt = $pdo->prepare('INSERT INTO orders (user_id, order_date, total, status) VALUES (?,?,?,?)');
$stmt->execute([
    $_SESSION['user_id'],
    date('Y-m-d H:i:s', strtotime('+1 hour')),
    $checkout_session->amount_total / 100,
    'ожидает' // или любой другой статус, который вы хотите установить
]);


// Добавляем товары в заказ
$order_id = $pdo->lastInsertId();
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    $cart_message = "Корзина пуста";
} else {
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $stmt = $pdo->prepare('SELECT price FROM products WHERE id =?');
        $stmt->execute([$product_id]);
        $product_price = $stmt->fetchColumn();

        $stmt = $pdo->prepare('INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?,?,?,?)');
        $stmt->execute([
            $order_id,
            $product_id,
            $quantity,
            $product_price
        ]);
    }
}

$order_data = $_SESSION['order_data'];

$fio = $order_data['fio'];
$phone = $order_data['phone'];
$address = $order_data['address'];
$index = $order_data['index'];

$email = $_SESSION['email'];

// Обновляйте таблицу users
$stmt = $pdo->prepare('UPDATE users SET phone =?, address =?, fio =?, `index` =? WHERE id =?');
$stmt->execute([
    $phone,
    $address,
    $fio,
    $index,
    $_SESSION['user_id']
]);

// Очищаем корзину
unset($_SESSION['cart']);

// Выводим сообщение об успешной оплате


// Перенаправляем пользователя на страницу с информацией о заказе


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">

    <link rel="stylesheet" href="css/success.css">

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
    <section class="123">

    <div class="success container">
    <?php if (isset($cart_message)) {?>
            <p><?= $cart_message?></p>
        <?php }?>
<?php
echo '<h1>Спасибо за покупку!</h1>';
echo '<p>Ваш заказ успешно оформлен. Номер заказа: '. $order_id. '</p>';
?>

<a href="index.php?page=main" class="button__link">
        Вернуться
      </a>
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