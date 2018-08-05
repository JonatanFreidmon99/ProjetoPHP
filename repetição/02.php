<?php
//FOR JUNTO COM HTML E FUNÇÃO DATE("Y")
//echo que faz com que a tag do html seja criada
echo "<select>";
for ($i=date("Y"); $i > date("Y") - 100 ; $i--) { 
	echo '<option value="'.$i.'">'.$i.'</option>';
}
//echo que encerra a tag html
echo "</select";
?>