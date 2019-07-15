<?php

function my_mail($string = NULL)
{

	$mail = $string;
	$mail = strstr($mail, '@');
	$mail  = strrev($mail);
	$mail = substr($mail, 0, -1);
	$mail = strstr($mail, '.');
	$mail = strrev($mail);
	$mail = substr($mail, 0, -1);
	echo $mail."\n";

}
