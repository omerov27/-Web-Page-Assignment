<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "fenerbahce";

$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    echo mysqli_connect_error();
}
?>