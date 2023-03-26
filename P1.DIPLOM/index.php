<?php
session_start();
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Archi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<a href="gallery.php" style="text-decoration: none"> <h4 class="gallery">Галерея</h4></a>
<button type="button" id="btn" class="btn btn-warning">Войти</button>
<div id="popup-bg" class="popup-bg">
  <div class="popup">
    <form action="includes/signing.php" method="post">
      <button type="button" class="btn-close" aria-label="Close"></button>
      <label for="email">Логин\Email</label>
      <p></p>
      <input type="email" name="login" id="email" placeholder="Введите логин">
      <p></p>
      <label for="password">Пароль</label>
      <p></p>
      <input type="password" name="password" id="password" placeholder="Введите пароль">
      <p></p>
      <?php
      if (isset($_SESSION['wrong-password'])) {
        echo '<p class="msg"> ' .  $_SESSION['wrong-password'] . ' </p>';
      }
      unset($_SESSION['wrong-password']);
      ?>
      <b class="noacc">Нет аккаунта? </b><a href="regform.php" class="noAccout">Зарегистрируйтесь</a>
      <p></p>
      <a href="auth.php"><button type="submit" class="submit-popup btn2">Войти</button></a>
      <p></p>
    </form>
  </div>
</div>
<a href="index.php" class="Archi"><b>Archi</b></a>
<h1 class="header1">Вдохновляйтесь и вдохновляйте других!</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/rayan.jpg" class="d-block w-100" alt="slide-pic1">
    </div>
    <div class="carousel-item">
      <img src="img/japan.jpg" class="d-block w-100" alt="slide-pic2">
    </div>
    <div class="carousel-item">
      <img src="img/pic1.jpg" class="d-block w-100"  alt="slide-pic3">
    </div>
  </div>
</div>



<img src="img/author.jpg" class="about-me" id="about-me" alt="author">
<div class="text">
  Данный веб-сайт был создан в качестве pet-проекта.
  <p></p>
  Разработчиком является <t style="color: chartreuse">Мийзамов Арсен Абдимомунович</t>, обучающийся в Нижневартовском государственном университете.
  <p></p>
  В ходе разработки были применены такие инструменты как HTMl5, CSS, Javascript (Библиотека Jquery), PHP (Фреймворк Laravel);
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossOrigin="anonymous"></script>
<script src="js/jQuery v3.6.4.js"></script>
<script src="js/main.js"></script>
</body>
</html>
