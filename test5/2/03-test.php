<?php
	class A{
		private $n1;
		private $n2;
		private $n3;
		
		//使用__set方法来管理所有属性
		public function __set($pro_name,$pro_val){
			$this->pro_name=$pro_val;
		}
		
		//使用__get可以获取所有的属性
		public function __get($pro_name){
			if(isset($pro_name)){
				return $this->pro_name;
			}else{
				return null;
			}
		}
	}
	
	$a1=new A();
	$a1->n1="hello";
	echo $a1->n1;
	
	/*
	//继承细节
	1：子类最多只能继承一个父类(直接继承)
	2：子类是可以继承父类下的用public protected修饰的成员属性和成员方法
	3：PHP子类对象 默认情况下是不会去调用父类下的构造函数 parent::__contruct
	4: 子类去访问父类的构造方法和成员方法 要求父类的构造函数和成员方法必须是用
	public 和 protected进行修饰 也可以直接使用 父类名::方法名  parent::方法名
	5：方法重写*/

?>






