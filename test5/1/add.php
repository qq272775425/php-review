<?php
	//insert into ����(�ֶ���,�ֶ���...) values(��ֵ1,��ֵ2....)
	include "conn.php";
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$time=getdate();
		$tdate=array($time['year'],$time['mon'],$time['mday']);
		
		$tt=implode("-",$tdate);
		
		//var_dump($tt);
		//$sql="insert into blog(id,title,content,time) values(null,'$title','$con','$tt')";
		$sql="insert into blog(id,title,content,time) values(null,'$title','$con',now())";
		//echo $sql;
		$query=mysql_query($sql);
		if($query){
			//echo "�������ݳɹ�";
			echo "<script>location='index.php'</script>";
		}else{
			//echo "��������ʧ��";
			echo "<script>location='add.php'</script>";
		}
	}
	

?>

<form action="add.php" method="post">
	����:<input type="text" name="title"><br />
	����:<textarea name="con" rows="10" cols="20"></textarea><br />
	<input type="submit" name="sub" value="����">
</form>