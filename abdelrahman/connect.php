<?php 
require_once('config.php');
try {
    $con= new PDO($dsn,$dpuser, $dppassword);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


?>