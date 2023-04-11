<?php
// Получаем значение параметра card_id из GET-запроса
if (isset($_GET['id'])) {
$id = $_GET['id'];}


// Подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение с базой данных
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Удаляем карточку с указанным card_id из таблицы cards
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$conn->close();

