<?php

	
	
	//���100��10�еı��
	//ÿʮ����һ����
	//���л�ɫ
	//�ƶ���굽���� ����Ϊ��ɫ
	echo '<table border="1" width="800" align="center">';
	echo '<caption><h1>ʹ��while������</h1></caption>';
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