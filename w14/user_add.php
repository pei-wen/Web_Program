<html>
<head>
<meta charset="utf8">
<title>新會員寫入資料庫</title>
</head>
<body>
<?php
require_once("mysql.php");
$un=$_POST['un'];
$pw=$_POST['pw'];
$name=$_POST['name'];

$upload= "./upload/";
$tmp=$_FILES['pic']['tmp_name'];
$f2=$_FILES['pic']['name'];
move_uploaded_file($tmp,$upload.$f2);

$sql="insert into user(un,pw,pic,name) values('"
.$un."','".$pw."','".$f2."','".$name."')";
echo $sql;
$r=mysql_query($sql);
?>
</body>
</html>