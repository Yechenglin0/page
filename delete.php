<meta charset="UTF-8">
<?php
	include 'conn.php';
	$chosen=$_POST['chosen'];
	$sql="DELETE FROM web_list WHERE descripsion = "."'".$chosen."'";
	$dbh->query($sql);
	echo"<script>alert('网址删除成功！！');location.href='".$_SERVER["HTTP_REFERER"]."'</script>";
?>