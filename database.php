<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pweb-p8';
$db = mysqli_connect($hostname, $username, $password, $database);

function query($query)
{
    global $db;

    $result = mysqli_query($db, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
