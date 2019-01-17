<?php
	
	for($i = 5;$i <=10;$i++){
		echo 'Numero: '.$i;
		echo '<br>';
	}

	$i = 0;
	while($i < 10){
		echo $i;
		echo '<br>';
		$i++;
	}

	$i=0;
	echo '<br>';
	do{
		echo $i;
		echo '<br>';
		$i++;
	}while($i<10);

	$people = array	('Brad'=>'brad@gmail.com','Jose'=>'jose@gmail.com','William'=>'will@gmail.com');
	foreach($people as $person => $email){
		echo $person.':'.$email;
		echo '<br>';
	}
	


?>
