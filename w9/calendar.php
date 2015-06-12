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
if(isset($_GET['myM'])) {
	$myM = $_GET['myM'];
	$dt=new DateTime($myM,new DateTimeZone('Asia/Taipei'));
	$cYY = $dt->format('Y');
	$cMM = $dt->format('n');
	$pMonth=$dt->modify('-1 month');
	$pm = $dt->format('Y') . "-" . $dt->format('n');
	$nMonth=$dt->modify('+2 month');
	$nm = $dt->format('Y') . "-" . $dt->format('n');
} else {
$dt=new DateTime("now",new DateTimeZone('Asia/Taipei'));
$cYY = $dt->format('Y');
$cMM = $dt->format('n');

$pMonth=$dt->modify('-1 month');
echo $pMonth->format('Y-n-d H:m:s');
$pYY = $pMonth->format('Y');
$pMM = $pMonth->format('n');
$pm = $pYY . "-" . $pMM;
echo "<br>";
echo  $pm;

$nMonth=$dt->modify('+2 month');
//echo $nMonth->format('Y-n-d H:m:s');
$nYY = $nMonth->format('Y');
$nMM = $nMonth->format('n');
$nm = $nYY . "-" . $nMM;
echo "<br>";
echo  $nm;
}
echo "<br>";
echo "<a href=calendar.php?myM=" . $pm . "><img src=previous.png></a>";
echo $cYY . "年" . $cMM . "月";
echo "<a href=calendar.php?myM=" . $nm . "><img src=next.png></a>";
?>

</body>
</html>