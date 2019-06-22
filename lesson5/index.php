<?php

include_once "config.php";

include_once DIR_ENGINE . "data.php";

$images = getQuery("SELECT * FROM images ORDER BY views DESC");

include_once DIR_PUBLIC . "header.php";
include_once DIR_PUBLIC . "content.php";
include_once DIR_PUBLIC . "footer.php";
