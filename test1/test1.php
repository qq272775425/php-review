<?php
	//�Ӵ����
	// $str="<b>�Ұ����й�</b>";
	// echo $str;
	// echo "<br />";
	
	//echo "<script>alert('asd')</script>";
	//��̬���JS�ű�
	/*
	$str_1=<<<sno
	jianshuo
	    swordshine
	   select *  from t_user
	   echo "<table></table>"
sno;
	echo $str_1;
	
	$str_js=<<<start
	<script type='text/javascript'>
		alert("aaa");
	</script>
start;
	echo $str_js;
	*/
	//������л�ɫ���б�
	$color="";
	echo "��ɫ�б�";
	echo "<ul>";
	for($i=0;$i<5;$i++){
		if($i%2==0){
			$color="red";
		}else{
			$color="yellow";
		}
		echo "<li style='background:".$color.";width=200'>��".$i."������</li>";
	}	
	
	echo "</ul>";
	
?>
















