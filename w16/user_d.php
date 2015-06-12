<html>
<head>
<meta charset="utf8">
<title>刪除會員資料</title>
</head>
<body>
<form action="user_d2.php" method="post">
<?php
require_once("../w14/mysql.php");
$sql="select * from user order by uid desc";
$sql2=mysql_query($sql);
echo "<table width=90% align=center border=0>";
echo "<tr align=center><td colspan=6>刪除會員";
while($list=mysql_fetch_array($sql2)) {
	echo "<tr>";
	echo "<td><input type=checkbox name=del[] value=".$list['uid'].">";
	echo "<td>" . $list['uid'];
	echo "<td>" . $list['un'];
	echo "<td>" . $list['pw'];
	echo "<td>" . "<img width=60 height=45 src=../w14/upload/" . $list['pic'] . ">";
	echo "<td>" . $list['name'];
}
?>
<tr align=center><td colspan=6><input type=submit value=刪除>
</table>
</form>
</body>
</html>