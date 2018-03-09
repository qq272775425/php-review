<style>
body{
background:#ccc;
}
</style>
<form action="test5.php" method="post">
<b>输入分数查询成绩</b><br><br>
分数:<input type="text" value="" name="result"><br><br>
<input type="submit" value="提交查询">&nbsp;&nbsp;
<input type="reset" value="重置分数">
</form>
<?php
if(!empty($_POST['result'])){
$result = $_POST['result'];
if($result >= 80 && $result <= 100){
echo"<script>alert('您的成绩为优秀!')</script>";
}elseif($result >= 60 && $result < 80 ){
echo"<script>alert('您的成绩为合格!')</script>";
}else{
echo"<script>alert('您的成绩不合格!')</script>";
}
}
?>