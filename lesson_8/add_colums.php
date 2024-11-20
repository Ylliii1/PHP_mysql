<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=my_db", "root", "");

    //Table alternation SQL
    $sql = "ALTER TABLE test add age INT(25)";

    //Execute the statement
    $pdo -> exec($sql);

    echo "Column deleted succesfully!!";
}catch(PDOExeception $e){
    echo "Error deleted column: ".$e->getmessage();
}
?>