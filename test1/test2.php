<?php
	//���û���¼��֤ ʹ��POST����
	
	// $username=$_POST['uname'];
	// $password=$_POST['password'];
// 	
	// if(issset($username) && isset($password))
	
	
	if(isset($_POST['sub'])){
		//echo "aaa";
		if($_POST['uname']=='admin' && $_POST['upwd']='12345'){
			echo "��¼�ɹ�";
		}else{
			echo "��¼���ɹ�";
		}
	}

?>

<form action="test2.php" method="post">
	�û���¼
	<input type="text" name="uname" />
	<input type="password" name="upwd" />
	<input type="submit" name="sub" value="�ύ" />
</form>


