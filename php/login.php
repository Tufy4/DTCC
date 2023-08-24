<?php

include ("config.php"); 

$mysql = new banco();
$mysql->conecta();
$email= $_POST['email'];
$senha = $_POST['senha'];

$sql= ("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

$res = @mysqli_query($mysql->con, $sql) or die ("erro ao selecionar");

header('location:../index.php');



?>