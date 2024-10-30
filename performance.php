<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/performance.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/calendario.css" media="screen">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <script src="performance.js" defer></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Alta Performance</title>
</head>
<style>
  #link{
    text-decoration: none;
      color: inherit;
  }
</style>


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
   <a href="login.html"><img class="p1" src="imagens/user.png" alt=""></a>
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
          <img class="d-block w-100" src="imagens/slide1.png" alt="Primeiro Slide" id="slides">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/iron.png" alt="Segundo Slide" id="slides">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/iron2.png" alt="Terceiro Slide" id="slides">
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



  <br><br>

  <div class="row justify-content-center">
    <div class="container">
      <div class="atividade"></div>
      <h1> Benefícios da atividade física</h1>
    </div>
  </div>

  <br><br>










  <div class="row">


    <div class="col-2"></div>
    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
        </div>
      </div>
    </div>




    <div class="col-1"></div>


    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
        </div>
      </div>
    </div>


    <div class="col-1"></div>

    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
        <div class="card-body">
          <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
            do card.</p>
        </div>
      </div>

    </div>




    <div class="espaço"></div>

    <div class="container card">
      <div class="row">
        <div class="col-4">
          <div class="wrapper">
            <header>
              <p class="current-date"></p>
              <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
              </div>
            </header>
            <div class="calendar">
              <ul class="weeks">
                <li>Dom</li>
                <li>Seg</li>
                <li>Ter</li>
                <li>Qua</li>
                <li>Qui</li>
                <li>Sex</li>
                <li>Sab</li>
              </ul>
              <ul class="days"></ul>
            </div>
          </div>
        </div>


        <div class="col-4">
          <div class="txt-card"> Não se pressione, <br> não desista. <br> Você consegue</div>
        </div>
        <div class="col-4">
          <form id="fruits">
            <div class="check">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="chk1">
                <label class="form-check-label" for="defaultCheck1">
                  Beber 2L de água
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" id="chk2">
                <label class="form-check-label" for="defaultCheck1">
                  Ler 5 páginas de um livro
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" id="chk3">
                <label class="form-check-label" for="defaultCheck1">
                  Se exercitar por no mínimo 30 minutos
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" id="chk4">
                <label class="form-check-label" for="defaultCheck1">
                  Se alimentar de forma saúdavel, no mínimo 5 vezes ao dia
                </label>
              </div>
          </form>
          <link rel="stylesheet" href="style/pogbar.css">
          <script src="java/progress.js"></script>
          </head>

          <body>


            <div id="myProgress">
              <div id="myBar"></div>
            </div>
            <br>






        </div>
      </div>
    </div>
  </div>




  <div class="container gallery">
    <button class="arrow-left control" aria-label="Previous image">◀</button>
    <button class="arrow-right control" aria-label="Next Image">▶</button>
    <div class="gallery-wrapper">
      <div class="gallery">


        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>

        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>

        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>

        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>


        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>


        <div class="item" style="width: 18rem;">
          <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
          <div class="card-body">
            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo
              do card.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>





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
        <h6>_____________________________________________________________________________________________________________________________________________________</h6>    
   

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









</body>

</html>