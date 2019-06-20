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
    .galleryPreviewsContainer  img {
      width: 200px;
      height: auto;
    }
  </style>
</head>
<body>
<div class="galleryPreviewsContainer">
    <? foreach ($images as $image) : ?>
      <a href="img/<?= $image ?>" target="_blank"><img src="img/<?= $image ?>" alt="<?= $image ?>"></a>
    <? endforeach; ?>
</div>
</body>
</html>
