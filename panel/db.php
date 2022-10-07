<?php 

$host = "localhost";
$username="root";
$password="";
$dbname="test";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", "root", "");
    if ($db) {
        # code..
        return true;
    }
} catch ( PDOException $e ){
    print $e->getMessage();
}


?>