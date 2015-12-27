
<meta charset='utf-8'>
<?php
	session_start();
	include 'conn.php';
	$act=$_GET['act'];
	switch($act){
		
		case 'addUser':
			$name=$_POST['name'];
			$website=$_POST['website'];
			$sql = "INSERT INTO root (name, website) VALUES('{$name}', '{$website}')";
			$res=$dbh->query($sql);
				$url="http://localhost/php/exam.php?id=#";
				echo "<script>alert('添加成功');location.href='$url';</script>";
		break;
		case 'delUser':
			$name=$_GET['name'];
			$sql="DELETE FROM root WHERE name="."'{$name}'";
			$res=$dbh->query($sql);
				$url="http://localhost/php/exam.php?id=#";
				echo "<script>alert('删除成功');location.href='$url';</script>";
		break;
		case 'update':
			$in=$_SESSION['name'];
			$name=$_POST['name'];
			$website=$_POST['website'];
			$sql="UPDATE root SET name='{$name}',website='{$website}' WHERE name="."'{$in}'";
			$res=$dbh->query($sql);
				$url="http://localhost/php/exam.php?id=#";
				echo "<script>alert('更新成功');location.href='$url';</script>";
		break;
			

	}
?>