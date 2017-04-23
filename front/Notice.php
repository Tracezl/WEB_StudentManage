<?php
include_once 'ConnMySql.php';
$sql='SELECT * FROM notice ORDER BY id DESC LIMIT 0,2';
$statement=$pdo->prepare($sql);
$statement->execute();
$notice=$statement->fetchAll(PDO::FETCH_NUM);
