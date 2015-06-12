<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
$dt=new DateTime("now",new DateTimeZone('Asia/Taipei'));
$dt->setDate(2015,04,17);
$dt->setTime(13,06,50);
echo $dt->format('T');
echo "2012年10月10日是週幾" . $dt->format('l') . "<br>";
echo "今天是" . $dt->format('Y-n-d h:i:s') . "<br>";
$dt->modify('+1 day');
echo "明天是" . $dt->format('Y-n-d h:i:s') . "<br>";

?>
</body>
</html>