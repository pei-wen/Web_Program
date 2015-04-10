<html>
<head> 
<title>帳密輸出PHP端</title>
<meta charset="utf-8">
</head> 
<body>
<form>

<?php
//在php中，echo扮演的角色就是接收HTML中的資訊，在HTML中method=POST/GET，PHP中$_就要用那個['放入HTML中的name']
//PHP的連結為.
//在PHP中，文字與HTML中的語法需加入""才能被PHP接受，否則會錯誤
//記得!!PHP結束一定要加分號
	echo "接收的姓名為:". $_POST['username']."<br>";
	echo "密碼為:". $_POST['passwd']."<br>";
	echo "性別為:". $_POST['sex']."<br>";
	echo "血型為:". $_POST['blood']."<br>";
	echo "作業系統為". $_POST['vista'];
	echo $_POST['xp'];
	echo $_POST['win2000'];
	echo $_POST['fedora'];
	echo $_POST['opensuse'];
	echo $_POST['ubntu'];


?>
</form>
</body>
</html>

