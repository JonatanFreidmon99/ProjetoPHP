<?php
///////////////////////////////STRING E FUNÇÕES PARA SE USAR//////////////////////////////////
//DIFERENÇA ENTRE ASPAS SIMPLES E ASPAS DUPLAS
//ATRIBUINDO VALOR AS VARIAVEIS
$nome = "Jonatan";
$nome2 = 'Fernanda';
//TESTANDO ASPAS DUPLAS(resultado esperado é que a variavel a pareça com o seu valor no echo e nâo com o nome da variavel)
echo "$nome é lindo";
echo "<br>";
echo "$nome2 é linda";
echo "<br>";
//TESTANDO ASPAS SIMPLES(resultado esperado é que a variavel nao pareça com o seu valor no echo e sim com o nome da variavel)
echo '$nome é lindo';
echo "<br>";
echo '$nome2 é linda';
echo "<br>";
///////////////////////////////FUNÇÕES PARA USAR COM STRING//////////////////////////////////
//FUNÇÃO STRTOUPPER(deixa a string maiuscula)
echo strtoupper($nome);
//podemos atribuir a variavel tambem antes de passar pro echo
//$nome = strtoupper($nome), depois chamar no echo a variavel
echo "<br>";
echo strtoupper($nome2);
//$nome = strtoupper($nome2), depois chamar no echo a variavel
echo "<br>";
//FUNÇÃO STRTOLOWER(deixa a string minuscula)
echo strtolower($nome);
//podemos atribuir a variavel tambem antes de passar pro echo
//$nome = strlower($nome), depois chamar no echo a variavel
echo "<br>";
echo strtolower($nome2);
//$nome = strlower($nome2), depois chamar no echo a variavel
echo "<br>";
//ATRIBUINDO VALOR A VARIAVEL PRA TESTE DAS FUNCOES UCFIRST E UCWORDS
$nome3 = "jonatan freidmon";
//UCFIRST(deixa a primeira letra maiuscula)
echo ucfirst($nome3);
echo "<br>";
//UCWORDS(deixa a primeira letra de cada palavra maiuscula)
echo ucwords($nome3);
echo "<br>";
//STR_REPLACE(altera a string, com essa funçao voce escolhe onde quer alterar na string e pelo o que quer que seja alterado)
echo str_replace("o", "0", $nome);
echo "<br>";
//STRPOS(posiçao da primeira letra da palavra dentro de uma string)
echo strpos($nome3, "freidmon");
echo "<br>";
//STRLEN(qtd de caractere dentro da string)
echo strlen($nome);
echo "<br>";
//SUBSTR(serve para pegar uma parte desejada da string)
echo substr($nome3,0,3);
?>
