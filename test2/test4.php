<table align="center" border="1">
	<tr width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
		<td bgcolor="#FFFFFF">
			<?php 
				$str=file_get_contents("test.txt");
				echo $str;
			?>			
		</td>
	</tr>
</table>

<form action="next.php" method="post" name="regsiter" id="form">
	<input type="submit" name="sub" value="同意注册"/>
</form>

<form action="" method="post" name="form" id="form">
	<a href="index.php">
		<input type="reset" name="Reset2" value="我不同意" id="Reset2"/>
	</a>
</form>
