<?php

function my_generate_file($value)
{

$folder = fopen($value . ".txt", "w");

	if (file_exists($folder))
	{
		return true;
	}
	else
	{
		return false;
	}
}
?>
