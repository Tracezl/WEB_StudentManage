<?php
include_once 'ConnMySql.php';
$sql='SELECT * FROM activity WHERE 1';
$statement=$pdo->prepare($sql);
$statement->execute();
$apply=$statement->fetchAll(PDO::FETCH_NUM);
$sql=$pdo->query("SELECT COUNT(*) FROM activity");
$applyNum =$sql->fetchColumn();//×Ü¸öÊı
