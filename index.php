<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 06/06/2019
 * Time: 13:57
 */

/*$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true?
//происходит приведение типов к int поэтому int = int = true
var_dump((int)'012345');                        // Почему 12345?
// приведение к целому числу
var_dump((float)123.0 === (int)123.0); // Почему false?
// строгое сравнение типов float не равно int
var_dump((int)0 === (int)'hello, world'); // Почему true?
// 0 == 0 строка приводится к типу int*/

  $title = "Тестовая страница";
  $h1 = "Тестовый заголовок";
  $year = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <h1><?php echo $h1; ?></h1>
  <p>Сегодня <?php echo $year; ?> год</p>
</head>
<body>

</body>
</html>

<?php
$a = 1;
$b = 2;
echo $a . ' ' . $b . PHP_EOL;

list($a,$b)=[$b,$a];

echo $a . ' ' . $b;
