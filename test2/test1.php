<?php
	//��ӡ�������Ӿžų˷��� ʹ�ñ�� (ʹ��for while do-while���ַ���)
	echo "<p>==========ʹ��forѭ����ӡ��99�˷���==============</p>";
	for($i=1;$i<=9;$i++){
		//echo $i;
		for($j=1;$j<=$i;$j++){
			echo " $i * $j = ".($i*$j);
		}
		echo "<br />";
	}
	
	echo "<br />";
	
	echo "<p>==========ʹ��forѭ����ӡ��99�˷���==============</p>";
	for($i=9;$i>=1;$i--){
		//echo $i;
		for($j=1;$j<=$i;$j++){
			echo " $i * $j = ".($i*$j);
		}
		echo "<br />";
	}
	
	echo "<br />";
	
	echo "<p>==========ʹ��whileѭ����ӡ��99�˷���==============</p>";
	
	$i=1;
	while($i<=9){
		$j=1;
		while($j<=$i){
			echo " $i * $j = ".($i*$j);
			$j++;
		}
		$i++;
		echo "<br />";
	}
	
	echo "<br />";
	
	echo "<p>==========ʹ��do-whileѭ����ӡ��99�˷���==============</p>";
	$i=1;
	do{
		$j=1;
		while($j<=$i){
			echo " $i * $j = ".($i*$j);
			$j++;
		}
		$i++;
		echo "<br />";
	}while($i<=9)
?>











