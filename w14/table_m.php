<?php
require_once("mysql.php");
$sql="create table user(
		uid int auto_increment primary key,
		un char(20),
		pw varchar(20),
		pic varchar(30),
		name varchar(10)
		)";
$r=mysql_query($sql) or die("create fail");
echo "Table user create success";
?>