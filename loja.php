<?php session_start();/*
$sql = "SELECT * FROM usuarios WHERE email = $email";
if($email = 'adm@gmail.com'){
  header("Location: lojaadm.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loja2.css">
</head>
<body>

 

<style>



  








.card {
  border: none;

    }
  
  .filters {
    padding-top: 20px;
  border-right: 1px solid #ddd;
  background-color: #ddd;
  padding-left: 50px;
  float: left;
  height: 500px;

  }



#link{
  text-decoration: none;
  color: inherit;
}
  .produto{
    max-width: auto;
    text-align: center;
    margin: 50px 80px;
    padding-bottom: 10px;
  }

  .produto:hover{
        transform: scale(1.1);
    transition: 0.4s ease-in-out;
    border-radius: 20px;
    box-shadow: 0 20px 20px rgb(176, 176, 176);
      }

  .imgproduct{
    width: 210px;
    height: 240px;
  }

  
  .preco{
    color: red;
    font-size: 30px;
  }

  .botao{
font-size: 20px;
color: black;
border: solid 1px red;
border-radius: 10px;
padding: 4px 30px 4px 30px;




  }

  .botao:hover{
font-size: 20px;
color: white;
text-decoration: none;
background-color: red;


  }


  body{
    background-color: #fff;
  }

</style>


<div class="header">

<!--MUDAR IMAGEM DA LOGO, MUDAR A COR DO TEXTO DO MENU, MUDAR O NOME DO SITE E FAZER JAVASCRIPT-->





<div class="row">
<div class="col-2"></div>

    <div class="col-3">
   
      <a href="index.php"> <img  class="logo img-fluid"src="imagens/logo.png" alt=""> </a> 
      
    </div>

    <div class="col-3"> 
      
    </div>
  




<div class="col">
<div class="row">
<a href="login_route.php"><img class="p1" src="imagens/user.png" alt=""></a>
<a href="carrinho.php"><img class="p2" src="imagens/carrinho.png" alt=""></a>
</div>
<div class="pesquisar">
    <form class=" form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn  btn-outline-danger border-0 my-2 my-sm-0" type="submit"> <img class="lupa" src="imagens/pesquisar.png" alt=""></button>
    </form>
  </div>
  



  </div>
</div>
</div>



<div class="menu">
<div class="container">
<ul class="nav nav-pills nav-fill">
<li class="nav-item">
<a class="nav-link active-bg-d" id="link" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" id="link" href="loja.php">Loja</a>
</li>
<li class="nav-item">
<a class="nav-link" id="link" href="performance.php">Alta Performance</a>
</li>




</ul>
</div>
</div>







<div class="card">
<div class="row">
<div class="col-2 filters">
<h3>Filtros</h3>
<h4>Categorias</h4>
<ul>
<li><input type="checkbox" id="category1"> <label for="category1">Categoria 1</label></li>
<li><input type="checkbox" id="category1"> <label for="category1">Categoria 1</label></li>
<li><input type="checkbox" id="category2"> <label for="category2">Categoria 2</label></li>
<!-- Adicione mais categorias conforme necessário -->
</ul>
</div>






<div class="col-10">
<div class="row">



<?php 
    include("php/configgg.php");
    




$sql = "SELECT * FROM produto";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()){

    echo "<div class='produto'>";
    echo "<img class='imgproduct' src='" . $row['imagem'] . "'alt='Imagem do Produto'>";
    echo "<h2>" . $row["nome"] . "</h2>";
    echo "<div class='preco'> <b>R$ " . $row["preco"] . " </b></div>";
    echo "<a class='botao' href='compra.php?id=" .$row["idproduto"] . "'>Comprar </a>";

    echo '</div>';
}
} else {
    echo " Nenhum produto disponivel.";
}

$conn->close();

    ?>



</div>

</div>





































<!--rodapé-->
<Div class="rodape">
        <div class="row">
<div class="col-2"></div>
<div class="col-2 v">Informações</div>
<div class="col-1"></div>
<div class="col-2 v">Atendimento</div>
<div class="col-1"></div>
<div class="col-2 v"> <a id="link" href="termos.html"> Termos </a> </div>
<div class="col-2"></div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col-2 b"> <a id="link" href="termos.html"> Quem somos   </a> </div>
    <div class="col-1"></div>
    <div class="col-2 b">SAC: 40028922</div>
    <div class="col-1"></div>
    <div class="col-2 b"> <a id="link" href="termos.html"> Politica de privacidade </a> </div>
    <div class="col-2"></div>
</div>

    <div class="row">
        <div class="col-2"></div>
        <div class="col-2 b"> <a id="link" href="termos.html">  Perguntas frequentes </a> </div>
        <div class="col-1"></div>
        <div class="col-2 b">Email</div>
        <div class="col-1"></div>
        <div class="col-2 b"> <a id="link" href="termos.html">  Termos e condições </a> </div>
        <div class="col-2"></div>
    
        </div>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-1"></div>
            <div class="col-2"></div>
            <div class="col-1"></div>
            <div class="col-2 b"> <a id="link" href="termos.html">  Politica de frete  </a> </div>
            <div class="col-2"></div>
            </div>
                
       <hr class="solid">

                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-2 v">Social</div>
                    <div class="col-1"></div>
                    <div class="col-2 v">Formas de pagamento</div>
                    <div class="col-1"></div>
                    <div class="col-2"></div>
                    <div class="col-2"></div>
                   
                    
                <div class="col-2"></div>
                <div class="col-2.e"><img class="v" src="imagens/facebook.png" alt=""><img class="v" src="imagens/instagram (1).png" alt=""><img class="v" src="imagens/pinterest.png" alt=""><img class="v" src="imagens/twitter.png" alt=""></div>
                <div class="col-2"></div>
                <div class="col-2.e justify-content-center"><img class="v" src="imagens/visa.png" alt=""><img class="v" src="imagens/mastercard.png" alt=""><img class="v" src="imagens/paypal.png" alt=""><img class="v" src="imagens/pix.png" alt=""></div>
            </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
  crossorigin="anonymous"></script>





</body>
</html>