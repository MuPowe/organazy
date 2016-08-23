<?php
$link = mysqli_connect("localhost","root", "kurec321", "organazy");

$mysqli = new mysqli("localhost", "root", "kurec321", "organazy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
