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
			//cookie����
			setcookie('id',$rs['uid']);
			setcookie('name',$rs['name']);
			echo "<script>location='index.php'</script>";
			//��ת��ҳ
		}else{
			echo "��¼ʧ��";
			echo "<script>location='login.php'</script>";
		}
	}

?>


<form action="login.php" method="post">
	�û���:<input type="text" name="name"><br />
	����:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="��¼">
</form>