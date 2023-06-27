<?php

class Usuario
{
    private $pdo;
    public $msgERRO = ""; //Se estiver vazio esta tudo bem👍👍;

    public function conectar($nome, $host, $usuario, $senha )
{
        global $pdo;

        try
    {
        $port= 3307;
        $pdo = new PDO("mysql:dbname=".$nome.';port='.$port.";host=".$host,$usuario,$senha);
    } catch(PDOException $e){
        $msgERRO = $e->getMessage();
    }
}
    public function cadastrar($nome,$telefone, $email, $senha)
{
        global $pdo;
        //Verificar se ja existe um email

        $sql= $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
    $sql->bindValue(":e",$email);
    $sql->execute();
    if($sql->rowCount() > 0)
    {
        return false; //já está cadastrado
        
    }else{

        //caso nao, cadastrar

        $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":t",$telefone);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        return true;// foi cadastrado
    }

}
    public function logar($email, $senha)
{
        global $pdo;
        //verificar se o email e senha ja estao cadastrados
        $sql= $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount() > 0 )
        {
            //entrar no sistema
            $dado= $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true;//Logado com sucesso
        }else{
            return false; //Nao conseguiu logar
        }
}
}
?>