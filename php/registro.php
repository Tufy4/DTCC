<?php
    include ("config.php");
    $mysql = new banco();
    $mysql->conecta();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $cpf = $_POST["cpf"];
    



    $sql = "INSERT INTO usuarios( nome, email, senha, cpf)
    VALUES ( '$nome',  '$email' , '$senha', '$cpf')";



$res = @mysqli_query($mysql->con, $sql) or die ("erro ao inserir");

header('location:../login_route.php');

?>