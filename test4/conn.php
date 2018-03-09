<?php
	@mysql_connect("localhost","root","") or die("数据库连接错误");
	@mysql_select_db("xiaop") or die("选择数据库错误");
	@mysql_set_charset("GBK");
	
	//mysqli_connect()
?>