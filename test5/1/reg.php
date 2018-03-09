<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$pass1=$_POST['bass'];
		
		//echo $pass."<br />";
		//echo $pass1."<br />";
		//die();
		
		if($pass==$pass1){
			$sql="insert into user(uid,name,pass) values(null,'$name','$pass')";
			$query=mysql_query($sql);
			//var_dump($query);
			//die();
			if($query){
				echo "<script>location='login.php'</script>";
			}else{
				echo "<script>location='reg.php'</script>";
			}
		}else{
			echo "<script>alert('输入密码不匹配')</script>";
			echo "<script>location='reg.php'</script>";
		}
	}

?>


<form action="reg.php" method="post">
	用户名:<input type="text" name="name"><br />
	密码:<input type="password" name="pass"><br />
	重复密码:<input type="password" name="bass"><br />
	<input type="submit" name="sub" value="注册">
</form>