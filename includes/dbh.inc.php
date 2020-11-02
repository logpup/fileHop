<?php

$servername = "localhost";
$dBUsermame = "root";
$dBPassword = "pullpusH2+4";
$dBName = "loginsystem";

$conn = mysqli_connect($servername, $dBUsermame, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}