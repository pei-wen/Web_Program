<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
echo "台北時間";
$dt=new DateTime("now",new DateTimeZone('Asia/Taipei'));
echo $dt->format('Y-n-d H:i:s');
echo "<br>";
echo $dt->format('T');
echo "<br>";
$start=mktime(15,35,0,4,17,2015);
$end=mktime(15,40,0,4,17,2015);
$p=mktime($dt->format('H'),$dt->format('i'),$dt->format('s'),$dt->format('n'),$dt->format('d'),$dt->format('Y')) . "<br>";
if($p>$start and $p<$end) {
	for($i=1;$i<13;$i++) {
		echo "<input type=radio name=n value=" .$i .">" . $i ."號餐<br>";
	}
}
else {
	echo "投票未開始或結束";
}
?>
</body>
</html>