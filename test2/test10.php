<html>
	<head>
		<title>��ȭ��Ϸ</title>
		<script>
			function mychange(obj){
				//alert("�任");
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
			���ȭ
			<select name="you" onclick="mychange(this);">
				<option value="2">ȭͷ</option>
				<option value="1">����</option>
				<option value="0">��</option>
			</select>
			<img src="cq.jpg" id="myimg">
			<input type="submit" name="sub">
		</form>
		
	</body>
</html>

<?php
	//��ȭ��Ϸ
	$cq=$_POST["you"];
	//echo $cq;
	switch($cq){
		case "0":
			echo "�����ǲ�";
			break;
		case "1":
			echo "�����Ǽ���";
			break;
		case "2":
			echo "������ȭͷ";
			break;
	}
	echo "<br />";
	$dn=rand(0,2);
	if($dn>$cq){
		echo "���Ի�ʤ";
	}else if($dn<$cq){
		echo "���ʤ";
	}else{
		echo "ƽ��";
	}
	

?>