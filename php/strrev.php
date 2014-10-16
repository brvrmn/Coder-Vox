<?php

$str = "Hawaii Five Oh";
echo $str;
$count = strlen($str);
$newStr = '';

for ($count;$count>=0; $count--) {
$newStr .= substr($str,$count,1);
}

echo $newStr;