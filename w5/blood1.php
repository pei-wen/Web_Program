<html>
<head>
<meta charset="utf8">
</head>
<body>
<body>
<?php
$blood2=$_POST['blood'];
switch($blood2) {
	case "A":
		echo "A";
		break;
	case "B":
		echo "B";
		break;
	case "AB":
		echo "AB";
		break;
	case "O":
		echo "O";
		break;
	default:
		echo "not people";
}

?>
</body>
</html>