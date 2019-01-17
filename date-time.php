<?php
	echo date('d')."<br>";
	echo date('m')."<br>";
	echo date('Y')."<br>";
	echo date('1')."<br>";

	echo date('Y/m/d')."<br>";
	echo date('m-d-Y')."<br>";

	echo date('h')."<br>";
	echo date('i')."<br>";
	echo date('s')."<br>";
	echo date('a')."<br>";

	date_default_timezone_set('America/New_York');
	echo "<br>";
	echo date('h:i:sa')."<br>";
	
	$timestamp = mktime(10,14,54,9,10,1981);

	echo $timestamp."<br>";

	$timestamp2 = strtotime('7:00pm March 22 2019');
	$timestamp3 = strtotime('tomorrow');
	$timestamp4 = strtotime('next Tuesday');
	$timestamp5 = strtotime('+2 Days');
	echo date('d/m/Y h:i:sa',$timestamp)."<br>";
	echo date('d/m/Y h:i:sa',$timestamp2)."<br>";
	echo date('d/m/Y h:i:sa',$timestamp3)."<br>";
	echo date('d/m/Y h:i:sa',$timestamp4)."<br>";
	echo date('d/m/Y h:i:sa',$timestamp5)."<br>";


?>
