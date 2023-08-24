<!DOCTYPE html>
<HTML LANG="pt-br">
    <head>
    <meta charset="utf-8"/>
    <TITLE> Cadastro</TITLE>
    </head>
        <body>

        <?php
        //$cod_pac =$_POST["cod_pac"];
        $nome =$_POST["nome"];
        $cpf =$_POST["cpf"];
        $datadenasc =$_POST["datadenasc"];
        $email =$_POST["email"];
        $cep =$_POST["cep"];
        $rua =$_POST["rua"];
        $numerocasa =$_POST["numerocasa"];
        $bairro =$_POST["bairro"];
        $cidade =$_POST["cidade"];
        $UF =$_POST["UF"];
        $celular =$_POST["celular"];

    include ("config.php");
    $mysql = new banco();
    $mysql->conecta();

    $sql = "INSERT INTO paciente( nome, cpf, datadenasc, email, cep, rua, numero, bairro, cidade, UF, telefone)
    VALUES ( '$nome', '$cpf' , '$datadenasc' , '$email' , '$cep' , '$rua' , '$numerocasa','$bairro' , '$cidade' ,'$UF',  
    '$celular')";



$res = @mysqli_query($mysql->con, $sql) or die ("erro ao inserir");

header('location:cadastro.html');

?>

</body>
</HTML>