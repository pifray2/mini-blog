<?php
session_start();
require_once 'connect.php';
$login = $_POST['login'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', '', 'users');
$check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login'");
$user = mysqli_fetch_assoc($check_user);
if ($user && password_verify($password, $user['password'])) {
$_SESSION['user'] = [
'name' => $user['name']
];
header('Location: ../auth.php');
exit;
} else {
  $_SESSION['wrong-password'] = 'Неправильный логин или пароль';
  header('Location: ../index.php');
  exit;
}
