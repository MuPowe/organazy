<?php

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "123456we");
define("DBDB", "organazy");

$link = mysqli_connect(DBHOST,DBUSER, DBPASS, DBDB);

$mysqli = new mysqli(DBHOST,DBUSER, DBPASS, DBDB);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

?>
