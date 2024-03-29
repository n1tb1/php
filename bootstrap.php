<?php
$MyArray = [
    1 => 'Январь',
    2 => 'Февраль',
    3 => "Март",
    4 => "Апрель",
    3 => "Май",
    6 => "Июнь", "Июль", "Август", "Сентябрь", "Октябрь",
    "Ноябрь", "Декабрь",
    20 => ["1", "2", "3"]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Необходимые Мета-теги всегда на первом месте -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
        integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
</head>
<body>

<div class="dropdown open">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <?php foreach ($MyArray as $key => $value) : ?>
          <?php if (!is_array($value)) : ?>
          <li><a tabindex="-1" href="#"><?= $value ?></a></li>
          <?php else : ?>
          <li>
            <ul class="">
                <?php foreach ($value as $key1 => $val) : ?>
                  <li><a tabindex="-1" href="#"><?= $val ?></a></li>
                <?php endforeach; ?>
            </ul>
          </li>
          <?php endif; ?>
      <?php endforeach; ?>
  </ul>
</div>

<!-- jQuery первый, затем Tether, затем Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
</body>


