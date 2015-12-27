<?php
	session_start();
 	include '../php/conn.php';
 	$res=$dbh->query('select * from root');
    $res->setFetchMode(PDO::FETCH_ASSOC);
     while ($row=$res->fetch()) {
         $rows[]=$row;
         }
       // print_r($rows);
       // echo $row['name'];
 ?>
<meta charset="utf-8">
<html>
<head>
	<title></title>
</head>
<body>

	<h3>网页更新</h3>
	<form action="action.php?act=update" method="post">
		新网名:<input type="text" name="name" required="required">
		新网址:<input type="text" name="website" required="required">
		提交：<input type="submit">
		<?php $a=$_GET['name']; $_SESSION['name']=$a;?>

	</form>



</body>
</html>