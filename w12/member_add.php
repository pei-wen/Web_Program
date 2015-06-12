<html>
<head>
<meta charset="utf8">
<title>資料庫連線</title>
</head>
<body>
<?php
$link=mysql_connect("localhost","t1","t1a");
$db=mysql_select_db("test1");
if($link) {
	echo "主機連結成功<br>";
	if($db) {
		echo "資料庫連線成功<br>";
		$fn=$_POST['fname'];
		$bday=$_POST['birthday'];
		$sql="insert into member(fname,birthday) values('".$fn."','".$bday."')";
		$sql2=mysql_query($sql) or die(mysql_error());
	}
}
		?>
</body>
</html>