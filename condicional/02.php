<?php
//ATRIBUINDO VALOR A VARIAVEL;
// usando a funçao date("w") para dar o numero que o dia da semana representa, por exemplo se for domingo(0).
$diaDaSemana = date("w");
//USANDO SWITCH PARA DIZER QUAL DIA DA SEMANA REPRESENTA O NUM, SWITCH É BOM PARA QUANDO SABEMOS QUAIS AS POSSIBILIDADES DO RESULTADO DA VARIAVEL
switch ($diaDaSemana) {
	//CASE É O VALOR QUE ESTÁ NA VAR
	case 0:
	//NESSE CASO SE O VALOR DA VAR FOR 0 O PROGRAMA IRÁ IMPRIMIR DOMINGO
		echo "Domingo";
	//BREAK É USADO PARA DAR FIM AO SWITCH, POR EXEMPLO, SE O VALOR NA VAR FOR 0, O PROGRAMA VAI SAIR DO SWITCH
		break;
	case 1:
		echo "Segunda";
		break;
	case 2:
		echo "Terça";
		break;
	case 3: 
		echo "Quarta";
		break;
	case 4: 
		echo "Quinta";
		break;
	case 5:
		echo "Sexta";
		break;
	case 6:
		echo "Sabado";
		break;
	//DEFAULT É PARA QUANDO O VALOR NA VAR É DIFERENTE DO ESPERADO
	default:
		echo "Num nao corresponde a nenhum dia da semana ";
		break;
}
?>