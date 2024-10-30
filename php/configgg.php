<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ib";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("FALHA NA CONEXÃO COM O BANCO DE DADOS" . $conn->connect_error);
}
?>