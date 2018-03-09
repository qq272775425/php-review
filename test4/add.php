<?php
	//insert into 表名(字段名,字段名...) values(数值1,数值2....)
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
			//echo "插入数据成功";
			echo "<script>location='index.php'</script>";
		}else{
			//echo "插入数据失败";
			echo "<script>location='add.php'</script>";
		}
	}
	

?>

<form action="add.php" method="post">
	标题:<input type="text" name="title"><br />
	内容:<textarea name="con" rows="10" cols="20"></textarea><br />
	<input type="submit" name="sub" value="发表">
</form>