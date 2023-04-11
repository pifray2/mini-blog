<?php
session_start();
require_once 'connect.php';

$cardImg = $_POST['card-img'];
$cardHeader = $_POST['card-header'];
$cardDescription = $_POST['card-description'];
$cardClass = $_POST['card-class'];


$conn = new mysqli('localhost','root','','users');

// Проверка соединения
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// запись данных в бд
$content = $_POST["content"];
$sql = "INSERT INTO `blogs` (`id`, `img`, `header`, `description`, `class`) VALUES (NULL, '$cardImg','$cardHeader', '$cardDescription', '$cardClass')";

if ($conn->query($sql) === TRUE) {
 header('Location: ../gallery.php');
} else {
  echo "Ошибка записи данных в БД: " . $conn->error;
}

