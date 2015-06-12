<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php
$list2a=$_POST['list2'];
//for($i=0;$i<count($list2a);$i++) {
foreach($list2a as $k => $v) {
	echo "索引=" .$k . "值=" . $v . "<br>";
}
?>
</body>
</html>