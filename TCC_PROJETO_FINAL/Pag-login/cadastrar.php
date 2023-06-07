<?php 
require_once './classes/usuarios.php';
    $u= new Usuario;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Cadastrar-se</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="corpo-form-Cad">
        <form method="post">
            <h1>Cadastrar-se</h1>
            <input type="text" name="nome" placeholder="Nome Completo:" maxlength="30">
            <input type="text" name="telefone" placeholder="Telefone:(DDD*********)"  maxlength="40">
            <input type="email" name="email" placeholder="Usuário:E-mail"  maxlength="40">
            <input type="password" name="senha" placeholder="Senha:"  maxlength="15">
            <input type="password" name="confsenha" placeholder="Confirmar Senha:"  maxlength="15">
            <input type="submit" value="Cadastrar">
            <a href="index.php">Já é inscrito? <strong>Faça Login!</strong></a>
        </form>
        </div>
        <?php
//verificar se clicou no botao cadastrar
if (isset($_POST['nome']))
{
    $nome= addslashes($_POST['nome']);
    $telefone= addslashes($_POST['telefone']);
    $email= addslashes($_POST['email']);
    $senha= addslashes($_POST['senha']);
    $confirmarsenha= addslashes($_POST['confsenha']);
//verificar se algum campo está vazio
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
    {
    $u->conectar("login_cadastro","localhost","root","");
    if ($u->msgERRO == "" )//esta tudo bem
     {
        if ($senha == $confirmarsenha) 
        {
            if($u->cadastrar($nome,$telefone,$email,$senha))
        {
            ?>
            <div id="msg-sucesso">Cadastrado com sucesso. Acesse para entrar!
            </div> 
            <?php
        }else
        {
            ?>
            <div class="msg-erro">Usuário já cadastrado. Digite outro usuário.
            </div> 
            <?php
        }
        }else{
            ?>
            <div class="msg-erro">Senhas Não coincidem. Digite novamente!
            </div> 
            <?php
        }
    }
    else
    {
            ?>
            <div class="msg-erro"><?phpecho"Erro: ".$u->msgERRO;?>
            </div> 
            <?php
    }
    }else
    {
            ?>
            <div class="msg-erro">Você precisa cadastrar todos os campos.
            </div> 
            <?php
    }
}
?>
    </body>
</html>