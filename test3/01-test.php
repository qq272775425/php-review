<?php
	//数据结构、算法、编译原理、设计模式
	
	function aa(){
		$a=10;
		echo $a;
		return true;  
		$b=12;
		echo $b;
	}
	$b=false;
	$b=aa();
	
	//var aa=function(){var bb=19;}   eval()  function(){}()  
	//var aa=undefine;
	
	if($b==true){
		echo 123;
	}else{
		echo 456;
	}
	
	/*
	Model.php  
	class aa{
		public $a=10;
		public function aa(){
			echo 123;
		}
	}
	
	Controller.php
	include Model.php   
	$aa=new aa();
	$aa->aa();
	*/

?>












