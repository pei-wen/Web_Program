<?php
	$today = new DateTime('NOW', new DateTimeZone('Asia/Taipei'));
	echo $today->format('Y-m-d H:i:s');
?>