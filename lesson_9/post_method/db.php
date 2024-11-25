<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "anther_db";

try{
    $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}
catch(PDOExeption $e){
    echo "Something went wrong!!";
}
?>