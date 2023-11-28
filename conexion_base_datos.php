<?php

$connection = mysqli_connect('localhost','root','','login');

if (!$connection) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>