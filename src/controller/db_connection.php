<?php
    //this all works you just have to have the db set up on your machine, pages that run this file before the main content will not load due to error
    $host = '127.0.0.1'; // or 'localhost'
    $dbname = 'grow_for_good_417';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>