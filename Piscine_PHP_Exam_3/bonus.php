<?php

function my_prime($start, $end)
{
	echo "Les nombres premiers entre " . $start . " et " . $end . " sont : \n";
	for($i=2; $i<=$end;$i++)
	{
		$nbDiv = 0;
		for($j=1;$j<=$i;$j++)
		{
			if($i%$j==0)
			{
			$nbDiv++;
			}
		}
		if($nbDiv == 2)
		{
			if($i == 97)
			{
				echo $i . ".\n";
			}
			else
			{
			echo $i . ", \n";
			}
		}
	}
}
my_prime(2, 100);
