<?php
	//ʹ�ñ��������žų˷���
	echo "<h2>ʹ��forѭ���������žų˷���</h2>";
	
	echo "<p>===============��һ�־žų˷���====================</p>";
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
	
	echo "<p>===============�ڶ��־žų˷���====================</p>";
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
	
	echo "<p>===============�����־žų˷���====================</p>";
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
	
	echo "<p>===============�����־žų˷���====================</p>";
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






