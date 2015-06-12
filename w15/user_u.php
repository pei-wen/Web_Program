<html>
<head>
<meta charset="utf8">
<title>查詢會員資料</title>
</head>
<body>
<form action="../w16/user_u2.php" method="post">
<?php
require_once("../w14/mysql.php");
$sql="select * from user order by uid desc";
$sql2=mysql_query($sql);
echo "<table width=90% align=center border=1>";
while($list=mysql_fetch_array($sql2)) {
	echo "<input type=hidden name=uid[] value=" . $list['uid'] . ">\n";
	echo "<tr>";
	echo "<td>" . $list['uid'];
	echo "<td><input type=text name=un[] value=" . $list['un'] . ">\n";
	echo "<td><input type=text name=pw[] value=" . $list['pw'] . ">\n";
	echo "<td><input type=text name=pic[] value=" . $list['pic']. "><img width=60 height=45 src=../w14/upload/" . $list['pic'] . ">";
	echo "<td><input type=text name=name[] value=" . $list['name'] . ">\n";
}
?>
<tr align=center><td colspan=5><input type=submit value=修改>
</form>
</body>
</html>







