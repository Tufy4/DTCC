
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carrinho.css">

    <style>
  #link{
    text-decoration: none;
      color: inherit;
  }
.box{
    border:solid 2px;
    width: 100%;
}
.col.compra{
    text-align: center;
}

#bntbuy{
     padding:10px 20px;
     border: 2px solid red;
     background-color:white;
     border-radius:20px;
     color: red;
     font-weight: 700;
     font-size: 20px;
}

#btnbuy:hover{
     margin: 20px ;
     padding:10px 20px;
     border-radius:20px;
     background-color:red;
     color: white;
     font-weight: 700;
     font-size: 20px;
    }

    #remove{
        text-decoration:none;
    }
#table{
    font-weight: 1000;
     font-size: 30px;
     text-align:center;
     padding:50px 0px 15px;
}
.col{
    padding:20px 0px;
    font-weight: 700;
     font-size: 20px;
     text-align:center;
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


    <?php
    session_start();


    if (empty($_SESSION['cart'])) {
        echo "<p>O carrinho está vazio.</p>";
    } else {
        echo "<div class='container'>";
        echo "<div class='row row justify-content-md-center'>";
        echo "<div id='table' class='col'>Nome</div>";
        echo "<div id='table' class='col'>Quantidade</div>";
        echo "<div id='table' class='col'>Total</div>";
        echo "<div id='table' class='col'>Apagar</div>";
echo "</div>";
echo "</div>";

        foreach ($_SESSION['cart'] as $key => $item) {
            echo "<div class='container'><div class='box'>";
            echo "<div class='row row justify-content-md-center'>";
            echo "<div id='nome' class='col'>" . $item['nome'] . "</div>";
            echo "<div id='qtd' class='col'>" . $item['quantidade'] . "</div>";
            echo "<div id='total' class='col'>R$" . ($item['preco'] * $item['quantidade']) . "</div>";
            echo "<div id='remove' class='col'><a href='remover.php?id=" . $key . "'>Remover</a></div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }


    }
    ?>
    <br><br><br><br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col compra">
    <p><a id="bntbuy" href="loja.php">Continuar comprando</a></p>
    </div>
    <div class="col compra">
    <p><a id="bntbuy" href="finalizar_compra.php">Finalizar Compra</a></p>
    </div>
    
</div>
</div>
<br><br>


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
            <h6>_________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________</h6>    
       

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
