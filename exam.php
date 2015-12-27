<?php
	session_start();
 	include '../php/conn.php';
 	$res=$dbh->query('select * from root');
    $res->setFetchMode(PDO::FETCH_ASSOC);
     while ($row=$res->fetch()) {
         $rows[]=$row;
         }
          // print_r($rows);
 ?>



 <!DOCTYPE HTML>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 	<style type="text/css">
 		body{font-size: 20px;font-family: "FangSong";text-align: center;}
 		.tr{background-color: #00FFFF;color: #111;}
 		.table{width: 900px;height: 300px; text-align: center; position: absolute;left: 180px;
 			color: #FF0000; font-weight: bold;}
 		.a{color: blue;}
 		#a{color: #6600cc;}
 	</style>
 </head>
 <body>
 	<h1>网址大全</h1>
 	<h2><a href="add.php">我来添加</a></h2>
 	<table border='1' cellpadding='0' bgcolor='#ABCDEF' class="table">
		<tr class="tr">
 			<td>网名</td>
			<td>网址</td>
			<td>工作</td>
 		</tr>
 	<?php foreach($rows as $row): ?>
	<tr>
		<td><?php echo $row['name']; ?></td>
		<td><a href="<?php echo $row['website'];?>"ID="a"><?php echo $row['website']; ?></td>
		<td><a href="update.php?act=update&name=<?php echo $row['name']; ?>">更新</a> 
			<a href="action.php?act=delUser&name=<?php echo $row['name']; ?>" class="a">删除</a>
		</td>

 	</tr>
 	<?php endforeach ?>
	</table>
	
 </body>
 </html> 
