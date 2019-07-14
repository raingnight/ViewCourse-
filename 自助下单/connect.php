<?php
	define('DB_HOST', 'localhost');  
    define('DB_USER', 'root');  
    define('DB_PWD', '11111111');
    define('DB_CHARSET', 'UTF8');  
    define('DB_DBNAME', 'zzxd');
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PWD);
	if(!$con){
		die('数据库连接失败！'.$mysql_error());
	}
	mysql_select_db("zzxd");
?>