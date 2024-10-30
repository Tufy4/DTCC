<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/compra.css" media="screen">


    <title>Compra</title>

<style>

  #link{
    text-decoration: none;
      color: inherit;
  }

  .imgcompra{
    float:left;
      }

      .nomecompra{
        font-weight: 700;
     font-size: 50px;
  text-align:center;
        border-bottom: solid 1px red;
}
        
      

.col-6{
  border:solid 2px black
}



.preco{
  font-weight: 700;
     font-size: 50px;
  text-align:center;
  color:red;
}

.qtdcompra{
margin: 10px;
font-weight: 700;
     font-size: 20px;
}



      .rodape{
        background-color: black;
      width: 101%;
        position: bottom;
        height: 300px;
    }
    .btncompra{
     margin: 20px ;
     padding:10px 20px;
     border: 2px solid red;
     background-color:white;
     border-radius:20px;
     color: red;
     font-weight: 700;
     font-size: 20px;
    }
    .btncompra:hover{
     margin: 20px ;
     padding:10px 20px;
     border-radius:20px;
     background-color:red;
     color: white;
     font-weight: 700;
     font-size: 20px;
    }

    .qtd{
      padding:10px 0px;
      border-radius:20px;
      text-align:center;
      font-weight: 700;
     font-size: 20px;
     width:40%;
    }
    
</style>

</head>
<body>
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
<a class="nav-link" href="loja.html">Loja</a>
</li>
<li class="nav-item">
<a class="nav-link" href="performance.html">Alta Performance</a>
</li>
<li class="nav-item">
<a class="nav-link" href="CADASTROo.html">adicionar produtos</a>
</li>




</ul>
</div>
</div>

<br><br><br>



    <?php

    include("php/configgg.php");

   
    $product_id = $_GET['id'];

 
    $sql = "SELECT * FROM produto WHERE idproduto = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-5'>";
        echo "<img class='imgcompra img-fluid' src='" . $row["imagem"] . "' alt='Imagem do Produto'>";
        echo "</div>";
       

        echo "<div class='col-6'>";

        echo "<h2 class='nomecompra'>" . $row["nome"] . "</h2><br>";
    

        echo "<p class='preco'>Preço: R$ " . $row["preco"] . "</p><br><br>";
       


        echo "<form action='finalizar_compra.php' method='post'>";


        echo "<input type='hidden' name='product_id' value='" . $row["idproduto"] . "'>";
        echo "<div class='row justify-content-md-center'>";
        echo "<b><label class='qtdcompra' for='quantidade'>Quantidade:</label></b>";
        echo "<input class='qtd' type='number' name='quantidade' id='quantidade' placeholder='disponivel (". $row["quantidade"] . ")'><br>";
        echo "</div><br>";
        echo "<div class='row justify-content-md-center'>";
        echo "<input class='btncompra' type='submit' value='Adicionar ao Carrinho'>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "Produto não encontrado.";
    }

    $conn->close();
    ?>
<br><br><br>

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
            <h6>___________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</h6>    
       

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




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
