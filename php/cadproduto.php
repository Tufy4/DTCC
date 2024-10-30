<?php
    include ("config.php");
    $mysql = new banco();
    $mysql->conecta();

    $especificacao = $_POST["especificacao"];
    $quantidade = $_POST["quantidade"];
    $marca = $_POST["marca"];
    $sabor = $_POST["sabor"];
    $preco = $_POST["preco"];
    $ingredientes = $_POST["ingredientes"];
    $nome = $_POST["nome"];
    $validade = $_POST["validade"];
    



    $sql = "INSERT INTO produto(especificacao, quantidade, marca, sabor, preco, ingredientes, nome, validade )
    VALUES ( '$especificacao', '$quantidade' , '$marca',  '$sabor' , '$preco' , '$ingredientes', '$nome', '$validade')";



$res = @mysqli_query($mysql->con, $sql) or die ("erro ao inserir");

header('location:../index.html');

?>