<?php session_start();?>
<html>
<head>
<meta charset="utf8">
<title>月曆</title>
<style>
td {text-align:center}
</style>
</head>
<body>
<?php
$dt=new DateTime("now",new DateTimeZone('Asia/Taipei'));
$_SESSION['yy']=$dt->format('Y');
$_SESSION['mm']=$dt->format('n');
?>
<table width="50%" border="0" align="center">
<tr>
	<td><a href="calendar_p.php"><img src="previous.png"></a>
<?php
echo "<td colspan=5>" .$dt->format('Y') . "年" .$dt->format('n') . "月";
?>
	<td><img src="next.png">
<tr>
	<td>日<td>一<td>二<td>三<td>四<td>五<td>六
<?php
$dt->setDate($dt->format('Y'),$dt->format('n'),1);
$start=$dt->format('w');
$end=$dt->format('t');
$j=0;
for($i=1-$start;$i<=$end;$i++) {
	if($j++ % 7 ==0) {
		echo "<tr>";
	}
	if($i<=0) {
		echo "<td>";
	} else {
		echo "<td>" . $i;
	}
}
?>
</table>
</body>
</html>