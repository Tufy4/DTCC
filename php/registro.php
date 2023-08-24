<?php
    include ("config.php");
    $mysql = new banco();
    $mysql->conecta();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    



    $sql = "INSERT INTO usuarios( nome, email, senha)
    VALUES ( '$nome',  '$email' , '$senha')";



$res = @mysqli_query($mysql->con, $sql) or die ("erro ao inserir");

header('location:../index.html');

?>