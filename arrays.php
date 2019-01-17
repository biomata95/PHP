<!Doctype html>
<head>

  <meta charset="UTF-8">
</head>
<?php
	$people = array('fulano','beutro','akiles');
	$ids  = array(23,55,12);
	$cars = ['Ford','Mercedes','Kia'];
	$cars[3] = 'Motors';
	$cars[] = 'BMW';
	$cars[] = 10;
	$cars[] = 1.7;
	$cars[] = true;

	echo count($cars)."<br>";	
	print_r($cars);
	echo "<br>";
	var_dump($cars);
	echo "<br>";
	
	echo $people[2]."<br>";
	echo $ids[2]."<br>";
	echo $cars[4]."<br>";

 	echo "<br>";
	echo "<br>";
	echo "<br>";


	$people = array('Brad' =>35,'Jose'=>32,'William'=>37);
	echo "<br>";
	echo "<br>";
	$ids = [22=>'Brad',44=>'Jose',63=>'william'];

	echo $people['Brad']."<br>";
	echo $ids['22']."<br>";	
	$people['Jill']=43;
	echo $people['Jill']."<br>";
	print_r($people);
	echo "<br>";
	var_dump($people);
	echo "<br>";

	//  multidimensional //
	$cars = array(
		array('Honda',10,20),
		array('Toyota',34,48),
		array('Ford',50,25),	
	);

	echo "<br>";
	echo $cars[1][2];
	echo "<br>";
	echo $cars[1][0];

?>

