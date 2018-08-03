<?php
//ATRIBUINDO VALOR A VARIAVEL;
	$nome = "Jonatan";
//CONCATENIZAÇAO NA VARIAVEL COM O SOBRENOME;
	$nome .= " Souza";
//TESTE PARA VER SE EXIBE O NOME COM O SOBRENOME;
	echo $nome;
////////////////////////////////////////////////
	echo "<br>";
////////////////////////////////////////////////
//ATRIBUINDO VALOR A VARIAVEL;
	$valorTotal = 0;
//ATRIBUINDO VALOR A VARIAVEL SOMANDO COM O VALOR ANTERIOR USANDO O OPERADOR +=;
	$valorTotal += 100;
//A VARIAVEL TA VALENDO 100, VAMOS ATRIBUIR MENOS A ESSE VALOR COM -=;
	$valorTotal -= 25;
//TESTANDO RESULTADO
	echo $valorTotal;
////////////////////////////////////////////////
	echo "<br>";
////////////////////////OPERADORES ARITMÉTICOS////////////////////////
//ATRIBUINDO VALOR AS VARIAVEIS
	$a = 10;
	$b = 5;
//APRENDENDO A SOMAR, DIVIDIR, MULTIPLICAR, DIMINUIR, POTENCIA E RESTO DA DIVISAO;
//SOMA
	echo "A soma dos dois numeros é ".($a + $b);
	echo "<br>";
//SUBTRAÇAO
	echo "A subtraçao dos dois numeros é ".($a - $b);
	echo "<br>";
//DIVISAO
	echo "A divisao de um numero pelo outro é ".($a/$b);
	echo "<br>";
//MULTIPLICAÇÃO
	echo "A multiplicaçao de um numero com o outro é ".($a*$b);
	echo "<br>";
//POTENCIA
	echo "A potencia com ".$a." como base e ".$b." como expoente é ".($a**$b);
	echo "<br>";
//RESTO
	echo "O resto da divisao entre esses dois numeros é ".($a%$b);
	echo "<br>";
////////////////////////OPERADORES COMPARATIVOS////////////////////////
//MAIOR, MENOR, IGUAL, DIFERENTE, SPACESHIP(PHP7), NULL(PHP7);
//MAIOR 
	var_dump($a > $b);
	echo "<br>";
//MENOR 
	var_dump($a < $b);
	echo "<br>";
//IGUAL 
	var_dump($a == $b);
	echo "<br>";
//DIFERENTE
	var_dump($a != $b);
	echo "<br>";
//SPACESHIP
	var_dump($a <=> $b);
	echo "<br>";
//NULL
	echo $a ?? $b;
	echo "<br>";
////////////////////////OPERADORES INCREMENTAÇÃO////////////////////////
//ACRESCENTA MAIS UM 
	echo ++$a;
	echo "<br>";
//DECRESCENTA MENOS UM
	echo --$b;
	echo "<br";
////////////////////////OPERADORES CONDIÇAO////////////////////////
//E(&&)
	if(($a > 5) && ($b < 6)){
		echo "YES";
		echo "<br>";
	}
	else{
		echo "NO";
		echo "<br>";
	}
//OU(||)
	if(($a > 5) || ($b < 6)){
		echo "YES";
		echo "<br>";
	}
	else{
		echo "NO";
		echo "<br>";
	}
?>
