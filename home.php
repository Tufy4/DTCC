<?php session_start();

if ((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['senha']) == true ))

{ 
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
}


?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css" media="screen">
    


    <style>
  #link{
    text-decoration: none;
      color: inherit;
  }
</style>




</head>
<body>
 
  <div class="header">

    <!--MUDAR IMAGEM DA LOGO, MUDAR A COR DO TEXTO DO MENU, MUDAR O NOME DO SITE E FAZER JAVASCRIPT-->





    <div class="row">
<div class="col-1"></div>

        <div class="col-3">
       
          <a href="home.php"> <img  class="logo img-fluid"src="imagens/logo.png" alt=""> </a> 
          
        </div>

        <div class="col-3 align-self-center"> 
          
        </div>
      


    

<div class="col-5">
  <div class="row">
  <a href="login_route.php" data-toggle="modal" data-target="#myModal"><img class="p1" src="imagens/user.png" alt="">
  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>


  <div id="myModal" class="modal fade" tabindex="-1" role="dialog"><!-- Início do código da janela modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><!-- Header do modal -->
                        <h4 class="modal-title">Login</h4><!-- Título -->
                    </div>
                    <div class="modal-body"><!-- Corpo do modal -->
                    Welcome <?php echo $_POST['nome']; ?><br>
Your email address is: <?php echo $_POST['email']; ?>
                   

<!-- colocar -->

                    </div>
                    <div class="modal-footer"><!-- Footer do Modal -->
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Fechar <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>                
                    </div>
                </div>
            </div>
        </div><!-- ##Fim do Modal -->
        





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
<a class="nav-link active" id="linkk" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" id="linkk" href="lojainicial.php">Loja</a>
</li>
<li class="nav-item">
<a class="nav-link" id="linkk" href="performance.php">Alta Performance</a>
</li>





</ul>
</div>
</div>

















<div class="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class=" ui" src="imagens/slide1.png" alt="Primeiro Slide" id="slides">
    </div>
    <div class="carousel-item">
      <img class=" ui" src="imagens/iron.png" alt="Segundo Slide" id="slides">
    </div>
    <div class="carousel-item">
      <img class="ui" src="imagens/iron2.png" alt="Terceiro Slide" id="slides">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

</div>




<div class="beneficios"> 
    <div class="espaço"> </div>
    <img class="img-fluid"src="imagens/propaganda.png" alt="">
</div><div class="espaço"> </div>



<img class="img-fluid" src="imagens/anuncio.png" alt="">





</div><div class="espaço"> </div><div class="espaço"> </div>  <div class="espaço"></div>


<div class="container card">
  <div class="row">

     
    <div class="col-5">
  <img class="imcard img-fluid" src="imagens/1.png" alt="">
</div>
<div class="col-7">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <b><h1 class="display-4">Loja</h1></b>
      <p class="lead">Aqui você encontrará os melhores produtos do mercado. Com alta qualidade e ótimo custo benefício, na Ironbody você sempre achará tudo o que precisa. </p>
    </div>
  </div>
</div>


  </div>
</div>
 



<div class="espaço"> </div> <div class="espaço"> </div> <div class="espaço"></div>

<div class="container card">
  <div class="row">


  <div class="col-7">
  <div class="jumbotronn jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Alta Performance</h1>
      <p class="lead">Você poderá controlar melhor sua rotina, melhorar seus resultados e seus ganhos com a gente!</p>
    </div>
  </div>
</div>
<div class="col-5">
  <img class="cardim img-fluid" src="imagens/2.png" alt="">
</div> 

  </div>
</div>



<div class="espaço"> </div> <div class="espaço"> </div> <div class="espaço"></div>



<div class="container card">
  <div class="row">


<div class="col-5">
<img class="imcard img-fluid" src="imagens/IRON_BODY.png" alt="">
</div>
<div class="col-7">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Quem somos</h1>
      <p class="lead">Saiba mais sobre nós e sobre nosso site através dessa página!</p>
    </div>
  </div>
</div>


  </div>
</div>

<div class="espaço"> </div> <div class="espaço"> </div> <div class="espaço"></div> <div class="espaço"> </div> <div class="espaço"></div>








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