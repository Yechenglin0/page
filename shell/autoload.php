<?php
	 function __autoload($classname) {
	 	getFileType($classname);
	 	fileExist($classname);
		$classname.='.class.php';
		require $classname;
	}
	 function getFileType($classname) {
		$type = substr($classname, strrpos($classname, '.') + 1);
		if ($type!='php') {
			return '不是php文件';
		}
	}
	 function fileExist($classname) {
		if(!file_exists($classname)) {
			return '文件不存在';
		}
	}

	$Hero = new \Hero\Main();
	$Monster = new \Monster\Main();
	$Hero->__toString();
	$Monster->__toString();
?>