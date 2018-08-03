<?php
//ATRIBUINDO VALOR A VARIAVEL;
$nome = "Jonatan";
$sobrenome = "Freidmon";
//CONCATENAÇÃO DE VARIAVEIS
$nomeCompleto = $nome . " " . $sobrenome;
//IMPRIMINDO O VALOR DA VARIAVEL;
echo $nomeCompleto;
//PODEMOS USAR O EXIT PARA ENCERRAR O PROGRAMA ONDE ELE ESTIVER;
exit;
//ECHO USADO PARA QUEBRAR LINHA;
echo "<br>";
//MOSTRA OS DADOS DA VARIAVEL, ESPAÇO QUE OCUPA E TIPO;
var_dump($nome);
//APAGA O QUE TEM DENTRO DA VARIAVEL;
unset($nome);
//VERICANDO SE A VARIAVEL EXISTE;
if(isset($nome)){
echo $nome;
}
?>