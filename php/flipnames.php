<?php
//$names = fopen("../assets/names.txt", 'r');
// $i=0;
// while (!feof($names)) {

//	$namesArray[$i] = trim(fgets($names));
//	$i++;
	
//}
$namesArray=trim(file_get_contents("../assets/names.txt"));

//fclose($names);
$output = fopen("../assets/output.txt", 'w');

	for($j=0; $j<strlen($namesArray); $j++) {
		fwrite($output,$namesArray[$j]);
		fwrite($output,"\n");
		}
//	fwrite($output,"\r\n");
//	}
	
fclose($output);
