<style>
body{
background:#ccc;
}
</style>
<form action="test5.php" method="post">
<b>���������ѯ�ɼ�</b><br><br>
����:<input type="text" value="" name="result"><br><br>
<input type="submit" value="�ύ��ѯ">&nbsp;&nbsp;
<input type="reset" value="���÷���">
</form>
<?php
if(!empty($_POST['result'])){
$result = $_POST['result'];
if($result >= 80 && $result <= 100){
echo"<script>alert('���ĳɼ�Ϊ����!')</script>";
}elseif($result >= 60 && $result < 80 ){
echo"<script>alert('���ĳɼ�Ϊ�ϸ�!')</script>";
}else{
echo"<script>alert('���ĳɼ����ϸ�!')</script>";
}
}
?>