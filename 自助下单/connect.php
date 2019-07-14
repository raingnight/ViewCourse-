<?php
//定义数据库连接信息
	define('DB_HOST', 'localhost');  
    define('DB_USER', 'root');  
    define('DB_PWD', '11111111');
    define('DB_CHARSET', 'UTF8');//设置字符编码
    define('DB_DBNAME', 'zzxd');//选择数据库
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PWD);
	if(!$con){
		die('数据库连接失败！'.$mysql_error());
	}
	mysql_select_db("zzxd");
?>
