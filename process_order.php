<?php
// Получение данных из формы
$fio = $_POST['fio']?? ''; // Если поле не заполнено, используется пустая строка
$phone = $_POST['phone']?? '';
$address = $_POST['address']?? '';
$index = $_POST['index']?? '';

// Подготовка SQL-запроса для обновления
$sql = "UPDATE users SET fio=?, phone=?, address=?, index=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $fio, $phone, $address, $index, $user_id);

if ($stmt->execute()) {
    echo "Информация успешно обновлена.";
} else {
    echo "Ошибка при обновлении: ". $stmt->error;
}

$stmt->close();
$conn->close();
?>
