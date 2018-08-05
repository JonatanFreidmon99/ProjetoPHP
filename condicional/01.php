<?php
//ATRIBUINDO VALORES AS VARIAVEIS
$num1 = 10;
$num2 = 2;
$num3 =7;
//USANDO IF PARA INICIAR UMA ESTRUTURA DE CONDIÇAO
if($num1 >  $num2){
	$num3 = $num3 * $num2;
	echo "O resultado é ".$num3;
}
//ELSE IF PARA SENAO, SE A CONDIÇAO FOR FALSA ESSA LINHA DE COMANDO SERÁ EXECUTADA
else if($num1 < $num3){
	$num2 = $num1 / $num2;
	echo "O resultado é ".$num2;
}
//ELSE IF IRÁ FUNCIONAR SE NENHUMA DAS DUAS ALTERNATIVAS ESTIVEREM FUNCIONANDO
else if($num3 > $num2){
	$num1 = ($num1 - $num2) * $num3;
	echo "O resultado é ".$num1;
}
//ELSE SERA SOLICITADO SE NENHUMA DOS IF ESTIVEREM NAS SUAS CONDIÇOES
else{
	echo "foda-se";
}
?>