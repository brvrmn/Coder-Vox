<?php

$str = "Hawaii Five Oh";
echo $str;
echo "<br />";
$count = strlen($str)-1;
$newStr = '';
for ($count; $count>=0; $count--) {
	$newStr .= $str[$count];
}
echo $newStr;