<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/lojainicial.css" media="screen">
</head>

<body>
  <div class="header">

    <!--MUDAR IMAGEM DA LOGO, MUDAR A COR DO TEXTO DO MENU, MUDAR O NOME DO SITE E FAZER JAVASCRIPT-->





    <div class="row header justify-content-center">
<div class="col-2"></div>
      <div class="col-3 ">
        <a href="index.php"><img class="logo" src="imagens/logo.png" alt=""> </a>
      </div>

      <div class="col-3">

      </div>


      <div class="col">
        <img class="p" src="imagens/user.png" alt="">
        <img class="p" src="imagens/carrinho.png" alt="">
        <div class="pesquisar">
          <form class=" form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn  btn-outline-danger border-0 my-2 my-sm-0" type="submit"> <img
                src="imagens/pesquisar.png" alt=""></button>
          </form>
        </div>


      </div>
    </div>
  </div>





  <div class="menu">
    <div class="container">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link active-bg-d " href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false">Loja</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="loja.php">produtos</a>            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="performance.html">Alta Performance</a>
        </li>





      </ul>
    </div>
  </div>



 
 







      


<div class="container justify-content-center">
        <div class="shope">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="imagens/kkkk.png  " alt="Primeiro Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="imagens/kkkk.png" alt="Segundo Slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="imagens/kkkk.png " alt="Terceiro Slide">
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





  <div class="comentario"><b>Produtos em promoção</b></div>



  <div class="container gallery">
    <button class="arrow-left control" aria-label="Previous image">◀</button>
    <button class="arrow-right control" aria-label="Next Image">▶</button>
    <div class="gallery-wrapper">
      <div class="gallery">
 

        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item current-item">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>

        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item ">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>

        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item ">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>

        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item ">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>


        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item ">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>


        <div class="galerria">
          <img src="imagens/wheygold.png"  class="item ">
          <div class="descricao">
        <h5>whey gold 1kg</h5>
          </div>
          <div class="preco">
          <strong> 89,99$ </strong>
          </div>
        </div>





      
       
      
      </div>
    </div>
  </div>







<br><br><br><br><br>

<div class="container">
<div class="objetivos">
 <b>Qual é a sua meta?</b>
 </div>

<div class="row fe justify-content-center"> 
  
  
  <div class="card objetivo" style="width: 16rem;">
    <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h3 class="card-title">Massa muscular</h3>
    </div>
  </div>

  <div class="card objetivo" style="width: 16rem;">
    <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h3 class="card-title">Emagrecimento</h3>
    </div>
  </div>


  <div class="card objetivo" style="width: 16rem;">
    <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h3 class="card-title">Energia</h3>
    </div>
  </div>
  </div>
 


 


  
  






      </div>
    </div>
  </div>




  <img class="anuncio"    src="imagens/kkkk.png" alt="">








  <div class="suplemento">
    <b>Suplementos</b>
   </div>


   <div class="container grid">

<div class="row cord">



  <div class="col-4 cord">
    <img class="meta " src="imagens/kkkk.png" alt="">
  </div>




  <div class="col-1 c">
    <div class="cardd text-center" style="width: 14rem;">
    <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title texto ">Título do card</h5>
      <p class="card-text preco">30,00$</p>
      <a href="#" class="btn compra btn-primary">Visitar</a>
    </div>
  </div>
</div>


  
<div class="col-1 c">
  <div class="cardd text-center" style="width: 14rem;">
  <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title texto ">Título do card</h5>
    <p class="card-text preco">30,00$</p>
    <a href="#" class="btn compra btn-primary">Visitar</a>
  </div>
</div>
</div>



<div class="col-1 c">
  <div class="cardd text-center" style="width: 14rem;">
  <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title texto ">Título do card</h5>
    <p class="card-text preco">30,00$</p>
    <a href="#" class="btn compra btn-primary">Visitar</a>
  </div>
</div>
</div>





<div class="col-1"></div>
 


</div>
</div>







































<div class="equipamentos">
  <b>Equipamentos</b>
 </div>



<div class="container gridd">
<div class="row cordd justify-content-center">





<div class="col-1 c">
  <div class="cardd text-center" style="width: 14rem;">
  <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title texto ">Título do card</h5>
    <p class="card-text preco">30,00$</p>
    <a href="#" class="btn compra btn-primary">Visitar</a>
  </div>
</div>
</div>



<div class="col-1 c">
<div class="cardd text-center" style="width: 14rem;">
<img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
<div class="card-body">
  <h5 class="card-title texto ">Título do card</h5>
  <p class="card-text preco">30,00$</p>
  <a href="#" class="btn compra btn-primary">Visitar</a>
</div>
</div>
</div>


<div class="col-1 c">
<div class="cardd text-center" style="width: 14rem;">
<img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
<div class="card-body">
  <h5 class="card-title texto ">Título do card</h5>
  <p class="card-text preco">30,00$</p>
  <a href="#" class="btn compra btn-primary">Visitar</a>
</div>
</div>
</div>




<div class="col-4 cordd">
  <img class="metaa" src="imagens/kkkk.png" alt="">
</div>

</div>
</div>







<div class="suplemento">
  <b>Vestuário</b>
 </div>



 <div class="container grid">

<div class="row cord">



  <div class="col-4 cord">
    <img class="meta " src="imagens/kkkk.png" alt="">
  </div>




  <div class="col-1 c">
    <div class="cardd text-center" style="width: 14rem;">
    <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title texto ">Título do card</h5>
      <p class="card-text preco">30,00$</p>
      <a href="#" class="btn compra btn-primary">Visitar</a>
    </div>
  </div>
</div>


  
<div class="col-1 c">
  <div class="cardd text-center" style="width: 14rem;">
  <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title texto ">Título do card</h5>
    <p class="card-text preco">30,00$</p>
    <a href="#" class="btn compra btn-primary">Visitar</a>
  </div>
</div>
</div>



<div class="col-1 c">
  <div class="cardd text-center" style="width: 14rem;">
  <img class="card-img-top" src="imagens/kkkk.png" alt="Imagem de capa do card">
  <div class="card-body">
    <h5 class="card-title texto ">Título do card</h5>
    <p class="card-text preco">30,00$</p>
    <a href="#" class="btn compra btn-primary">Visitar</a>
  </div>
</div>
</div>






 


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

<script src="loja.js"></script>

</html>