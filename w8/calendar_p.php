<?php 
session_start();
echo $_SESSION['yy'] . "<br>";
echo $_SESSION['mm'] . "<br>";
$dt=new DateTime("now",new DateTimeZone('Asia/Taipei'));
$m1=$dt->setDate($_SESSION['yy'],$_SESSION['mm'],1);
echo $dt->modify('-1 month');
?>