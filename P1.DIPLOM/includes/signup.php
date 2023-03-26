<?php
session_start();
require_once 'connect.php';

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];
$confPass = $_POST['confirm-password'];

if ($password !== $confPass) {
  $_SESSION['message'] = 'Пароли не совпадают';
  header('Location: ../regform.php');
  exit;
}

$conn = mysqli_connect('localhost','root','','users');
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

mysqli_query($conn, "INSERT INTO `users` (`id`, `login`, `password`, `name`) VALUES (NULL, '$login','$hashed_password', '$name')");

$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login'");
$user = mysqli_fetch_assoc($check_user);

$_SESSION['user'] = ['name' => $user['name']];
header('Location: ../auth.php');
exit;
?>
