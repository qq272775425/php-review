<?php

	for($i=1;$i<1000;$i++){
		$arr=true;
		
		for($j=2;$j<$i;$j++){
			if($i % $j==0){
				$arr=false;
				break;
			}
			
			if($arr){
			echo $i;
			echo "<br />";
			}
		}
		
		
		
		
		echo $i;
		
	}
?>