<?php

$str = "Hawaii Five Oh";
echo $str;
$strArray = str_split($str);
var_dump($strArray);
$size = count($strArray);

for ($i=0; $i < $size; $i++) 

{
	$revArray[$i]=array_pop($strArray);
}
$final = implode($revArray);
var_dump($final);