<?php
	class Person{
		public $name;
		protected $age;
		private $salary;
		
		public function __construct($name,$age,$salary){
			$this->name=$name;
			$this->age=$age;
			$this->salary=$salary;
		}
		
		public function info(){
			echo $this->name." || ".$this->age." || ".$this->salary;
		}
		
		
		
		
	}
	
	
	$p=new Person('sword',29,3000);
	echo $p->name;
	echo $p->age;
	echo $p->salary;

?>












