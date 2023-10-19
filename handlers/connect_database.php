<?php

function connect_to_database() {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbName = "myphplogin";

    $connection = new mysqli($hostname,$username,$password,$dbName);

    if($connection) {
        // echo("Connected to DB");
    } else {
        echo("Error whilst connecting to DB.");
    };

    return $connection;
}

?>