<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select * from blog where id='$id'";
		$query=mysql_query($sql);
		$rs=mysql_fetch_array($query);
	}
	
	
	if(isset($_POST['sub'])){
		$title=$_POST['title'];
		$con=$_POST['con'];
		$hid=$_POST['hid'];
		$sql="update blog set title='$title',content='$con' where id='$hid'";
		
		//echo $sql;
		
		$query=mysql_query($sql);
		if($query){
			echo "<script>alert('�޸ĳɹ�')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "�޸�ʧ��";
		}
	}
	

?>

<form action="edit.php" method="post">
	<input type="hidden" name="hid" value=<?php echo $rs['id']?>>
	����:<input type="text" name="title" value=<?php echo $rs['title']?>><br />
	����:<textarea name="con" rows="10" cols="20"><?php echo $rs['content']?></textarea><br />
	<input type="submit" name="sub" value="�޸�">
</form>