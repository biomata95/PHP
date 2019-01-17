<?php
	class Person{
		private $name;
		private $email;

		public function __construct($name,$email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__."<br>pessoa criada<br>";
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getName(){
			return $this->name;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;
		}

	}

	class Customer extends Person{
		private salario;
	
	}
		
	$person1 = new Person('Joao Silva','joao-silva@gmail.com');
	echo $person1->getName()."<br>";
	echo $person1->getEmail()."<br>";
	/*
	$person1->setName('Joao Silva');
	
	echo $person1->getName()."<br>";

	$person1->setEmail('joao-silva@gmail.com');
	
	echo $person1->getEmail()."<br>";
	*/

?>
