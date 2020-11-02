<?php

$servername = "localhost";
$dBUsermame = "root";
$dBPassword = "";
$dBName = "loginsystem";

$conn = mysql_connect($servername, $dBUsermame, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}