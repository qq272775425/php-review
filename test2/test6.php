<style type="text/css">
body{
background:#ccc;
}
</style>
<form action="test6.php" method="post">
<b>�����������ɱ��</b><br><br>
�����У�<input type="text" name="cols"><br><br>
�����У�<input type="text" name="rows"><br><br>
<input type="submit" value="���ɱ��">&nbsp;
<input type="reset" value="��������">
</form>
<?php
if(!empty($_POST['cols'])){
echo"<center><b>�û���̬������.��".$_POST['cols'].",��".$_POST['rows']."</b></center>";
$color="";
echo "<table border='1' width='200px' height='200px' align='center' cellspacing='0'>";
   for($i = 0 ; $i < $_POST['cols'] ; $i++){
	   if($i%2==0){
	   $color="red";
	   }else{
	   $color="blue";
	   }
      echo "<tr bgcolor='".$color."'>";  
	  for($j = 0 ;$j < $_POST['rows'] ; $j++){
	     echo "<td>".$j."</td>";
	  }
	  echo "</tr>";
   }
echo "</table>";
}
?>