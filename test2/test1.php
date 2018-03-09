<?php
	//打印四种样子九九乘法表 使用表格 (使用for while do-while三种方法)
	echo "<p>==========使用for循环打印的99乘法表==============</p>";
	for($i=1;$i<=9;$i++){
		//echo $i;
		for($j=1;$j<=$i;$j++){
			echo " $i * $j = ".($i*$j);
		}
		echo "<br />";
	}
	
	echo "<br />";
	
	echo "<p>==========使用for循环打印的99乘法表==============</p>";
	for($i=9;$i>=1;$i--){
		//echo $i;
		for($j=1;$j<=$i;$j++){
			echo " $i * $j = ".($i*$j);
		}
		echo "<br />";
	}
	
	echo "<br />";
	
	echo "<p>==========使用while循环打印的99乘法表==============</p>";
	
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
	
	echo "<p>==========使用do-while循环打印的99乘法表==============</p>";
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











