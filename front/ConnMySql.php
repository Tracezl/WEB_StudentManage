<?php
try {
	$pdo=new PDO('mysql:host=127.0.0.1;dbname=jingganban;port=3306;charset=gb2312',
			'root',
			'');
} catch (PDOException $e) {
	echo "数据库连接不成功";
}