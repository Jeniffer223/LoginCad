<?php

$host = 'localhost';
$db = "logincad";
$user = 'root';
$password = 'root';

$pdo = new PDO("mysql:host=localhost;dbname=logincad", 'root', 'root');

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);

$stmt->execute();

echo '<br> Executou o INSERT . <br><br>';