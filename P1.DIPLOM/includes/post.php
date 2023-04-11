<?php
require_once 'connect.php';

$conn = new mysqli('localhost','root','','users');
$query = "SELECT * FROM blogs";
$result = mysqli_query($conn, $query);

// Генерация HTML-кода для каждой карточки
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="col-lg-4 col-md-6 col-6">';
  echo '<div class="card ' . $row['class'] . '">';
  echo '<img src="img/savedPic/' . $row['img'] . '" class="card-img-top card-v">';
  echo '<div class="card-body">';
  echo '<h5 class="card-title"><b>' . $row['header'] . '</b></h5>';
  echo '<p class="card-text">' . $row['description'] . '</p>';
  echo '<a href="#" class="btn btn-primary ">Согласен</a>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}

