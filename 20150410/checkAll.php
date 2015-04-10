<html>
<head>
<meta charset="utf8">
<script language="javascript">
function checkall(field) 
{
    if (document.getElementById("list").checked)//document.getElementById用來取得頁面中特定 id 的元素值
    {
	    for(var i=0;i<field.length;i++)//var是javascript的宣告意思
	    {
		    field[i].checked =true;
		}
	}
	else
	{
	    for(var i=0;i<field.length;i++)
	    {
		    field[i].checked =false;
		}
	}
}
</script>
</head>
<body>
<form name="f4" method="post" action="f4.php">
<input type="checkbox" name="list" id="list" onclick="checkall(document.f4.list2)">select all</br>
<!--checkall(document.form的name.id)-->
<?php
for ($i=0;$i<10;$i++)
{
    echo "<input value=" . $i . " type='checkbox' name='list2[]' id='list2'>". $i . "<br>";
}
?>
<input type="submit" value="送出">
</form>
</body>
</html>