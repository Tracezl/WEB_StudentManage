<?php //header("Content-Type:text/html;charset=gb2312");?>
<?php
include_once 'ConnMySql.php';
$sql="INSERT INTO apply(id,number,name,phoneNum,QQ) VALUES (:id,:number,:name,:phoneNum,:QQ)";
$statement=$pdo->prepare($sql);
$id=filter_input(INPUT_POST, 'id');
$number=filter_input(INPUT_POST, 'number');
$name=filter_input(INPUT_POST, 'name');
$phoneNum=filter_input(INPUT_POST, 'phoneNum');
$QQ=filter_input(INPUT_POST, 'QQ');
$statement->bindValue(':id', $id,PDO::PARAM_STR);
$statement->bindValue(':number', $number,PDO::PARAM_STR);
$statement->bindValue(':name', $name,PDO::PARAM_STR);
$statement->bindValue(':phoneNum', $phoneNum,PDO::PARAM_STR);
$statement->bindValue(':QQ', $QQ,PDO::PARAM_STR);
$statement->execute();

if(($result=$statement->rowCount())!=0)
{
	header("Location:index.php?success=2#pricing");
}
else
	header("Location:index.php?error=2#pricing");