<?php
$mysqli = new mysqli("localhost", "root", "adi", "datakoprasi");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>