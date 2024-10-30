<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) 
{


include ("config.php"); 
$mysql = new banco();
$mysql->conecta();
$email= $_POST['email'];
$senha = $_POST['senha'];

$sql= ("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

$result = @mysqli_query($mysql->con, $sql) or die ("erro ao selecionar");

  if(mysqli_num_rows($result) < 1)

  {
    header('location:../home.php');
  
  }
  else
  {
  
    unset ($_SESSION['email' ]);
    unset ($_SESSION['senha' ]);
    header('location: ../home.php');
 
 }
}
else
{
  $_SESSION['email' ] = $email; 
  $_SESSION['senha' ]= $senha;
   header('location: ../login_route.php');
}






?>