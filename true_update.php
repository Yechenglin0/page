<meta charset="UTF-8">
<?php
	include 'conn.php';
	$chosen=$_POST['chosen'];
	$new_des=$_POST['new_des'];
	$new_web=$_POST['new_web'];

	$sql="UPDATE web_list SET descripsion ="."'".$new_des."'".",website ="."'".$new_web."'"." WHERE descripsion="."'".$chosen."'";
	echo $sql; 
	$dbh->query($sql);
	echo"<script>alert('网址更新成功！！');location.href='http://localhost/web.php'</script>";
?>