<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		//先给hits加1 再显示这个页面
		$sql="update blog set hits=hits+1 where id='$id'";
		//echo $sql;
		$query=mysql_query($sql);
		if($query){
			$sql="select * from blog where id='$id'";
			$query=mysql_query($sql);
			$rs=mysql_fetch_array($query);
		}else{
			echo "展示页面失败";
		}
		
	}

?>

<h1>标题<?php echo $rs['title']?></h1>
<li><?php echo $rs['time']?></li>
<p>点击率:<?php echo $rs['hits']?></p>
<p><?php echo $rs['content']?></p>

<a href="index.php">跳回主页</a>


<form action="view.php?id=<?php echo $rs['id']?>" method="post">
	<textarea name="pl" rows="10" cols="20"></textarea><br />
	<input type="hidden" name="bid" value=<?php echo $rs['id']?>>
	<input type="submit" name="sub" value="评论">
</form>

<?php
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
			echo "<script>location=view.php?id=".$rs['id']."</script>";
		}else{
			echo "评论失败";
		}
	}
?>

<?php 
	//if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql="select * from blog,pinglun where blog.id=pinglun.bid and blog.id='$id' order by pinglun.pid desc";
		$query=mysql_query($sql);
		while($rs=mysql_fetch_array($query)){
	//}
?>
<p><?php echo $rs['pcon']?></p>
<p><?php echo $rs['ptime']?></p>
<?php
		}
?>











