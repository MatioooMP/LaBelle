<?php
require '/../config/config.php';
 
 
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

 
var_dump($tratamentoEst);
var_dump($antecedenteAlerg);
var_dump($alteracaoHorm);
var_dump($alimentacaoBal);
var_dump($bebidaAlco);
var_dump($fumante);
var_dump($medicamentoCont);
var_dump($gestante);
var_dump($problemaCardi);
var_dump($doencaSign);
var_dump($observacoes);
 
 
if ($tratamentoEst && $antecedenteAlerg && $alteracaoHorm && $alimentacaoBal && $bebidaAlco && $fumante && $medicamentoCont && $gestante
    && $problemaCardi && $doencaSign && $observacoes) {
   
    $sql = $pdo->prepare("INSERT INTO Ficha (idCliente, TratamentoEstetico, AntecedentesAlergicos, AlteracaoHormonal, AlimentacaoBalanceada, BebidaAlcoolica,
                                                Fumante, MedicacaoContinua, Gestante, ProblemaCardiaco, DoencaSignificativa, Observacao)
                          VALUES (:idCliente, :TratamentoEstetico, :AntecedentesAlergicos, :AlteracaoHormonal, :AlimentacaoBalanceada, :BebidaAlcoolica,
                                    :Fumante, :MedicacaoContinua, :Gestante, :ProblemaCardiaco, :DoencaSignificativa, :Observacao)");
 
   
    $sql->bindValue(":idCliente", $_SESSION["idCliente"]);  
    $sql->bindValue(":TratamentoEstetico", $tratamentoEst);
    $sql->bindValue(":AntecedentesAlergicos", $antecedenteAlerg);  
    $sql->bindValue(":AlteracaoHormonal", $alteracaoHorm);
    $sql->bindValue(":AlimentacaoBalanceada", $alimentacaoBal);
    $sql->bindValue(":BebidaAlcoolica", $bebidaAlco);
    $sql->bindValue(":Fumante", $fumante);  
    $sql->bindValue(":MedicacaoContinua", $medicamentoCont);
    $sql->bindValue(":Gestante", $gestante);  
    $sql->bindValue(":ProblemaCardiaco", $problemaCardi);
    $sql->bindValue(":DoencaSignificativa", $doencaSign);
    $sql->bindValue(":Observacao", $observacoes);
    $sql ->execute();
 
//  header("Location: ./../index.php");
 exit;
} else {
    header("Location: anamnese.php");
    exit;
}