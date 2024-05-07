<?php
require_once "helpers/function.php";

$name = $_SESSION['user'] ;
$family = $_SESSION['family'];

// Выполняем запрос для получения ID пользователя
$sql = "SELECT id FROM `users` WHERE name=? AND family=?";
$stmt = $db->prepare($sql); // Используем подготовленные выражения для предотвращения SQL-инъекций
$stmt->bind_param("ss", $name, $family);
$stmt->execute();
$result = $stmt->get_result(); // Получаем результат выполнения запроса
$row = $result->fetch_assoc(); // Извлекаем первую строку результата
$author_id = $row['id']; // Присваиваем переменной $author_id значение ID пользователя

$title = $_POST['title'];
$body = $_POST['body'];

// Экранируем специальные символы в заголовке и теле сообщения
$title = $db->real_escape_string($title);
$body = $db->real_escape_string($body);

// Формируем SQL-запрос для вставки сообщения в таблицу `posts`
$sql = "INSERT INTO `posts` (title, body, author_id) VALUES(?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->bind_param("sss", $title, $body, $author_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "<script language='javascript'>
        setTimeout(function() {
            window.location.href = 'prof.php';
        }, 0);
    </script>";
} else {
    echo "Ошибка при добавлении сообщения.";
}
?>