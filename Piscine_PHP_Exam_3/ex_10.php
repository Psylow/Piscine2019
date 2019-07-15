<?php

$i=1;
	if($argc >= 1)
	{
		while($i < $argc)
		{
			echo md5($argv[$i]) . "\n";
			$i++;
		}
	}

