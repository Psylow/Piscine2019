<?php
function array_key($arg1, $arg2)
	{
	foreach($arg1 as $key => $value)
		{
		if($key == $arg2)
			{
			return $value;
			}
		}
	}
?>
