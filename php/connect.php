<?php
$my_host = "localhost";
$my_user = "lifeUser";
$my_password = "";
$my_db = "db_life_wire";

$mysqli = new mysqli($my_host, $my_user, $my_password, $my_db);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

?>
