<html>
<head>
<meta charset="utf8">
<title>查詢會員資料</title>
</head>
<body>
<?php
require_once("../w14/mysql.php");
$sql="select * from user";
$sql2=mysql_query($sql);
while($list=mysql_fetch_array($sql2)) {
	echo $list['uid'] . "<br>";
	echo $list['un'] . "<br>";
	echo $list['pw'] . "<br>";
	echo "<img width=60 height=45 src=../w14/upload/" . $list['pic'] . "><br>";
	echo $list['name'] . "<br>";
}
?>
</body>
</html>