<?php
require_once 'classes/usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Distribuidora Portuguesa</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>   
<body>
        <nav class="navbar navbar-expand-lg navbar-light margin"> <!-- Puxa do css o codigo de parametros-->
           <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="IMAGENS/logo.jpg" width="200" height="200"> <!-- (logo do site) -  Puxa a img da pasta e "width" determina a largura                                                                       "height" determina a altura-->
            </a>
            </div>
        </nav>    
<div id="corpo-form">
    <h1>ENTRAR</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="EMAIL">
        <input type="password" name="senha" placeholder="SENHA">
        <input  type="submit" value="ACESSAR">
        <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
        </form>
</div>
<?php
if(isset($_POST['email']))
{

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verificar se esta preenchido
    if(!empty($email) && !empty($senha))
    {
        $u->conectar("simulaVoto", "localhost", "root", "");
        if($u->msgErro == "") //se esta tudo ok
        {
            if($u->logar($email,$senha))
            {
                header("location: AreaPrivada.php");
            } 
            else
            {
               echo "Email e/ou senha estão incorretos!";
            }
        }
        else
        {
           echo "Error: ".$u->msgErro;
        }
    }else
    {
       echo "Preencha todos os campos!";
    }      


    }

?>
    
</body>



</html>
