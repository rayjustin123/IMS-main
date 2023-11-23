<?php

$host = "ims-db-mysql-do-user-1470238-0.c.db.ondigitalocean.com";
$dbname = "defaultdb";
$username = "doadmin";
$password = "AVNS_WDn6Taz9qQiXQ9dzgnb";

// $mysqli = new mysqli(hostname: $host,
//                      username: $username,
//                      password: $password,
//                      database: $dbname);

$mysqli = new mysqli($host, $username, $password, $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;