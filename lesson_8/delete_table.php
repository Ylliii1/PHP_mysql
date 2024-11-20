<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=my_db", "root", "");

    //Table alternation SQL
    $sql = "DROP TABLE users";

    //Execute the statement
    $pdo -> exec($sql);

    echo "Table dropped succesfully!!";
}catch(PDOExeception $e){
    echo "Error dropping table: ".$e->getmessage();
}
?>