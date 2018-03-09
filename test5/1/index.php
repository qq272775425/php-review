<?php
	include "conn.php";
	if(isset($_COOKIE['name'])){
		$name=$_COOKIE['name'];
		
		echo "<span>".$name." 已登录"."</span>";
		
		
	}else{
		echo "<script>alert('没有登录请登录')</script>";
		echo "<script>location='login.php'</script>";
	}

?>

<span><a href="unlogin.php?name=<?php echo $name?>">注销</a></span>

<a href="index.php">跳转主页</a>
<a href="add.php">添加文章</a>
<form action="index.php" method="GET">
<input type="text" name="search">
<input type="submit" name="sub" value="搜索">
</form>

<?php
	
	if(isset($_GET['sub'])){
		$se=$_GET['search'];
		$w="title like '%".$se."%'";
	}else{
		$w=1;
	}
	
	
	//select * from 表名 
	$sql="select * from blog where $w order by id desc";
	
	//echo $sql;
	//die();
	
	$query=mysql_query($sql);
	//$result=mysql_fetch_array();
	
	//var_dump($result);
	while($rs=mysql_fetch_array($query)){
?>

<h1><a href="view.php?id=<?php echo $rs['id']?>">标题:<?php echo $rs['title']?> </a>|<a href='edit.php?id=<?php echo $rs['id']?>'>编辑</a> |<a href='del.php?id=<?php echo $rs['id']?>'>删除</a></h1>
<li><?php echo $rs['time']?></li>
<p><?php echo $rs['content']?></p>
<hr />

<?php }?>




