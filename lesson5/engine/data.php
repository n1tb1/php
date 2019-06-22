<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 21/06/2019
 * Time: 19:16
 */

function connectDB() {
    return mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
}

function getQuery($sql) {
    $connection = connectDB();

    $query = mysqli_query($connection, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    mysqli_close($connection);

    return $data;
}

function updateQuery($sql) {
    $connection = connectDB();

    mysqli_query($connection, $sql);

    mysqli_close($connection);
}