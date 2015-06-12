<html>
<head>
<meta charset="utf8">
<title>刪除會員資料</title>
</head>
<body>
<?php
require_once("../w14/mysql.php");
$del2=$_POST['del'];
foreach($del2 as $v) {
	$sql="delete from user where uid=" . $v;
	$r=mysql_query($sql);
	if($r) {
		echo "delete success!";
	} else {
		echo "delete fail!";
	}
}
?>
</body>
</html>