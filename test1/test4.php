<?php
	echo "<a href='test4.php?action=add'>ִ�����Ӳ���</a>";
	echo "<br />";
	echo "<a href='test4.php?action=del'>ִ��ɾ������</a>";
	echo "<br />";
	echo "<a href='test4.php?action=search'>ִ�в��Ҳ���</a>";
	echo "<br />";
	echo "<a href='test4.php?action=update'>ִ�и��²���</a>";
	
	$action=$_GET['action'];
	// var_dump($action);
	// die();
	switch($action){
		case "add":
			echo "<script>alert('����ʵ�����ӹ���')</script>";
			break;
		case "del":
			echo "<script>alert('����ʵ��ɾ������')</script>";
			break;
		case "search":
			echo "<script>alert('����ʵ�ֲ��ҹ���')</script>";
			break;
		case "update":
			echo "<script>alert('����ʵ�ָ��¹���')</script>";
			break;
	}
?>


