<?php 
	include 'conn.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>更新网页</title>
</head>
<body>
	<form action="true_update.php" method="post">
	<select name="chosen">
		<?php foreach ($rows as $row) :?>
		<option><?php echo $row['descripsion']; ?></option>
		<?php endforeach ?>
	</select><br>
	<input type="text" name="new_des" placeholder="请新网站名称"><br>
	<input type="text" name="new_web" placeholder="请输入新网站地址">
	<input type="submit" value="确认更新">
</form>
</body>
</html>