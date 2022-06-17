<?php
try {
    $pdo = new PDO("mysql:dbname=pillremind;host=localhost", 'root2', '');
    $pdo->exec("set names utf8;");
    // echo "Connection OK!";
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}