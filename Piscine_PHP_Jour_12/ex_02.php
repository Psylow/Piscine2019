<?php

function cesar2(string $str)
{
	$chaine = strtolower($str);
	for($i = 0; $i < strlen($chaine); $i++)
	{
		$chr = $str[$i];
		$ascii = ord($chr);
		if($ascii >= 97 && $ascii <= 122)
		{
			if($ascii == 122)
			{
				$neAscii == 98;
			}
			elseif($ascii == 121)
			{
				$neAscii == 97;
			}
			else
			{
				$ascii+2;
			}
				echo chr($neAscii);
		}
			else
			{
				echo $chr;
			}

			echo "\n";
}
