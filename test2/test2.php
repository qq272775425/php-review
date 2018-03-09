<?php
	//使用表格来输出九九乘法表
	echo "<h2>使用for循环表格输出九九乘法表</h2>";
	
	echo "<p>===============第一种九九乘法表====================</p>";
	echo "<table border='1' width=800 >";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo " $i * $j = ".($i*$j);
				echo "</td>";
			}
		
		echo "</tr>";
		//echo "<br />";
	}
	echo "</table>";
	
	echo "<p>===============第二种九九乘法表====================</p>";
	echo "<table border='1' width=800 >";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo " $i * $j = ".($i*$j);
				echo "</td>";
			}
		
		echo "</tr>";
		//echo "<br />";
	}
	echo "</table>";
	
	echo "<p>===============第三种九九乘法表====================</p>";
	echo "<table border='1' width=800 >";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
			for($k=0;$k<9-$i;$k++){
				echo "<td>&nbsp;</td>";
			}
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo " $i * $j = ".($i*$j);
				echo "</td>";
			}
		
		echo "</tr>";
		//echo "<br />";
	}
	echo "</table>";
	
	echo "<p>===============第四种九九乘法表====================</p>";
	echo "<table border='1' width=800 >";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
			for($k=0;$k<9-$i;$k++){
				echo "<td>&nbsp;</td>";
			}
			for($j=1;$j<=$i;$j++){
				echo "<td>";
				echo " $i * $j = ".($i*$j);
				echo "</td>";
			}
		
		echo "</tr>";
		//echo "<br />";
	}
?>






