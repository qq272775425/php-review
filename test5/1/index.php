<?php
	include "conn.php";
	if(isset($_COOKIE['name'])){
		$name=$_COOKIE['name'];
		
		echo "<span>".$name." �ѵ�¼"."</span>";
		
		
	}else{
		echo "<script>alert('û�е�¼���¼')</script>";
		echo "<script>location='login.php'</script>";
	}

?>

<span><a href="unlogin.php?name=<?php echo $name?>">ע��</a></span>

<a href="index.php">��ת��ҳ</a>
<a href="add.php">�������</a>
<form action="index.php" method="GET">
<input type="text" name="search">
<input type="submit" name="sub" value="����">
</form>

<?php
	
	if(isset($_GET['sub'])){
		$se=$_GET['search'];
		$w="title like '%".$se."%'";
	}else{
		$w=1;
	}
	
	
	//select * from ���� 
	$sql="select * from blog where $w order by id desc";
	
	//echo $sql;
	//die();
	
	$query=mysql_query($sql);
	//$result=mysql_fetch_array();
	
	//var_dump($result);
	while($rs=mysql_fetch_array($query)){
?>

<h1><a href="view.php?id=<?php echo $rs['id']?>">����:<?php echo $rs['title']?> </a>|<a href='edit.php?id=<?php echo $rs['id']?>'>�༭</a> |<a href='del.php?id=<?php echo $rs['id']?>'>ɾ��</a></h1>
<li><?php echo $rs['time']?></li>
<p><?php echo $rs['content']?></p>
<hr />

<?php }?>




