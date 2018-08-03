<?php
//TESTE COM INCLUDE/REQUIRE PARA PUXAR A FUNÇAO SOMAR DO ARQUIVO 01.PHP;
//include "01.php" -> pode se usar tambem;
require "01.php";
//ATRIBUINDO VALORES AS VARIAVEIS;
$num1 = 10;
$num2 = 2;
//CRIANDO A VARIAVEL COM O RESULTADO DA FUNÇAO SOMAR;
$resultado = somar($num1,$num2);
//TESTANDO O RESULTADO DA FUNCAO.
echo $resultado;
?>