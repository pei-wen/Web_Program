<?php
session_start();
echo $_SESSION['yy']."<br>";
echo $_SESSION['mm']."<br>";
$dt = new DateTime('NOW', new DateTimeZone('Asia/Taipei'));
$dt->setDate($dt->format('Y'),$dt->format('n'),l);
?>