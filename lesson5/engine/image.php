<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 21/06/2019
 * Time: 19:16
 */
include_once "../config.php";

include_once "data.php";

$id = $_POST['id'];

updateQuery("UPDATE images SET views = views + 1 WHERE id = '" . $id . "'");

$views = getQuery("SELECT views FROM images WHERE id = '" . $id . "'");

echo json_encode($views[0]);