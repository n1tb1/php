<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 17/06/2019
 * Time: 13:48
 */
$images = getImages(__DIR__ . DIRECTORY_SEPARATOR . 'img/');

function getImages($path = '')
{
    return array_diff(scandir($path), array('..', '.'));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        .modalwindow {
            position:fixed;
            display:none; /* Скрываем модальное окно по умолчанию */
            z-index:9999;
            width:650px;
            background: #FF5722;
            -webkit-box-shadow: 0 8px 6px -6px black;
            -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;
            -webkit-box-shadow: 0 8px 6px -6px black;
            -moz-box-shadow: 0 8px 6px -6px black;
            box-shadow: 0 8px 6px -6px black;
        }
        h2 {
            background-color: #E64A19;
            padding: 15px;
            font-size: 25px;
            color: #000;
            margin: 0;
            font-family: arial;
            text-align: center;
        }
        .content {
            padding: 20px;
            color: #fff;
            font-size: 22px;
            line-height: 30px;
        }
        .close {
            float: right;
            margin-top: -47px;
            margin-right: 15px;
            width: 17px;
            height: 17px;
            display: block;
            padding: 10px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            font-family: arial;
        }

        .galleryPreviewsContainer img {
            width: 200px;
            height: auto;
        }

        .content img {
            width: 600px;
            height: auto;
        }
    </style>
</head>
<body>
<div class="galleryPreviewsContainer">
    <? foreach ($images as $image) : ?>
        <a href="img/<?= $image ?>" class="popup" target="_blank"><img src="img/<?= $image ?>" alt="<?= $image ?>"></a>
    <? endforeach; ?>
</div>
<div id="modal" class="modalwindow">

    <!-- Заголовок модального окна -->
    <h2>Простое jQuery модальное окно</h2>

    <!-- кнопка закрытия окна определяется как класс close -->
    <a href="#" class="close">X</a>

    <div class="content">
        <!-- Содержимое модального окна -->
    </div>

</div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="application/javascript">
  //выбираем все теги с именем  modal
  $('.popup').click(function(e) {
    //Отменяем поведение ссылки
    e.preventDefault();

    let imgNode = $(this).find("img").clone();

    let id = $("#modal");
    //Получаем ширину и высоту окна
    let winH = $(window).height();
    let winW = $(window).width();
    //Устанавливаем всплывающее окно по центру
    $(id).css('top', winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);

    $(id).find(".content").html(imgNode);
    //эффект перехода
    $(id).fadeIn(500);
  });
  //если нажата кнопка закрытия окна
  $('.modalwindow .close').click(function (e) {
    //Отменяем поведение ссылки
    e.preventDefault();
    $('.modalwindow').fadeOut(500);
  });
</script>
</body>
</html>


