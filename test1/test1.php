<?php
	//加粗输出
	// $str="<b>我爱你中国</b>";
	// echo $str;
	// echo "<br />";
	
	//echo "<script>alert('asd')</script>";
	//动态输出JS脚本
	/*
	$str_1=<<<sno
	jianshuo
	    swordshine
	   select *  from t_user
	   echo "<table></table>"
sno;
	echo $str_1;
	
	$str_js=<<<start
	<script type='text/javascript'>
		alert("aaa");
	</script>
start;
	echo $str_js;
	*/
	//输出隔行换色的列表
	$color="";
	echo "变色列表";
	echo "<ul>";
	for($i=0;$i<5;$i++){
		if($i%2==0){
			$color="red";
		}else{
			$color="yellow";
		}
		echo "<li style='background:".$color.";width=200'>第".$i."行内容</li>";
	}	
	
	echo "</ul>";
	
?>
















