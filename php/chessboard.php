<!DOCTYPE html>
<html>
<head>
<title>Chess Board</title>
<style>
.black {
	background-color: #000000;
	height: 40px;
	width: 40px;
	padding: 0;
	margin: 0;

}
.white {
	background-color: #ffffff;
	height: 40px;
	width: 40px;
	padding: 0;
	margin: 0;
	
}
</style>
</head>
<body>
<table style="border:1px solid; border-spacing:0">
<?php

for ($i=1; $i<9; $i++) {
	echo "<tr>";
	for($j = 1; $j < 9; $j++){

		if ($j%2 xor $i%2) echo "<td class='black'></td>";

	else echo "<td class='white'></td>";

	}
	echo "</tr>";

}

?>
</table>
</body>
</html>