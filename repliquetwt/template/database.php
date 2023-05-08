<?php

try {
    $database = new PDO(
        "mysql:host=localhost; dbname=users",
        "root",
        ""
    );
} catch(PDOException $error){
    die($error);
}

?>