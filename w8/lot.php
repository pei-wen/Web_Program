<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
$j=0;
$used=array(0,0,0,0,0,0);
for($j=0;$j<6;$j++) {
	$temp=rand(1,10);
	echo "temp=" . $temp . "<br>";
	$used[$j]+=$temp;
	//if($used[$temp]==1) {
		//continue;
	//}
	$j++;
}
foreach($used as $v) {
	echo $v . "<br>";
}
?>
</body>
</html>