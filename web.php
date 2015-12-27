<?php
	include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>考核</title>
	<style type="text/css">
		#title{
			text-align: center;
		}
		.div{
			width: 100px;
			height: 30px;
			margin-left: 50px;
			margin-top: 10px;
			background-color: #000000;
			line-height: 30px;
			color: blue;
			text-align: center;
			float: left;
		}
		#delete{
			display: inline;
		}
	</style>
</head>
<body>


<form action="delete.php" id="delete" method="post">
	选择要删除的网页
	<select name="chosen">
		<?php foreach ($rows as $row) :?>
		<option><?php echo $row['descripsion']; ?></option>
		<?php endforeach ?>
	</select>
	<input type="submit" value="确认删除">
</form>

<h1 id="title">网址大全</h1>
	<?php foreach ($rows as $row) :?>
		<div class="div">
			<a href="<?php echo $row['website']; ?>" target="_blank">
			<font color="#FFFFFF"><?php echo $row['descripsion']; ?></font>
		</div>
	<?php endforeach ?>
<div class="div"><a href="add.html"><font color="#FFFFFF">添加网页</font></a></div>
<div class="div"><a href="update.php"><font color="#FFFFFF">更新网页</font></a></div>
</body>
</html>

