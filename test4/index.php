<?php
	include "conn.php";
	
	//select * from ���� 
	$sql="select * from blog order by id desc";
	$query=mysql_query($sql);
	//$result=mysql_fetch_array($query);
	
	//var_dump($result);
	while($rs=mysql_fetch_array($query)){
?>

<h1>����:<?php echo $rs['title']?> |<a href='edit.php?id=<?php echo $rs['id']?>'>�༭</a> |<a href='del.php?id=<?php echo $rs['id']?>'>ɾ��</a></h1>
<li><?php echo $rs['time']?></li>
<p><?php echo $rs['content']?></p>
<hr />

<?php }?>




