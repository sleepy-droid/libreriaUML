<?php

$connection = mysqli_connect('localhost','root','','biblioteca');

if (!$connection) {
    die("Error de conexión: " . mysqli_connect_error());
}

?>