<?php
	//ϵͳ�������ܽ���
	/*
	1:copy    bool copy ( string $source , string $dest )
	
	2:chown   bool chown ( string $filename , mixed $user )
	  mixed ()  int float bool string array object null resource
	3:arsort  bool arsort ( array &$array [, int $sort_flags ] )
	����&�����ĺ��� ��ʾ�������ø�ֵ ����������ܴ���ֵ ֻ�ܴ������� 
	4:  bool arsort ( array &$array [, int $sort_flags ] )
	 * ��ʾ�������[]����Ĳ����ǿ�ѡ������㴫ֵ��ʹ�����ֵ û��ʹ��Ĭ��ֵ��
	   
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
	����....�Ĳ������� ��ʾ���Դ��������Ĳ���*/
	/*
	function demo(){
		//��������д���ʵ��֮��;
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
	//callback  ����һ���ص����� ��������
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
		��������;
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
	
	//�ڲ����� �ݹ麯�� ���ú��� 
	
?>










