<?php
$grades = fopen("../assets/grades.txt", 'r');

while (!feof($grades)) {
	$current = trim(fgets($grades));
	if (!is_numeric($current)){

		$curName=$current;
		$gradesArray["$curName"]= 0;
		$countArray["$curName"]=0;
	}
		else {
			$gradesArray[$curName]+=$current;
			$countArray[$curName]++;
		}

}
fclose($grades);
$output = fopen("../assets/output.txt", 'w');
foreach($gradesArray as $k => $v) {
	$avg=round($v / $countArray[$k]);
	fwrite($output,$k);
	fwrite($output,"\t");
	fwrite($output,$avg);
	fwrite($output,"\n");
}
fclose($output);
?>