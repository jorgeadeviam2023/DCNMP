<?php
    echo("Hello from sub.domain.com");

    /*** MySQL  hostname ***/
    $hostname = 'mariadb';
    /*** MySQL  username ***/
    $username = 'root';
    /*** MySQL  password ***/
    $password = 'root';
    /*** MySQL  database ***/
    $dbname = 'mysql';
    /*** MySQL  port ***/
    $port = 3306;

    // Check if the connection to the database was successful.
    $db = mysqli_connect($hostname, $username, $password, $dbname, $port);

?>