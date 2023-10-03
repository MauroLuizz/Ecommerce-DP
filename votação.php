<?php

Class Usuario
{
    private $pdo;
    public $msgErro = ""; //tudo ok 

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        global $msgErro;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".
            $host,$usuario,$senha);
        } catch (PDOException $e) {
           $msgErro = $e->getMessage();
        }
    }

    public function cadastrar($voto)
    {
        global $pdo;
        global $msgErro;
        //verificar se voto ja esta cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        $sql1 = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE cpf = :c");
        $sql1->bindValue(":c",$cpf);
        $sql1->execute();
        if($sql->rowCount() > 0 || $sql1->rowCount() > 0)
        {
            return false; //ja esta cadastrado
        }
        else
        {
               //caso nao, Cadastrar 
               $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, cpf, nivel, senha) VALUES (:n, :t, :e, :c, :v, :s)");
               $sql->bindValue(":n",$nome);
               $sql->bindValue(":t",$telefone);
               $sql->bindValue(":e",$email);
               $sql->bindValue(":c",$cpf);
               $sql->bindValue(":v",$nivel);
               $sql->bindValue(":s",md5($senha));
               $sql->execute();
               return true;
        }

        //caso nao, Cadastrar 
    }

    public function logar($email, $senha)
    {
        global $pdo;
        global $msgErro;
        //verificar se o email e senha estao cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");

        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0)
        { 
            //entrar no sistema (sessao)
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; // logado com suscesso
        }
        else
        {
            return false; //nao foi possivel logar

        }
    }    
}
?>