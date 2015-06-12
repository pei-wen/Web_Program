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
		$sql="select * from member";
		$sql2=mysql_query($sql) or die(mysql_error());
		$row=mysql_num_rows($sql2);
		echo $row . "<br>";
		echo "<table width=95% border=1>";
		while($list=mysql_fetch_array($sql2)) {
			echo "<tr>";
			echo "<td>" . $list['mid'] ; 
			echo "<td>" . $list['fname'] ;
			echo "<td>" . $list['lname'] ;
			echo "<td>" . $list['cell'] ;
			echo "<td>" . $list['email'] ;
			echo "<td>" . $list['pwd'] ;
			echo "<td>" . $list['birthday'] ;
			echo "<td>" . $list['sex'] ;
		}
		echo "</table>";
	} else {
		echo "資料庫連線失敗<br>";
	}
} else {
	echo "主機連結失敗<br>";
}
?>
</body>
</html>