<?php

$files = $argv;

$i = 0;

while(count($files) > $i)
{
        $fo = fopen($files[$i], 'r');
        $contenu = fread($fo, filesize($files[$i]));
        fclose($fo);
        $i++;
}

?>
