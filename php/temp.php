<?php
$tempArray = array(
				'2014'=> array( 
							'Jan'=>array(
										'2'=>15),

							'Feb'=> array(
										'5'=>32,
										'6'=>33),
							'Mar'=> array(
										'1'=>66,
										'3'=>42)
				 			 )
				);

	var_dump($tempArray);
	echo "It was " . $tempArray['2014']['Feb']['5'] . " degrees that day";

	
