<meta charset="UTF-8">
<?php
$dsn = "mysql:host=localhost;dbname=web";
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,
	PDO::ERRMODE_EXCEPTION);
$dbh-> exec('set names utf8');
	
	$res = $dbh->query('SELECT * FROM web_list');
	$res->setFetchMode(PDO::FETCH_ASSOC);
	while($row=$res->fetch()){
	$rows[]=$row;
	}
?>