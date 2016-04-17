<?php
$my_host = "mysql13.000webhost.com";
$my_user = "a9574338_lifeusr";
$my_password = "lifeusrF3";
$my_db = "a9574338_lifewdb";

$mysqli = new mysqli($my_host, $my_user, $my_password, $my_db);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
}

?>
