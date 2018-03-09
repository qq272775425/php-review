<?php
	for($i=1;$i<=9;$i++){
		//echo $i;
		for($j=1;$j<=$i;$j++){
			if($j%3==0){
				//continue;
				break 2;
			}
			echo " $i * $j = ".($i*$j);
		}
		echo "<br />";
	}
	
	echo "<br />";

?>