<!DOCTYPE html>
<html lang="ru">
<head>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Галерея</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<a href="index.php" class="Archi"><b>Archi</b></a>
<div class="txt-area">
  <label for="textarea"></label>
  <button class="add-card-btn">+</button>

  <div id="popup-bg" class="popup-bg">
    <div class="popup card-popup">
      <form action="" method="post">
        <button type="button" class="btn-close" aria-label="Close"></button>
        <div class="test-card" >
          <div class="card test-card2">
            <div class="file-drop">
              <p class="drag-n-drop">Перетащите файлы сюда или нажмите для выбора</p>
              <input type="file" id="file-drop" name="card-img" multiple/>
              <div id="imagePreview"></div>
            </div>
            <div class="card-body">
              <textarea name="card-header" class="card-header" placeholder="Добавьте название"></textarea>
              <p></p>
              <textarea name="card-description" class="card-description" placeholder="Описание" ></textarea>
              <p></p>
              <a href="#" class="btn btn-primary card-btn">Создать</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <input name="text" id="textarea" placeholder="Что хотите найти?">
  <button class="search" type="button" id="find-btn">Найти</button>
</div>


<div class="container">
  <div class="row" data-masonry='{"percentPosition": true}'>
    <div class="col-lg-4 col-md-6 col-6" >
      <div class="card портрет">
        <img src="img/daniil.jpg" alt="" class="card-img-top card-v">
        <div class="card-body">
          <h5 class="card-title"><b>Прекрасный мужчина на прекрасном фоне</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6">
      <div class="card портрет">
        <img src="img/author.jpg" alt="" class="card-img-top card-v">
        <div class="card-body">
          <h5 class="card-title"><b>Просто прекрасный мужчина</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi aspernatur blanditiis delectus dolor ea harum impedit iste iure, obcaecati pariatur quo quos reiciendis, sint ullam, veniam voluptas voluptatum?</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6">
      <div class="card портрет">
        <img src="img/rayan.jpg" alt="" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title"><b>Крутой мужик</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi aspernatur blanditiis delectus dolor ea harum impedit iste iure, obcaecati pariatur quo quos reiciendis, sint ullam, veniam voluptas voluptatum?</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6">
      <div class="card пейзаж">
        <img src="img/pic1.jpg" alt="" class="card-img-top ">
        <div class="card-body">
          <h5 class="card-title"><b>Прекрасная картина</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi aspernatur blanditiis delectus dolor ea harum impedit iste iure, obcaecati pariatur quo quos reiciendis, sint ullam, veniam voluptas voluptatum?</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6">
      <div class="card пейзаж">
        <img src="img/japan.jpg" alt="" class="card-img-top card-v">
        <div class="card-body">
          <h5 class="card-title"><b>Прекрасная картина</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi aspernatur blanditiis delectus dolor ea harum impedit iste iure, obcaecati pariatur quo quos reiciendis, sint ullam, veniam voluptas voluptatum?</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-6">
      <div class="card мемы">
        <img src="img/monke.jpg" alt="" class="card-img-top card-v">
        <div class="card-body">
          <h5 class="card-title"><b>Я на парах:</b></h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet animi aspernatur blanditiis delectus dolor ea harum impedit iste iure, obcaecati pariatur quo quos reiciendis, sint ullam, veniam voluptas voluptatum?</p>
          <a href="#" class="btn btn-primary">Согласен</a>
        </div>
      </div>
    </div>



  </div>
</div>

<script src="js/gallery.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
</body>
</html>
