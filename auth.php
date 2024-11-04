<?php   

    $email = $_POST['email'];
    $password = $_POST['password'];

    $pdo = new PDO("mysql:host=localhost;dbname=logincad", 'root', 'root');

    $stmt = $pdo->prepare("SELECT id, name, email, senha FROM user WHERE email = : email AND senha = :senha");
    $stmt->bindParam(' :email', $email);
    $stmt->bindParam(' :senha', $password);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($email == $userData['email'] && $password == $userData['senha']) {
        session_start();
        $_SESSION['email'] = $email;
        header('location: content.php '); 
    } else {
        echo 'Login e senha incorretos!';
    }