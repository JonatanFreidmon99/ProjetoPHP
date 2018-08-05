<?php
//USANDO HTML PARA CRIAR UMA DIV
echo '<div style="display:flex;flex-direction: column;justify-content: space-around;align-items: center;height:20vh;width:30vw;background-color:yellow">';
//CRIANDO UM FORM PARA CAPTURAR UM VALOR E AGREGAR NA VAR QUE AINDA NAO FOI INICIALIZADA
echo '<form method="GET">';
//SELECT COM AS OPÇÕES DE VALORES
echo '<select name="Idade">';
//FOR PARA CRIAR UMA LISTA DE 0 A 9
for ($i=0 ; $i < 10 ; $i++) {
//ECHO COM AS OPÇOES DENTRO DO SELECT 
	echo '<option  value="'.$i.'">'.$i.'</option>';
}
//FECHAR SELECT
echo '</select>';
//BUTTON QUE IRA ATUALIZAR A PAGINA, ASSIM PASSANDO O VALOR DO SELECT PARA A VAR NAO INICIALIZADA
echo '<button style="margin-left:2vw;" type="submit">Enviar</button>';
//FECHAR FORM
echo "</form>";
//ATRIBUINDO VALOR PARA VAR DE ACORDO COM VALOR DO SELECT ATRAVES DO METODO GET(metodo que pega o valor atraves da url)
$idade = $_GET["Idade"];
//LABEL QUE IRÁ MOSTRAR A VAR 
echo '<label>'.$idade.'</label>';
//FECHAR DIV
echo '</div>';
?>