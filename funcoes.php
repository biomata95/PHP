<?php

	function simpleFunction(){
		echo 'Hello world';
	}

	simpleFunction();
	echo '<br>';
	function sayHello($name = 'World'){	
		echo "Hello $name<br>";
	}

	sayHello('Joe');
	sayHello('Bob');
	sayHello('Tim');

	function addNumbers($num1,$num2){
		return $num1+$num2;
	}

	echo addNumbers(2,3);
	echo '<br>';

	$retorno = addNumbers(3,3);
	echo $retorno + 5;
	echo '<br>';

	$myNum = 10;
		
	function addFive(&$num){
		$num +=5;
	}

	function addTen(&$num){
		$num +=10;
	}

	addFive($myNum);
	
	echo "valor: $myNum<br>";

	addTen($myNum);
	echo "valor: $myNum<br>";

?>
