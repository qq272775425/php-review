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
			echo "<script>alert('�������벻ƥ��')</script>";
			echo "<script>location='reg.php'</script>";
		}
	}

?>


<form action="reg.php" method="post">
	�û���:<input type="text" name="name"><br />
	����:<input type="password" name="pass"><br />
	�ظ�����:<input type="password" name="bass"><br />
	<input type="submit" name="sub" value="ע��">
</form>