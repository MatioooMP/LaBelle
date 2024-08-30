<?php
session_start();
require __DIR__ . "/../config/config.php";

$mensagem = "";
$login = filter_input(INPUT_POST, "login-nome", FILTER_VALIDATE_INT);
$pwd = htmlspecialchars(filter_input(INPUT_POST, "login-senha"));

if ($login && $pwd) {
    $sql = $pdo->prepare("SELECT * from Cliente where cpfCliente=:cpfCliente AND senhaCliente=:senhaCliente");
    $sql->bindValue(":cpfCliente", $login);
    $sql->bindValue(":senhaCliente", $pwd);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $_SESSION["userLogged"] = $row["nomeCliente"];
        header("Location: tela-loginalt.php");
    } else {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mensagem = "Usuário ou senha Inválidos!";
        }
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $mensagem = "Usuário ou senha Inválidos!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Belle - Login</title>
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/tela-login.css">
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/reset.css ">
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
            <form action="" method="post">
                <input class="form-login" type="number" name="login-nome" id="login-user" placeholder="CPF">
                <input class="form-login" type="password" name="login-senha" id="login-password" placeholder="Senha">
                <input type="submit" value="Entrar">

                <a id="login-form-signin" href="">Cadastre-se</a>
                <div id="user-pwd-error"><?php echo $mensagem ?></div>
                <a id="login-form-forgot" href="">Esqueceu a senha?</a>
            </form>
        </div>
    </main>
</body>

</html>