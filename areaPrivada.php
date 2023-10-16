<?php
  include_once("classes/usuarios.php");
  include_once("conexao.php");
  
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }
?>

<HTML>
<HEAD>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Distribuidora Portuguesa</title>
    <link rel="stylesheet" href="css/estilo.css">
</HEAD>
<BODY>



<nav class="navbar navbar-expand-lg navbar-light margin "> <!-- Puxa do css o codigo de parametros-->
        <div class="logo">
            <a class="navbar-brand">
                <img src="IMAGENS/logo.jpg" width="200" height="200"> <!-- (logo do site) -  Puxa a img da pasta e "width" determina a largura
                                                                                       "height" determina a altura-->
        </div> 
            </a>
            
           
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <H3><a class="nav-link" href="sair.php">Sair</a></H3> <!-- <li> lista os itens-->
                    </li>
                </ul>
            
        </nav>    
        

		
        
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $(".wish-icon i").click(function(){
          $(this).toggleClass("fa-heart fa-heart-o");
        });
      });
      
      var stars = document.querySelectorAll('.star-icon');
                  
      document.addEventListener('click', function(e){
        var classStar = e.target.classList;
        if(!classStar.contains('ativo')){
          stars.forEach(function(star){
            star.classList.remove('ativo');
          });
          classStar.add('ativo');
          console.log(e.target.getAttribute('data-avaliacao'));
        }
      });
    </script>

</head>

    
  


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFF112; width: 100vw;">
  <div class="dropdown">
    <button class="btn btn-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #FFF112; border: none; color:black">
      <span class="navbar-toggler-icon"></span>
      CATEGORIAS
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">PISOS E REVESTIMENTOS</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAMENTAS</a>
      <hr>
      <a class="dropdown-item" href="#">ELÉTRICA</a>
      <hr>
      <a class="dropdown-item" href="#">ASSETAMENTO E REJUNTAMENTO</a>
      <hr>
      <a class="dropdown-item" href="#">BANHEIRO</a>
      <hr>
      <a class="dropdown-item" href="#">COZINHA E LAVANDERIA</a>
      <hr>
      <a class="dropdown-item" href="#">FERRAGENS</a>
      <hr>
      <a class="dropdown-item" href="#">HIDRÁULICA</a>
      <hr>
      <a class="dropdown-item" href="#">ILUMINAÇÃO</a>
      <hr>
      <a class="dropdown-item" href="#">PINTURA</a>
      <hr>
      <a class="dropdown-item" href="#">PORTAS E JANELAS</a>
    </div>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">PISOS E REVESTIMENTOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FERRAMENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ELÉTRICA</a>
      </li>
    </ul>

    <div class="logo1">
            <a class="navbar-brand" href="perfil.php">
                <img src="IMAGENS/perfil.png" width="50" height="50"> <!-- (logo do site) -  Puxa a img da pasta e "width" determina a largura                                                                       "height" determina a altura-->
            </a>


    
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-40" src="img/caroucel/dp_resized.png" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/caroucel/convert_resized.webp" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-40" src="img/caroucel/materiais-de-construcao-em-curitiba8_resized.jpg" alt="Terceiro Slide">
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

<h3>Promoções</h3>

<div style="display: flex;">

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>

  <div class="card">
    <span class="wish-icon" style="color: red;"><i class="fa fa-heart-o"></i></span>
      <img class="imagem" src=".../100px180/" alt="Imagem do card">
      <div class="descricao">
        <label class="card_text">Nome do Produto</label>

          <ul class="avaliacao">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
          </ul>
          <div class="valores">
            <label class="v_antigo"><s>R$ 399,90</s></label>
            <label class="v_novo">R$ 299,90</label>
            <label class="parcelas">10x de R$ 29,99</label>
          </div>
      </div>
  </div>



  </div>


    
</body>
</html>
        <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>


</HTML>