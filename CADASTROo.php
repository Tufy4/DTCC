<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Produtos</title>
  <link rel="stylesheet" href="css/cadprodutos.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <style>
    #link {
      text-decoration: none;
      color: inherit;
    }
    .label{
      font-weight: 700;
     font-size: 30px;
}
p{
  font-weight: 700;
  font-size: 17px;
}
.add{
  padding: 10px;
  border-radius: 15px;
  border: solid 2px red;
}
#btn{
  padding:10px;
  margin-bottom: 20px;
  font-weight: 700;
  font-size: 30px;
}

  </style>
</head>

<body>

  <div class="header">

    <!--MUDAR IMAGEM DA LOGO, MUDAR A COR DO TEXTO DO MENU, MUDAR O NOME DO SITE E FAZER JAVASCRIPT-->





    <div class="row">
      <div class="col-2"></div>

      <div class="col-3">

        <a href="index.php"> <img class="logo img-fluid" src="imagens/logo.png" alt=""> </a>

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
            <button class="btn  btn-outline-danger border-0 my-2 my-sm-0" type="submit"> <img class="lupa"
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
          <a class="nav-link " id="link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="loja.html">Loja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="performance.html">Alta Performance</a>
        </li>
    




      </ul>
    </div>
  </div>

  <div class="row justify-content-center">

    <div class="col-6 border border-danger">
      <h1>Adicionar Produtos</h1><br><br>

      <form action="addprodutos.php" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col">
            <b>
              <p class="label">Nome:</p>
            </b>
            <input type="text" id="nome" name="nome" class="form-control"
              placeholder="Ex: Whey Protein Isolado 2kg"><br><br><br><br>
          </div>
          <div class="col">
            <b>
              <p class="label">Preço:</p>
            </b>
            <input type="text" id="preco" name="preco" class="form-control" placeholder="R$ 99,99" onkeyup="formatarMoeda()">

            <br><br><br><br>
          </div>
          <div class="col">
            <b>
              <p class="label">Quantidade:</p>
            </b>
            <input type="number" id="quantidade" name="quantidade" min="1" max="100" class="form-control">
            <br><br><br><br>
          </div>
        </div>


        <div class="row">
          <div class="col">
            <b>
              <p class="label">Especificação:</p>
            </b>

              <p><input type="radio" id="suplementos" name="especificacao" value="suplementos">
                <label>Suplemento</label><br></p>
              <p><input type="radio" id="equipamento" name="especificacao" value="equipamento">
                <label>Equipamento</label><br></p>
              <p><input type="radio" id="maquina" name="especificacao" value="maquina">
                <label>Máquina</label><br></p><br>
            <p><input type="radio" id="roupa" name="especificacao" value="roupa">
                <label>Roupa</label></p>
            <br><br><br><br>
          </div>

          <div class="col">
            <b>
            <p class="label">Marca:</p>
            </b>
              <p><input type="radio" id="growth" name="marca" value="growth">
                <label>Growth</label><br></p>
              <p><input type="radio" id="max" name="marca" value="max">
                <label>Max Titanium</label><br></p>
              <p><input type="radio" id="integral" name="marca" value="integral">
                <label>Integralmédica</label><br><br><br><br></p><b>

          </div>
          <div class="col">
            <p class="label">Sabor:</p>
            </b> <br>
            <p><input type="radio" id="morango" name="sabor" value="morango">
                <label>Morango</label><br></p>
              <p><input type="radio" id="chocolate" name="sabor" value="chocolate">
                <label>Chocolate</label><br></p>
              <p><input type="radio" id="baunilha" name="sabor" value="baunilha">
                <label>Baunilha</label><br></p><br>
            <p><input type="radio" id="cookies" name="sabor" value="cookies">
                <label>Cookies</label><br>
               
            <p><input type="radio" id="brigadeiro" name="sabor" value="brigadeiro">
                <label>Brigadeiro</label><br></p>
              <p><input type="radio" id="sorvete" name="sabor" value="sorvete">
                <label>Sorvete de Frutas</label><br><br><br><br></p>
          </div>
        </div>


        <div class="row">
          <div class="col">
            <b>
              <p class="label">Ingredientes:</p>
            </b>
            <input type="text" id="ingredientes" name="ingredientes" class="form-control"
              placeholder="Ex:  proteína concentrada de soro do leite, pedaços de amendoim torrado">
             <br><br><br><br>
          </div>



          <div class="col">
            <b>
              <p class="label">Data de validade:</p>
            </b>
            <input type="date" id="validade" name="validade" class="form-control"><br><br><br><br>
          </div>

          <div class="col"><b>
            <label class="label" for="imagem">Imagem do produto:</label></b>
            <input class="add" type="file" name="imagem" accept="image/*"><br><br>
          </div>
        </div>


        <input id="btn" class="btn btn-danger btn-block" type="submit" value="Adicionar Produto">
    </div>
  </div>
  </div>




  <script>
    function formatarMoeda() {
      var elemento = document.getElementById('preco');
      var valor = elemento.value;

      valor = valor + '';
      valor = parseInt(valor.replace(/[\D]+/g, ''));
      valor = valor + '';
      valor = valor.replace(/([0-9]{2})$/g, ",$1");
      valor = valor.replace(",", ".");

      if (valor.length > 6) {
        valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
      }

      elemento.value = valor;
      if (valor == 'NaN') elemento.value = '';
    }
  </script>



  </form>
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
      <div class="col-2 b"> <a id="link" href="termos.html"> Quem somos </a> </div>
      <div class="col-1"></div>
      <div class="col-2 b">SAC: 40028922</div>
      <div class="col-1"></div>
      <div class="col-2 b"> <a id="link" href="termos.html"> Politica de privacidade </a> </div>
      <div class="col-2"></div>
    </div>

    <div class="row">
      <div class="col-2"></div>
      <div class="col-2 b"> <a id="link" href="termos.html"> Perguntas frequentes </a> </div>
      <div class="col-1"></div>
      <div class="col-2 b">Email</div>
      <div class="col-1"></div>
      <div class="col-2 b"> <a id="link" href="termos.html"> Termos e condições </a> </div>
      <div class="col-2"></div>

    </div>

    <div class="row">
      <div class="col-2"></div>
      <div class="col-2"></div>
      <div class="col-1"></div>
      <div class="col-2"></div>
      <div class="col-1"></div>
      <div class="col-2 b"> <a id="link" href="termos.html"> Politica de frete </a> </div>
      <div class="col-2"></div>
    </div>
    <h6>
      _________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________________
    </h6>


    <div class="row">
      <div class="col-2"></div>
      <div class="col-2 v">Social</div>
      <div class="col-1"></div>
      <div class="col-2 v">Formas de pagamento</div>
      <div class="col-1"></div>
      <div class="col-2"></div>
      <div class="col-2"></div>


      <div class="col-2"></div>
      <div class="col-2.e"><img class="v" src="imagens/facebook.png" alt=""><img class="v"
          src="imagens/instagram (1).png" alt=""><img class="v" src="imagens/pinterest.png" alt=""><img class="v"
          src="imagens/twitter.png" alt=""></div>
      <div class="col-2"></div>
      <div class="col-2.e justify-content-center"><img class="v" src="imagens/visa.png" alt=""><img class="v"
          src="imagens/mastercard.png" alt=""><img class="v" src="imagens/paypal.png" alt=""><img class="v"
          src="imagens/pix.png" alt=""></div>
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