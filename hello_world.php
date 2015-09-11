<?php
	
	$first_name = "Rimo";
	$last_name = "Esko";
	
	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age  = 19;
	
	//kui on väiksem kui 18, siis on alaealine. Kui on suurem kui 18, siis täisealine
	if ($age < 18){
		//tõene
		echo "alaealine";
	}	else	{
		//väär
		echo "täisealine";
	}

?>