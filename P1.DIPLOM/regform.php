<?php
  session_start();
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Archi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;500&display=swap" rel="stylesheet">

</head>
<body>
<div class="regform">
  <form action="includes/signup.php" method="post" onsubmit="return checkPasswords();">

    <label for="name" ><b class="log-email">Имя пользователя</b></label><p></p>
    <input type="text" name="name" id="name" placeholder="Введите имя"> <p></p>

  <label for="email" ><b class="log-email">Логин\Email</b></label><p></p>
  <input type="email" name="login" id="email" placeholder="Введите логин"> <p></p>

  <label for="password"><b class="log-email">Пароль</b></label><p></p>
  <input type="password" name="password" id="password" placeholder="Введите пароль"><p></p>

    <label for="confirmPassword"><b class="log-email">Подтвердите пароль</b></label><p></p>
    <input type="password" name="confirm-password" id="confirmPassword" placeholder="Подтвердите пароль"><p></p>

      <?php
      if ($_SESSION['message']) {
        echo '<p class="msg"> ' .  $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message']);
      ?>

  <a href="auth.php"><button type="submit" class="submit-popup btn1">Зарегистрироваться</button></a>
  <a href="index.php"><button type="button" class="backup" >Назад</button></a>

  </form>
</div>
</body>
</html>
