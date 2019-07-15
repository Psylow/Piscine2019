<?php

function rev_epur_str($str)
{
	if(!is_string($str))
	{
		return FALSE;
	}
	else
	{
		$str = trim($str);
		$str = preg_replace('/s+/\s' , " ", $str);
		$chaine = $str;
		$chaine = explode(" ", $str);
		$chaine = array_reverse($array);
		$chaine = implode($string, $array);
		echo $string;
	}
}
