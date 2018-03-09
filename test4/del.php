<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		//echo $id;
		//delete from blog where id=1
		$sql="delete from blog where id='$id'";
		$query=mysql_query($sql);
		if($query){
			echo "<script>alert('É¾³ý³É¹¦')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "É¾³ýÊ§°Ü";
		}
	}

?>