<?php
    session_start();

    $servername = "localhost";
    $database = "Seals";
    $username = "root";
    $password = "senha_do_banco_aqui";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Conectar ao banco
    $conn = new mysqli($servername, $username, $password, $database);

    //$sql = "INSERT INTO Users(email, senha) VALUES ($email, $senha)";
    $sql = "SELECT * FROM Users WHERE email='$email' and senha='$senha';";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $email;
        header('Location: ../Main.php');
        exit();
    } else {
        header('Location: ../Main.html');
        exit();
    }
?>