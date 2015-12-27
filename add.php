<meta charset="UTF-8">
<?php
	include 'conn.php';
	$des = $_POST['des'];
	$web = $_POST['web'];
	if (!$des) {
		 die("<script>alert('名称不能为空！！');history.go(-1);</script>");
	}	
	if (!$web) {
		 die("<script>alert('地址不能为空！！');history.go(-1);</script>");
	}
	$dbh-> query("INSERT INTO web_list 
    VALUES('{$web}','{$des}')");
    //使用插入语句
    if ($dbh) {
     	echo"<script>alert('网址添加成功！！');location.href='http://localhost/web.php'</script>";
     }
?>