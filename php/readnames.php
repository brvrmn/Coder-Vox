<?php
$names = fopen("../assets/names.txt", 'r');
while (!feof($names)) {
	$current = fgets($names);
	echo $current . "<br />";
}
fclose($names);