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

// Обработка формы регистрации
if (isset($_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Проверьте, что пароли совпадают
    if ($password !== $confirm_password) {
        $error = 'Пароли не совпадают';
    } else {
        // Check if the email address already exists
        $stmt = $pdo->prepare('SELECT 1 FROM users WHERE email =?');
        $stmt->execute([$email]);
        if ($stmt->fetchColumn()) {
            $error = 'Аккаунт с этой почтой уже создан';
        } else {
            // Хешируйте пароль
            $password_hash = password_hash($password, PASSWORD_DEFAULT);

            // Подготовьте инструкцию
            $stmt = $pdo->prepare('INSERT INTO users (email, password) VALUES (?,?)');

            // Выполните запрос
            if ($stmt->execute([$email, $password_hash])) {
                $success = 'Вы успешно зарегистрировались!';
            } else {
                $error = 'Ошибка регистрации';
            }
        }
    }
}
?>

<form action="register.php" method="post">
    <label>E-mail:</label>
    <input type="email" name="email"><br><br>
    <label>Пароль:</label>
    <input type="password" name="password"><br><br>
    <label>Подтверждение пароля:</label>
    <input type="password" name="confirm_password"><br><br>
    <input type="submit" value="Зарегистрироваться">
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    } elseif (isset($success)) {
        echo "<p style='color: green;'>$success</p>";
    }
    ?>
</form>