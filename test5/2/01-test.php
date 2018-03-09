<?php
	//面向过程-->面向对象
	//类和对象
	//1: public 表全局  可以在本类、类外部、子类中访问
	//2: private 表受到私有 只能在本类中被访问
	//3: protected 表保护的 可以在本类和子类中访问
	
	class Person{
		private $name;
		public function __construct($name){
			$this->name=$name;
			//$this->load->model("user_model");
		}
		//成员变量的应用范围(public private protected)
		/*
		面向对象如何定义
		属性---成员变量、静态成员变量
		方法---成员方法、静态成员方法
		
		构造函数---初始化的成员变量和成员方法
		析构函数
		
		面向对象如何调用成员变量和成员方法*/
		
		
		protected function sing(){
			echo "singing";	
		}
		
		public function ec(){
			echo $this->name;
			
			
			//$this->load->model('user_model');
			//$this->user_model->get_by_name();
		}
		
		public function cry(){
			echo "aaaaaa";
		}
		
		
		
	}
	
	
	class Laoshan extends Person{
		public function __construct(){
			//parent::__construct();
			
		}
		
		public function cry(){
			echo "lalalala";
		}
		
		public function add(){
			echo "456";
		}
	}
	
	
	$Laoshan=new Laoshan();
	$Laoshan->sing();
	//$person=new Person('laoshan');
	//$person->cry();
	//$person->ec();
	
	
	
	
	
	
	
	
	
	
	
	

?>