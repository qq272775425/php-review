<?php
	if(isset($_GET['name'])){
		setcookie('name','');
		setcookie('id','');
		echo "<script>location='index.php'</script>";
	}
	
	/*
	
	if(isset($_POST['sub'])){
		$hid=$_POST['bid'];
		//echo $hid;
		//die();
		$pl=$_POST['pl'];
		
		$sql="insert into pinglun(pid,bid,pcon,ptime) values(null,'$hid','$pl',now())";
		//echo $sql;
		//die();
		$query=mysql_query($sql);
		if($query){
			//读当前这个文章的评论
			//echo "123";
			$sql="select * from blog,pinglun where blog.id=pinglun.bid and blog.id='$hid'";
			$query=mysql_query($sql);
			$rss=array();
			while($rs=mysql_fetch_array($query)){
				$rss[]=$rs;
				//var_dump($rss);
				
			}
		}else{
			echo "评论失败";
		}
	}*/
	
	

	

?>