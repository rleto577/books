<?php

	$myFile = "hum_data.txt";
	$fh = fopen($myFile, 'r');
	$line = fgets($fh);
	fclose($fh);

	echo $line;

?>