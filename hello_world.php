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

<br>

<?php

	//nii mitu korda trüki välja palju, kui palju on vanust
	for($i = 0; $i < $age; $i = $i + 1){
		
		//see mida korratakse
		echo "palju".$i." ";
	}
	
	echo "õnne";
?>

<br>

<?php

	//kuupäev kujul: Friday, 11.09.2015
	echo( date("l, d.m.y"));

?>

