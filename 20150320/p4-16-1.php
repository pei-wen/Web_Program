<html>
<head>
<meta charset="utf-8">
<title>
</title>
</head>
<body>
<?php
$d=array("台東","花蓮","宜蘭","台北","桃園","新竹","台中","南投","彰化","雲林","台南","高雄","屏東");
?>
<form method="post" action=p4-14.php>
<select name="city">
    <option>--請選擇--</option>
	<?php
	for($i=0;$i<count($d);$i++){
	echo "<option>" . $i . "-" . $d[$i] . "</option>";
    }
	?>
</select>
<?php
echo "<br>";
echo count($d);
echo "<br>";
?>
<input type="submit" value="送出">
</form>
</body>
</html>