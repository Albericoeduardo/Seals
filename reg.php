<?php
    /*
    if (!(isset($_POST['email']) and isset($_POST['senha']))) {
        echo "Por favor informe um email ou senha válidos.";
        exit();
    }
    /*

        mysql> CREATE TABLE Users (
        -> id INT AUTO_INCREMENT,
        -> email VARCHAR(255),
        -> senha VARCHAR(255),
        -> nome VARCHAR(255),
        -> sobrenome VARCHAR(255),
        -> nascimento VARCHAR(255),
        -> PRIMARY KEY (id));

        mysql> INSERT INTO Users (email, senha, nome, sobrenome, nascimento) VALUES ('admin@admin.com', 'admin', 'admin', 'admin', '03022000');

    */

    $servername = "localhost";
    $database = "Seals";
    $username = "root";
    $password = "senha_do_banco_aqui";

    $conn = new mysqli($servername, $username, $password, $database);

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nascimento = $_POST['nascimento'];

    $sql = "INSERT INTO Users(email, senha, nome, sobrenome, nascimento) VALUES ('$email', '$senha', '$nome', '$sobrenome', '$nascimento');";

    $result = $conn->query($sql);

    session_start();

    $_SESSION['usuario'] = $email;
    header('Location: ../../Main.php');

?>