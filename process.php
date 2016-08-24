<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "kurec321");
define("DBDB", "organazy");

$mysqli = new mysqli(DBHOST,DBUSER, DBPASS, DBDB);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$post_date = file_get_contents("php://input");
$data = json_decode($post_date);


echo "Msg : ".$data->msg."n";
echo "Id : ".$data->id."n";



?>