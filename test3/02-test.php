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
		
	}  //�޲κ���
	
	function bb($a,$b){
		//�вκ���
	}
	
	bb(1,2)  //1��2  ʵ��  $a,$b �β�   �βε����͵���ʵ�ε�����
	bb(2,3,4,5,6,7); //argument.length
	bb(1);  
	
	function cc($a,$b=9){
		
	}
	
	cc(1);
	cc(1,23);
	
	1���βεĸ�����û��Ҫ��
	function aa(int $a,[float $b.......])
	2��ʵ�εĸ����ɲ����Գ����βεĸ�����
	3�����ݵ�ʵ�οɲ����Բ���ȫ�����βεĸ��������ڻ���ڿɲ����ԣ�
	----PHPϵͳ������ʱ�� �������ַ���
	
	��return��function�к�����ûreturn��function�й���
	
	//CI  Model return $result->row()  ->result()
	
	CI  Controller����Model�µķ���ȥ�������ݿ�
	
	include Model.php =>  $this->load->model(Model.php);
						Controller.php->load->Model.php
	$aa=new aa();     =>  $this->Model->aa();
	$aa->aa();
	
	
	
	
	
	function dd(){
		echo 123;
	}
	
	function ee(){
		echo 456;   //������
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
		
		//��������
		$result=get_name_by_pass($name,$pass);
		if($result){
			echo "��¼�ɹ�";
		}else{
			echo "��¼���ɹ�";
		}
	}
	
	function get_name_by_pass($name,$pass){
		//T-SQL���ݿ����
		$user='admin';
		$pss="12345";
		if($user==$name && $pss==$pass){
			return true;
		}else{
			return false;
		}
	}
	
	5��6��  3��4�� 7��8��
	*/
	/*
	//1:����������ò���ִ�У�1��table(4,5) (2) include �ⲿ�ļ�
	                   (3)$aa=new aa()  $aa->aa();
					   1.php----A���� thread 1
					   2.php----A���� thread 2   LPC
					   (4)Զ�̵��� 1.php --A���� thread x
					            2.java --B���� thread y  RPCԶ�̵���
					   ZeroMQ   http json  socket protobuf
					   XMLRPC
					   ͬһ̨������
	   2���������� ʹ���շ������� aaaBbbCcc
	   3: ����������ʱ��������
	   4��ʵ�κ��β�
	1.php function aa(){}  $a=15;
	2.php include 1.php aa(); $a=25;
	
	include <stdio.h>
	printf()*/
	
	function table($row,$col){
		echo "<table border='1' align='center' width='800'>";
		echo "<caption><h1>���л�ɫ</h1></caption>";
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


