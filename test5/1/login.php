<?php
	//echo "success";
	include "conn.php";
	if(isset($_POST[sub])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		
		$sql="select * from user where name='$name' and pass='$pass'";
		$query=mysql_query($sql);
		$rs=mysql_fetch_array($query);
		if($rs){
			//cookie代码
			setcookie('id',$rs['uid']);
			setcookie('name',$rs['name']);
			echo "<script>location='index.php'</script>";
			//调转主页
		}else{
			echo "登录失败";
			echo "<script>location='login.php'</script>";
		}
	}

?>


<form action="login.php" method="post">
	用户名:<input type="text" name="name"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
</form>