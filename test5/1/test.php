<?php
	function filter($str){
		$message="";
		for($i=0;$i<strlen($str);$i++){
			if($str[$i]=='%'){
				$message="出现不允许字符";
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
					echo "没有匹配上";
					break;
			}
		}else{
			echo "输入非法";
		}
		
		//对$input进行输入过滤
		
		
		
		//echo $route;
		//$_SERVER
		
		//www.baidu.com/s#wd=javascript
	}

?>

<form action="test.php" method="post">
	地址:<input type="text" name="address">
	<input type="submit" name="sub" value="提交">
</form>