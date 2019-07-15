<?php

function print_status($value){
	if($value < 18){
		echo "Site interdit aux mineurs.\n";
	}
	else{
		echo "Vous pouvez entrer !\n";
	}
}
?>
