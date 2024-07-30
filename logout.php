<?php
session_start();

// Удалите сессию
session_unset();
session_destroy();

// Перенаправьте на страницу входа
header('Location: index.php?page=login');
exit();
?>