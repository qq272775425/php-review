<?php
	function filter($str){
		$message="";
		for($i=0;$i<strlen($str);$i++){
			if($str[$i]=='%'){
				$message="���ֲ������ַ�";
				return 0;
			}
		}
		
		return $str;
	}


	if(isset($_POST['sub'])){
		$address=$_POST['address'];
		//echo $address;
		$arr=explode("/", $address);
		//echo $arr[1];
		$arr1=explode('#',$arr[1]);
		
		//print_r($arr1);
		//die();
		//var_dump($arr1[1]);
		$route=$arr1[0];
		$input=$arr1[1];
		
		//echo $input;
		//die();
		
		$output=filter($input);
		if($output){
			switch($route){
				case 's':
					$a="www.baidu.com/index.php?".$input;
					echo $a;
					break;
				default :
					echo "û��ƥ����";
					break;
			}
		}else{
			echo "����Ƿ�";
		}
		
		//��$input�����������
		
		
		
		//echo $route;
		//$_SERVER
		
		//www.baidu.com/s#wd=javascript
	}

?>

<form action="test.php" method="post">
	��ַ:<input type="text" name="address">
	<input type="submit" name="sub" value="�ύ">
</form>