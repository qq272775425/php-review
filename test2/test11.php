<?php
	//var_dump($_POST);
	// $arr=array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
	// echo json_encode($arr); //
	function table($rows,$cols){
		echo "<table border='1' width=800 align=center>";
		echo "<caption><h1>±íÃû</h1></caption>";
		for($i=0;$i<$rows;$i++){
			if($i%2==0){
				$color="red";
			}else{
				$color="yellow";
			}
			echo "<tr bgcolor='".$color."'>";
				for($j=0;$j<$cols;$j++){
					echo "<td>".$i."</td>";
				}
			
			echo "</tr>";
		}
	
		echo "</table>";
		}
	
		table(2,3);
	
?>