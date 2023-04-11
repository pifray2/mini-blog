// filter function
$('#textarea').on('keyup', function(event) {
  if (event.keyCode === 13) {
    $('.search').click();
  }
});
$('.search').click(function() {
  const searchValue = $('#textarea').val();
  $('.card').hide();
  if (searchValue === "") {
    $('.card').show();
    $('.row').masonry('layout');
  } else {
    $('.card').filter("." + searchValue).show();
    $('.row').masonry('layout');
  }
});

// popup for adding cards

$('.add-card-btn').click(function () {
  $('.popup-bg').fadeIn(300);});
$('.btn-close').click(function () {  $('.popup-bg').fadeOut(300);
});
$('.popup-bg').click(function (e) {  if (!$(e.target).closest(".popup").length) {
  $('.popup-bg').fadeOut(300);  }
});

// input file img loading

$(document).ready(function() {
// Следим за изменениями в input file
  $('#file-drop').change(function() {
// Получаем файл, который был загружен
    let file = this.files[0];

// Если файл не пустой
    if (file) {
// Создаем объект FileReader, который позволяет читать содержимое файла
      let reader = new FileReader();

// Когда файл будет прочитан, выполним следующую функцию
      reader.onload = function(e) {
// Создаем новый элемент изображения и устанавливаем ему значение src равным содержимому файла
        $('#imagePreview').html('<img src="' + e.target.result + '">');
      }

// Читаем содержимое файла в объект FileReader
      reader.readAsDataURL(file);

      $('.drag-n-drop').hide();
    }
  });
});

$(document).ready(function() {
  $('#file-drop').on('dragenter', function() {
    $('.drag-n-drop').html('Отпустите, чтобы загрузить');
    $('.file-drop').css('border', '2px solid #ccc');
  });
  $('#file-drop').on('dragleave', function() {
    $('.drag-n-drop').html('Перетащите файлы сюда или нажмите для выбора');
    $('.file-drop').css('border', '2px dashed #ccc');
  });
});

// // card-add function
// $(document).ready(function() {
//   let cardCount = 6;
//
//   $('.card-btn').click(function() {
//     // adding div containers
//     const cardContainer = $('<div></div>').addClass('col-lg-4 col-md-6 col-6');
//     $('.row').append(cardContainer);
//
//     const card = $('<div></div>').addClass('card');
//     $('.col-lg-4:last-child').append(card);
//
//     const cardBody = $('<div></div>').addClass('card-body');
//     $('.col-lg-4:last-child .card').append(cardBody);
//
//     // adding content to cards
//     const img = $('<h5>cardCount</h5>').addClass('card-body');
//     $('.col-lg-4:last-child .card-body').append(img);
//     cardCount++;
//   });
// });
