<?php
	$a="12345";
	$b=&$a;
	//unset($b);
	//echo $a;
	$b="abc";
	
	echo $b;
	echo "<br />";
	echo $a;
	echo "<br />";
	
	unset($a);
	echo $a;
	echo "<br />";
	echo $b;
	
	echo "<br />";
	echo 8%(-3)."<br />";
	echo ((-8)%3)."<br />";
	
	// $str=`netstat -an`;
	// echo $str;
?>