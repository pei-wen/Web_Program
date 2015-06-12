<html>
<head>
<meta charset="utf8">
<title>修改會員資料</title>
</head>
<body>
<?php
require_once("../w14/mysql.php");
$uid2=$_POST['uid'];
$un2=$_POST['un'];
$pw2=$_POST['pw'];
$pic2=$_POST['pic'];
$name2=$_POST['name'];
foreach($uid2 as $k=>$v) {
	$sql="update user set un='" . $un2[$k] . 
	"', pw='" . $pw2[$k] . 
	"', pic='" . $pic2[$k] .
	"', name='" . $name2[$k] .
	"' where uid=" . $uid2[$k];
	echo $sql;
	mysql_query($sql);
}
?>
</body>
</html>