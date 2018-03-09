<html>
	<head>
		<title>猜拳游戏</title>
		<script>
			function mychange(obj){
				//alert("变换");
				var val=obj.value;
				//alert(val);
				var myimag=document.getElementById("myimg");
				if(val=="2"){
					myimag.src="qt.jpg";
				}else if(val=="1"){
					myimag.src="jz.jpg";
				}else if(val=="0"){
					myimag.src="b.jpg";
				}
			}
		</script>
	</head>
	<body>
		<form action="test10.php" method="post">
			你出拳
			<select name="you" onclick="mychange(this);">
				<option value="2">拳头</option>
				<option value="1">剪子</option>
				<option value="0">布</option>
			</select>
			<img src="cq.jpg" id="myimg">
			<input type="submit" name="sub">
		</form>
		
	</body>
</html>

<?php
	//猜拳游戏
	$cq=$_POST["you"];
	//echo $cq;
	switch($cq){
		case "0":
			echo "出的是布";
			break;
		case "1":
			echo "出的是剪子";
			break;
		case "2":
			echo "出的是拳头";
			break;
	}
	echo "<br />";
	$dn=rand(0,2);
	if($dn>$cq){
		echo "电脑获胜";
	}else if($dn<$cq){
		echo "你获胜";
	}else{
		echo "平局";
	}
	

?>