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
    <title>Area Privada</title>
    <link rel="stylesheet" href="css/estilo.css">
</HEAD>
<BODY>



<nav class="navbar navbar-expand-lg navbar-light margin "> <!-- Puxa do css o codigo de parametros-->
            <a class="navbar-brand" href="index.php">
                <img src="IMAGENS/pngwing.com.png" width="200" height="100"> <!-- (logo do site) -  Puxa a img da pasta e "width" determina a largura
                                                                                        "height" determina a altura-->
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <H3><a class="nav-link" href="sair.php">Sair</a></H3> <!-- <li> lista os itens-->
                    </li>
                </ul>
            </div>
        </nav>    
<h1>Area Privada</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}
		?>


</HTML>