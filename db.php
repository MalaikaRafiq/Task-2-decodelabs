<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "aethera_db"
);


if($conn->connect_error){

    die("Connection Failed");

}


echo "Database Connected Successfully";


?>