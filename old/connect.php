<?php
$connection = mysqli_connect('sql8.freemysqlhosting.net', 'sql8157906', 'h2xfmJwRQD');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'sql8157906');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}