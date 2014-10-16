<!DOCTYPE html>
<html>
<head>
<title>Table of 12s</title>
<body>
<?php
// Multiplication table up to 12
$i=0; $j=0;
echo "<table border='1'>"; 
for ($i=1; $i<=12; $i++) {
	echo "<tr>";

	for ($j=1;$j<=12;$j++) {
		echo "<td style='text-align:center;padding:2px'>".$j * $i."</td>"; 
	}
	echo "</tr>";
}
echo "</table>";
?>
</body>
</head>