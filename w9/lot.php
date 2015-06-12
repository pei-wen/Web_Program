<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
for($i=0;$i<=49;$i++) {
	$used[$i] = 0;
}
for($i=0;$i<6;$i++) {
	$t = rand(1,49);
	$used[$t]+=1;
	if($used[$t]==1) {
		echo $t . " ";
	} else {
		$i--;
	}
}
echo "<br>";
foreach($used as $k =>$v) {
	echo "used[" . $k . "]=" . $v . "<br>";
}
?>
</body>
</html>