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
</body>
<nav class="navbar navbar-expand-lg navbar-light margin "> <!-- Puxa do css o codigo de parametros-->
          <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="IMAGENS/logo.jpg" width="200" height="200"> <!-- (logo do site) -  Puxa a img da pasta e "width" determina a largura                                                                            "height" determina a altura-->
            </a>
          </div>
            </nav>   

<div id="corpo-form-Cad">
    <h1>CRIAR CONTA</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome" minlength="2" required>
        <input type="text" name="telefone" placeholder="Telefone" minlength="11" maxlength="11" required>
        <input type="email" name="email" placeholder="Email" maxlength="40" required>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" required>
        <input type="password" name="senha" placeholder="Senha" minlength="6" maxlength="15" required>
        <input type="password" name="confSenha" placeholder="Confirmar Senha" minlength="6" maxlength="15" required>
        <input  type="submit" value="CONFIRMAR">
        <a href="index.php"><strong>VOLTAR</strong></a>
        </form>
       
        
       <script> //script para formatar o cpf e limitar em 11 digitos
        document.addEventListener("DOMContentLoaded", function () {
            const cpfInput = document.getElementById("cpf");

            cpfInput.addEventListener("input", function () {
                let value = cpfInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                if (value.length > 11) {
                    value = value.slice(0, 11); // Limita o CPF a 11 dígitos
                }

                // Formata o CPF com pontos e hífen
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');

                cpfInput.value = value;
            });
        });
    </script>

</div>
<?php
//verificar se clicou no botao cadastrar
if(isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $cpf = addslashes($_POST['cpf']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //verificar se esta preenchido
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($cpf) && !empty($senha)  && !empty($confirmarSenha))
    {
        $u->conectar("simulavoto", "localhost", "root", "");
        if($u->msgErro =="")//se esta tudo ok
        {
            if($senha == $confirmarSenha) //confirmaçao de senha igual
            { 
                if($u->cadastrar($nome,$telefone,$email,$cpf,$senha))
                { 
                    ?>
                        <div id="msg-sucesso">
                        Cadastrado com sucesso! Acesse para entrar 
                        </div>
                    <?php
                }
                else
                {
                    ?>
                        <div class="msg-erro">
                        Email ou CPF ja cadastrado!
                        </div>
                    <?php
                }
            }
            else
            {
                ?>
                        <div class="msg-erro">
                        Senha e confirmar senha não correspondem!
                        </div>
                    <?php
            }  
        }
        else
        {
            ?>
                <div class="msg-erro">
                   <?php echo "Error: ".$u->msgErro;
                ?>
                </div>
            <?php
        }
    }
        else
        {  
            ?>
                        <div class="msg-erro">
                        Preencha todos os campos!
                        </div>
                    <?php
        }
}
?>
<body>