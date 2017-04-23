<?php
include_once 'ConnMySql.php';
$sql='SELECT * FROM message WHERE 1';
$statement=$pdo->prepare($sql);
$statement->execute();
$message=$statement->fetchAll(PDO::FETCH_NUM);
$sql=$pdo->query("SELECT COUNT(*) FROM message");
$messageNum =$sql->fetchColumn();//×Ü¸öÊı

