<html>
<head>
<meta charset="utf8">
<title>
</title>
</head>
<body>
<?php
$d=array("台東","高雄","屏東","台南",
"台北","桃園","高雄","屏東","台南","台北","桃園",
"高雄","屏東","台南","台北","桃園","高雄","屏東",
"台南","台北","桃園","高雄","屏東","台南","台北",
"桃園","高雄","屏東","台南","台北","桃園","高雄",
"屏東","台南","台北","桃園","高雄","屏東","台南",
"台北","桃園","高雄","屏東","台南","台北","桃園",
"高雄","屏東","台南","台北","桃園","高雄","屏東",
"台南","台北","桃園","高雄","屏東","台南","台北","桃園");
?>
<form action="p4-14.php" method="post">
<select name="city" multiple>
	<option>--請選擇--</option>
	<?php

	for($i=0;$i<=count($d);$i++) {
		echo "<option>" . $i . $d[$i] . "</option>";
	}
	?>
</select>
<?php
	echo count($d);
	echo "<br>";
?>
<input type="submit" value="送出">
</form>
</body>
</html>



