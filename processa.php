<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password != $password2){
    echo 'Senha não confere!';
} 
$pdo = new PDO("mysql:host=localhost;dbname=logincad", 'root', 'root');

$stmt = $pdo->prepare("INSERT INTO user(nome, email, senha) values (:name, :email, :password)");

$stmt->bindParam('name', $name);
$stmt->bindParam('email', $email);
$stmt->bindParam('password', $password);


$stmt->execute();

$_SESSION['email'] = $email;

header('location: login.html');


