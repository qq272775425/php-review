<?php
	//简单用户登录验证 使用POST方法
	
	// $username=$_POST['uname'];
	// $password=$_POST['password'];
// 	
	// if(issset($username) && isset($password))
	
	
	if(isset($_POST['sub'])){
		//echo "aaa";
		if($_POST['uname']=='admin' && $_POST['upwd']='12345'){
			echo "登录成功";
		}else{
			echo "登录不成功";
		}
	}

?>

<form action="test2.php" method="post">
	用户登录
	<input type="text" name="uname" />
	<input type="password" name="upwd" />
	<input type="submit" name="sub" value="提交" />
</form>


