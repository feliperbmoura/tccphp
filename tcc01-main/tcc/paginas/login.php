<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/styles/login.css">
    <title>login</title>
</head>
<body>
<?php 
session_start();
    if(isset($_SESSION['usuario'])){
        echo $_SESSION['usuario']['nome'];
        echo "<a href='sair.php'>Sair</a>";
    }else{
        ?>


<main id="content">
    <section class="section-first">
        <form id="formlogin" method="post" action="paginas/login/autenticar.php">

            <img src="imagens/logo.png" alt="logo">

            <div id="txt1">
                <h2>Faça seu login</h2>
            </div>

            <div id="email">
                <label for="txtLogin" class="form-label" > <i class="fa-solid fa-user-circle"></i> Digite seu email</label>
                <input type="email" class="form-control" id="txtLogin" name="txtLogin" placeholder="E-mail" >
            </div>

            <div id="senha">
                <label for="txtSenha" class="form-label"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Digite sua senha</label>
                <input type="password" class="form-control" id="txtSenha" name="txtSenha"  placeholder="Senha">
            </div>

            <div id="remember">

                <span>
                    <input type="checkbox" id="txtCheckbox" name="txtCheckbox">
                    <label for="txtCheckbox">Lembrar senha</label>
                </span>

                    <a href="index.php?pag=cadastro">Não tenho conta</a>
            </div>    

                <button id="botao" onclick="login()">Entrar</button>

                <div id="icons">
                    <button></button>
                    <button></button>
                    <button></button>
                </div>

        </form>
    </section>
</main>
        <?php
    }
?>
</body>
</html>


