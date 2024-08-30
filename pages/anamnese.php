<?php
    require __DIR__ ."/../config/config.php";
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base?>/assets/css/style.css">
    <title>Ficha de Anamnese</title>
</head>
<header>

    <span class="logo">La Belle</span>

    <nav class="nav_bar">
        <ul class="menu">
            <li id="link_home"> <a href="">Página inicial</a></li>
            <li id="link_about_us"> <a href="">Sobre nós</a></li>
            <li id="link_for_u"> <a href="">Para você</a></li>
            <li id="link_contact"> <a href="">Contato</a></li>
        </ul>
    </nav>
</header>

<body>

    <main>
        <div class="head_form">
            <h1>Ficha de avaliação</h1>
            <img class="img_anamnese" src="<?php echo $base?>/assets/images/Frame2.png" alt="Ícone genérico da foto do usuário">
            <input type="file" name="" value="foto" id="">
        </div>
        <form action="./anamnese_action.php" method="post">
            <input class="inputs" type="text" name="TratamentoEstetico" placeholder="Já fez tratamento estético?">
            <input class="inputs" type="text" name="AntecedentesAlergicos" placeholder="Antecedentes alérgicos">
            <input class="inputs" type="text" name="AlteracaoHormonal" placeholder="Alterações hormonais">
            <input class="inputs" type="text" name="AlimentacaoBalanceada" placeholder="Alimentação balanceada">
            <input class="inputs" type="text" name="BebidaAlcoolica" placeholder="Bebida alcoólica (frequência)">
            <input class="inputs" type="text" name="Fumante" placeholder="Fumante">
            <input class="inputs" type="text" name="MedicamentoContinuo" placeholder="Medicamento contínuo">
            <input class="inputs" type="text" name="Gestante" placeholder="Gestante">
            <input class="inputs" type="text" name="ProblemaCardiaco" placeholder="Problema cardíaco">
            <input class="inputs" type="text" name="DoencaSignificativa" placeholder="Doença significativa">
            <input class="inputs" id="obs" type="text" name="Observacao" placeholder="Observações">          

            <div class="grid_area_btns">
                <input class="btns btn_back" type="button" value="Voltar">
                <input class="btns btn_next" type="submit" value="Enviar">
            </div>
        </form>

    </main>


</body>

</html>