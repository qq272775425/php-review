<?php

	
	
	//输出100行10列的表格
	//每十个数一换行
	//隔行换色
	//移动鼠标到哪行 哪行为红色
	echo '<table border="1" width="800" align="center">';
	echo '<caption><h1>使用while输出表格</h1></caption>';
	$i=0;
	while($i<1000){
		if($i%10==0){
			if($i%20==0){
				$bg="#ffffff";
			}else{
				$bg="#cccccc";
			}
			echo '<tr onmouseover="lrow(this)" onmouseout="drow(this)" bgColor="'.$bg.'">';
			
		}
		
		echo '<td>'.$i.'</td>';
		$i++;
		if($i%10==0){
			echo '</tr>';
		}
		
		
		
	}
	
	echo '</table>';
	 
?>

<script>
	var ys=null;
	function lrow(obj){
		ys=obj.bgColor;
		obj.bgColor='red';
	}
	
	function drow(obj){
		obj.bgColor=ys;
	}

</script>