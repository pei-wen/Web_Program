<html>
<head>
<meta charset="utf8">
</head>
<body>
<form name="f1" action="9.php" method="post">
<p>姓名：<input type="text" name="username">
<p>學校：<input type="school" name="username">
<br>
<br>
<table width="85%" align="center" border="2">
<?php
for($i=0; $i<7; $i++) {
if($i%3==0){
	echo "<tr height=50 bgcolor=#cccccc>";
} else {
	echo "<tr height=50 bgcolor=#ffffff>";
}
for($j=1; $j<=7; $j++) {

	echo "<td>" . ($i*7+$j) ."</td>";

}
?>
	
	
</tr>
<?php
}
?>
</table>
</form>
</body>
</html>