<?php

$mysqli = new mysqli('localhost', 'root', '', 'tabela') or die(mysqli_error($mysqli));

if (isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $mysqli->query("INSERT INTO tabela (nome, email, telefone) VALUES('$nome', '$email', '$telefone')") or
    die ($mysqli->error);
}