<html>
	<head>
		<title>计算器程序</title>
	</head>
	<?php
		$num1=true;
		$num2=true;
		
		$message="";
		
		$numa=true;
		$numb=true;
		
		
		if(isset($_GET["sub"])){
			
			if($_GET["num1"]==""){
				$num1=false;
				$message="第一个数不能为空";
			}
			if($_GET["num2"]==""){
				$num2=false;
				$message="第二个数不能为空";
			}
			
			
			
			if(!is_numeric($_GET["num1"])){
				$numa=false;
				$message="第一个不是一个数字";
			}
			if(!is_numeric($_GET["num2"])){
				$numb=false;
				$message="第二个不是一个数字";
			}
		//print_r($_GET);
			
			if($num1 && $num2 && $numa && $numb){
				$sum=0;
				switch($_GET["ysf"]){
					case "+":
						$sum=$_GET["num1"]+$_GET["num2"];
						break;
					case "-":
						$sum=$_GET["num1"]-$_GET["num2"];
						break;
					case "×":
						$sum=$_GET["num1"]*$_GET["num2"];
						break;
					case "/":
						$sum=$_GET["num1"]/$_GET["num2"];
						break;
					case "%":
						$sum=$_GET["num1"] % $_GET["num2"];
						break;
				}
			}
			
		}
		
		
	?>
	<body>
		<table align="center" border="1" width="500">
			<caption><h1>计算器</h1></caption>
			<form action="test3.php">
				<tr>
					<td>
						<input type="text" size="5"  name="num1" value="<?php if(isset($_GET["num1"])) echo $_GET["num1"]?>"/>
					</td>
					<td>
						<select name="ysf" id="">
							<option value="+" <?php if(isset($_GET["ysf"])){if($_GET["ysf"]=="+") echo "selected";} ?>>+</option>
							<option value="-" <?php if(isset($_GET["ysf"])){if($_GET["ysf"]=="-") echo "selected";} ?>>-</option>
							<option value="×" <?php if(isset($_GET["ysf"])){if($_GET["ysf"]=="×") echo "selected";} ?>>×</option>
							<option value="/" <?php if(isset($_GET["ysf"])){if($_GET["ysf"]=="/") echo "selected";} ?>>/</option>
							<option value="%" <?php if(isset($_GET["ysf"])){if($_GET["ysf"]=="%") echo "selected";} ?>>%</option>
						</select>
					</td>
					<td>
						<input type="text" size="5" name="num2" value="<?php if(isset($_GET["num2"])) echo $_GET["num2"]?>"/>
					</td>
					<td>
						<input type="submit" value="计算" name="sub" />
					</td>
				</tr>
				
				<?php
					if(isset($_GET["sub"])){
						echo '<tr><td colspan=5>';
						if($num1 && $num2 && $numa && $numb){
							echo "结果为:".$_GET["num1"]." ".$_GET["ysf"]." ".$_GET["num2"]." "."="." ".$sum;
						}else{
							echo $message;
						}
						
						echo '</td></tr>';
					}
				?>
			</form>
			
		</table>
	</body>
</html>