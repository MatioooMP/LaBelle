<?php
    require __DIR__ ."/../config/config.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Belle - Login</title>
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/tela-login.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/reset.css ">
</head>
<body>
    <section class="aside">
        <span class="aside-title">La Belle</span>
        <span class="aside-subtitle">Sua beleza, sua agenda!</span>
    </section>
    <main>
        <header>
            <nav>
                <ul>
                    <li><a href="">Página Inicial</a></li>
                    <li><a href="">Sobre Nós</a></li>
                    <li><a href="">Para Você</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
        </header>
        <div>
            <span>Login</span>
            <form action="">
                <input class="form-login" type="number" name="login-nome" id="login-user" placeholder="CPF">
                <input class="form-login" type="password" name="login-senha" id="login-password" placeholder="Senha">
                <input type="submit" value="Entrar">
                <a id="login-form-signin" href="">Cadastre-se</a>
                <a id="login-form-forgot" href="">Esqueceu a senha?</a>
            </form>
        </div>
    </main>
</body>
</html>