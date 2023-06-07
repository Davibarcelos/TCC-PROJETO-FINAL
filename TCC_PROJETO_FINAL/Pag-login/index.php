<?php
require_once './classes/usuarios.php';
$u= new Usuario;
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Faça Login</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div id="corpo-form">
        <form method="post">
            <h1>Entrar</h1>
            <input type="email" name="email" placeholder="Usuário:"  maxlength="40">
            <input type="password" name="senha" placeholder="Senha:"  maxlength="15">
            <input type="submit" value="Acessar">
            <a href="cadastrar.php">Ainda não é inscrito? <strong>Inscreva-se!</strong></a>
        </form>
        </div>
        <?php
        //verificar se clicou no botao acessar
if (isset($_POST['email']))
{
    $email= addslashes($_POST['email']);
    $senha= addslashes($_POST['senha']);

    if(!empty($email) && !empty($senha))
    {
        $u->conectar("login_cadastro","localhost","root","");
        if($u->msgERRO == "")
        {
            if($u->logar($email,$senha))
            {
                header("location: Areaprivada.php");
            }else
            {
                ?>
                <div class="msg-erro">E-mail e/ou Senha incorretos! Digite novamente!
                </div> 
                <?php
            }
        }else
        {
            ?>
                <div class="msg-erro"><?php echo "Erro: ".$u->msgERRO; ?>
                </div> 
            <?php
        }
    }else
    {
        ?>
        <div class="msg-erro">Você precisa preencher todos os campos.
        </div> 
        <?php
    }
    }

        ?>
    </body>
</html>