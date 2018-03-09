<?php
	/*
	Class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			
		}
	}*/
	
	/*
	grunt pulp webpack yoman yo 
	nodejs npm*/
	
	//var_dump();
	//die();
	
	//assert();
	
	
	/*
	function aa(){
		
	}  //无参函数
	
	function bb($a,$b){
		//有参函数
	}
	
	bb(1,2)  //1，2  实参  $a,$b 形参   形参的类型等于实参的类型
	bb(2,3,4,5,6,7); //argument.length
	bb(1);  
	
	function cc($a,$b=9){
		
	}
	
	cc(1);
	cc(1,23);
	
	1：形参的个数有没有要求？
	function aa(int $a,[float $b.......])
	2：实参的个数可不可以超过形参的个数？
	3：传递的实参可不可以不完全等于形参的个数（少于或多于可不可以）
	----PHP系统函数的时候 介绍六种方法
	
	有return的function叫函数，没return的function叫过程
	
	//CI  Model return $result->row()  ->result()
	
	CI  Controller调用Model下的方法去操作数据库
	
	include Model.php =>  $this->load->model(Model.php);
						Controller.php->load->Model.php
	$aa=new aa();     =>  $this->Model->aa();
	$aa->aa();
	
	
	
	
	
	function dd(){
		echo 123;
	}
	
	function ee(){
		echo 456;   //函数体
		return 0;
	}
	
	*/
	
	/*
	var aa=function(){b=13;};
	function aa(){
		b=14;
	}*/
	
	/*
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		
		//函数调用
		$result=get_name_by_pass($name,$pass);
		if($result){
			echo "登录成功";
		}else{
			echo "登录不成功";
		}
	}
	
	function get_name_by_pass($name,$pass){
		//T-SQL数据库语句
		$user='admin';
		$pss="12345";
		if($user==$name && $pss==$pass){
			return true;
		}else{
			return false;
		}
	}
	
	5行6列  3行4列 7行8列
	*/
	/*
	//1:函数必须调用才能执行（1）table(4,5) (2) include 外部文件
	                   (3)$aa=new aa()  $aa->aa();
					   1.php----A机器 thread 1
					   2.php----A机器 thread 2   LPC
					   (4)远程调用 1.php --A机器 thread x
					            2.java --B机器 thread y  RPC远程调用
					   ZeroMQ   http json  socket protobuf
					   XMLRPC
					   同一台机器上
	   2：函数命名 使用驼峰命名法 aaaBbbCcc
	   3: 函数在声明时不能重名
	   4：实参和形参
	1.php function aa(){}  $a=15;
	2.php include 1.php aa(); $a=25;
	
	include <stdio.h>
	printf()*/
	
	function table($row,$col){
		echo "<table border='1' align='center' width='800'>";
		echo "<caption><h1>隔行换色</h1></caption>";
		$color="";
		for($i=1;$i<=$row;$i++){
			if($i % 2==0){
				$color='red';
			}else{
				$color='yellow';
			}
			echo "<tr bgColor=".$color.">";
			for($j=1;$j<=$col;$j++){
				echo "<td>";
				echo $j;
				
				echo "</td>";
			}
			
			echo "</tr>";
		}
		echo "</table>";
	}
	
	table(5,6);
	table(3,4);
	table(7,8);

?>


