<?php
	//打印实心金字塔
	$n=5;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo "&nbsp;";
		}
		
		for($j=1;$j<=2*$i-1;$j++){
			echo "*";
		}
		echo "<br />";
		
	}
	
	echo "<br />";
	
	//打印空心金字塔
	$n=5;
	for($i=1;$i<=$n;$i++){
		for($k=1;$k<=$n-$i;$k++){
			echo "&nbsp;";
		}
		
		for($j=1;$j<=2*$i-1;$j++){
			if($i==1 || $i==$n){
				echo "*";
			}else{
				if($j==1 || $j==2*$i-1){
					echo "*";
				}else{
					echo "&nbsp;";
				}
			}
			
		}
		echo "<br />";
		
	}
	
	echo "<br />";
?>