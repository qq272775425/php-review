<?php
	//系统函数功能解析
	/*
	1:copy    bool copy ( string $source , string $dest )
	
	2:chown   bool chown ( string $filename , mixed $user )
	  mixed ()  int float bool string array object null resource
	3:arsort  bool arsort ( array &$array [, int $sort_flags ] )
	带有&参数的函数 表示的是引用赋值 这个参数不能传数值 只能传变量名 
	4:  bool arsort ( array &$array [, int $sort_flags ] )
	 * 表示这个参数[]里面的参数是可选（如果你传值了使用你的值 没传使用默认值）
	   
	$arr=array(1,2,3)*/
	/*
	$arr=array(1,9,5,4,8);
	arsort($arr);
	print_r($arr);*/
	
	/*
	function demo($a=10,$b=20,$c=30){
		echo $a." ".$b." ".$c;
	}
	
	demo(1,2);*/
	/*
	5:array_unshift int array_unshift ( array &$array , mixed $var [, mixed $... ] )
	带有....的参数函数 表示可以传递任意多的参数*/
	/*
	function demo(){
		//计算出所有传递实参之和;
		/*
		$args=func_get_args();
		$sum=0;
		
		for($i=0;$i<count($args);$i++){
			$sum+=$args[$i];
		}
		$sum=0;
		for($i=0;$i<func_num_args();$i++){
			$args=func_get_args();
			$sum+=$args[$i];
			//print_r(func_get_args($i))."<br />";
		}
		
		return $sum;
		
		
		echo "<pre>";
		print_r($args);
		echo "</pre>";
	}
	
	echo demo(1,2,3,4,5,6,7,8,9); */
	
	//6:array_filter  array array_filter ( array $input [, callback $callback ] )
	//callback  传递一个回调函数 函数名字
	/*
	function demo($x,$y){
		return $x*$y;
	}
	
	function test($x,$y){
		return $x*$x+$y*$y;
	}
	
	function sum($a,$b,$fun){
		return $a+$b+$fun($a,$b);
	}
	
	//var aa=function(){}
	
	echo sum(2,3,demo);  //18
	echo sum(2,3,test);  //40
	*/
	/*
	$.post(url,data,function(res){
		处理函数体;
	},text);*/
	
	/*
	$a=array(1,2,-3,4,-5,6,-7,-8,9);
	print_r(array_filter($a,demo1));
	
	function demo1($n){
		if($n>=0){
			return true;
		}else{
			return false;
		}
	}*/
	
	//内部函数 递归函数 重用函数 
	
?>










