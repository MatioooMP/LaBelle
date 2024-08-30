<?php
require __DIR__ . '/../config/config.php';


$tratamentoEst = filter_input(INPUT_POST, 'TratamentoEstetico', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$antecedenteAlerg = filter_input(INPUT_POST, 'AntecedentesAlergicos', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$alteracaoHorm = filter_input(INPUT_POST, 'AlteracaoHormonal', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$alimentacaoBal = filter_input(INPUT_POST, 'AlimentacaoBalanceada', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$bebidaAlco = filter_input(INPUT_POST, 'BebidaAlcoolica', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$fumante = filter_input(INPUT_POST, 'Fumante', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$medicamentoCont = filter_input(INPUT_POST, 'MedicamentoContinuo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$gestante = filter_input(INPUT_POST, 'Gestante', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$problemaCardi = filter_input(INPUT_POST, 'ProblemaCardiaco', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$doencaSign = filter_input(INPUT_POST, 'DoencaSignificativa', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$observacoes = filter_input(INPUT_POST, 'Observacao', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (
    $tratamentoEst && $antecedenteAlerg && $alteracaoHorm && $alimentacaoBal && $bebidaAlco && $fumante && $medicamentoCont && $gestante
    && $problemaCardi && $doencaSign && $observacoes
) {

    $sql = $pdo->prepare("INSERT INTO Ficha (idCliente, TratamentoEstetico, AntecedentesAlergicos, AlteracaoHormonal, AlimentacaoBalanceada, BebidaAlcoolica,
                                                Fumante, MedicamentoContinuo, Gestante, ProblemaCardiaco, DoencaSignificativa, Observacao)
                          VALUES (:idCliente, :TratamentoEstetico, :AntecedentesAlergicos, :AlteracaoHormonal, :AlimentacaoBalanceada, :BebidaAlcoolica,
                                    :Fumante, :MedicamentoContinuo, :Gestante, :ProblemaCardiaco, :DoencaSignificativa, :Observacao)");


    $sql->bindValue(":idCliente", 1);
    $sql->bindValue(":TratamentoEstetico", $tratamentoEst);
    $sql->bindValue(":AntecedentesAlergicos", $antecedenteAlerg);
    $sql->bindValue(":AlteracaoHormonal", $alteracaoHorm);
    $sql->bindValue(":AlimentacaoBalanceada", $alimentacaoBal);
    $sql->bindValue(":BebidaAlcoolica", $bebidaAlco);
    $sql->bindValue(":Fumante", $fumante);
    $sql->bindValue(":MedicamentoContinuo", $medicamentoCont);
    $sql->bindValue(":Gestante", $gestante);
    $sql->bindValue(":ProblemaCardiaco", $problemaCardi);
    $sql->bindValue(":DoencaSignificativa", $doencaSign);
    $sql->bindValue(":Observacao", $observacoes);
    $sql->execute();

    header("Location: ./teste.php");
    exit;
} else {
    header("Location: anamnese.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $base ?>/assets/css/style.css">
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
            <img class="img_anamnese" src="<?php echo $base ?>/assets/images/Frame2.png" alt="Ícone genérico da foto do usuário">
            <input type="file" name="" value="foto" id="">
        </div>
        <form action="./anamnese_action.php" method="POST" id="form">
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
                <input class="btns btn_send" type="submit" value="Enviar">
            </div>
        </form>
    </main>

</body>

</html>