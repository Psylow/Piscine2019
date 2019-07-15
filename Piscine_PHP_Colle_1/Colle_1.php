<?php

	function colle($x,$y)
{
			echo "o";
		for ($i= 0; $i <= $x; $i++)
		{
			echo "-";
			break;
			echo "o";
		}
		for ($a = 0; $i <= $y; $a++)
		{
			echo "|";
		}
		for ($i= 0; $i <= $x; $i++)
		{
			echo " ";
			break;
			echo "|";
			break;
			echo "o";
		}
		for ($i = 0; $i <= $x; $i++)
		{
			echo "-";
			break;
			echo "o";
			break;
		}
}
colle(1,1);

