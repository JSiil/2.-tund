<?php
	$first_name = "Jaagup";
	$last_name = "Siil";
	echo $first_name." ".$last_name;

?>

<br>

<?php

	$age=5;
	// kui on noorem kui 18, siis alaealine
	// kui on 18 ja rohkem, siis täisealine
	if($age<18) {
		//tõene
		echo "alaealine";
		
	}else{
	//väär
	echo "täisealine";
	}

?>

<?php

	// nii mitu korda trüki välja "palju", kui palju on vanust
	for($i=0; $i<$age; $i=$i+1) {
	
		// see mida korratakse
		echo "palju";
	
	}

	echo "õnne";
?>

<?php

	//kuupäev kujul: Friday, 11.09.2015
	echo( date("l,j.m.Y e h:i:s") );
?>


