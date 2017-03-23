<?php 
/*Usa un bucle para crear un página HTML
con la canción “99 bottles”1*/	
$botellas = 99;
	do{			
		
		if($botellas > 1 ){
			echo "{$botellas} botellas de cerveza en la pared";
			echo "<br>";
			echo "{$botellas} de cerveza"		;
			echo "<br>";
			$botellas--;
		}else{
			echo "solo una botella";
		}
	}while($botellas>0);
?>
