<?php
///////////////////FOR///////////////////////
for ($i=0; $i < 10 ; $i++) {
//IF QUE IRA FAZER COM QUE NAO EXIBA OS NUMEROS ENTRE 2 E 5, POIS O CONTINUE NAO PERMITE QUE OS CODIGOS ABAIXO DELE NAO SEJAM EXECUTADOS 
	if($i > 2 && $i < 5) continue;
//BREAK IRÁ INTERROMPER QUANDO A VAR FOR MAIOR 8, POIS BREAK INTERROMPE O LAÇO DE REPETIÇÃO
	if($i > 8) break;
//RESULTADOS 1,2,5,6,7,8
	echo $i;
}

?>