<?php header("Content-Type:text/html;charset=gb2312");?>
<?php
include_once 'ConnMySql.php';
$sql='INSERT INTO `message`(`content`) VALUES (:content)';
//$sql='SELECT * FROM user WHERE name=:name';
$statement=$pdo->prepare($sql);
$content=filter_input(INPUT_POST, 'content');
$statement->bindValue(':content', $content,PDO::PARAM_STR);
$statement->execute();

if(($result=$statement->rowCount())!=0)
{
	header("Location:index.php?success=1#testimonial");
}
else
	header("Location:index.php?error=1#testimonial");