<?php 
include ("php/configgg.php");


$especificacao = $_POST["especificacao"];
$quantidade = $_POST["quantidade"];
$marca = $_POST["marca"];
$sabor = $_POST["sabor"];
$preco = $_POST["preco"];
$ingredientes = $_POST["ingredientes"];
$nome = $_POST["nome"];
$validade = $_POST["validade"];
$imagem_dir = "imagens/";
$imagem_nome = $_FILES["imagem"]["name"];
$imagem_temp = $_FILES["imagem"]["tmp_name"];


move_uploaded_file($imagem_temp, $imagem_dir . $imagem_nome);

$sql = "INSERT INTO produto (especificacao, quantidade, marca, sabor, preco, ingredientes, nome, validade, imagem) 
VALUES ('$especificacao', '$quantidade' , '$marca',  '$sabor' , '$preco' , '$ingredientes', '$nome', '$validade', '$imagem_dir$imagem_nome')";

if($conn->query($sql) === TRUE) {
    header("location: loja.php");
} else {
    echo "Erro ao adicionar produto: " . $conn->error;
}

$conn->close();

?>