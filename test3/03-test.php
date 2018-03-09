<?php
	
	function test(){
		static $a=0;
		$a++;
		echo $a."<br />";
	}
	
	test();  //1
	test();  //2
	test();  //3
	//javascript  var a=10  a=12
	//php   $a=10  $a=12
	/*
	$a=10;
	
	function demo($a){
		$a+=10;
		echo $a." demo<br />";
	}
	
	function test($b){
		$b+=5;
		echo $b." test<br />";
	}
	
	function ll(){
		global $a;
		$a=30;
		echo $a." ll<br />";
	}
	
	demo($a);
	test($a);
	echo $a;
	ll();
	echo $a;
	*/
	/*
	function demo(){
		$a=10;
	}
	
	demo();
	echo $a."<br />";
	
	$b=15;
	
	function test(){
		global $b;
		echo $b;
	}
	
	test();*/
	

?>