<?php
	echo "<a href='test4.php?action=add'>执行增加操作</a>";
	echo "<br />";
	echo "<a href='test4.php?action=del'>执行删除操作</a>";
	echo "<br />";
	echo "<a href='test4.php?action=search'>执行查找操作</a>";
	echo "<br />";
	echo "<a href='test4.php?action=update'>执行更新操作</a>";
	
	$action=$_GET['action'];
	// var_dump($action);
	// die();
	switch($action){
		case "add":
			echo "<script>alert('现在实现增加功能')</script>";
			break;
		case "del":
			echo "<script>alert('现在实现删除功能')</script>";
			break;
		case "search":
			echo "<script>alert('现在实现查找功能')</script>";
			break;
		case "update":
			echo "<script>alert('现在实现更新功能')</script>";
			break;
	}
?>


