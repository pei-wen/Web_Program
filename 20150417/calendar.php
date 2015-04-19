<?php
	session_start();
?>
<html>
<head>
	<meta charset="utf8">
	<style>
		td{text-align: center};
	</style>	
</head>

<body>
	<?php
		$dt = new DateTime('NOW', new DateTimeZone('Asia/Taipei'));//
		$_SESSION['yy']=$dt->format('Y');
		$_SESSION['mm']=$dt->format('n');
	?>
	<table width="50%" border="1" align="center">	
		<tr>
			<td>
				<a href="calendar_p.php"><img src="P.png" width="12" height="12">
				<?php
					echo "<td colspan=5>".$_SESSION['yy']."年".$_SESSION['mm']."月";
				?>
			</td>
			<td>
				<a href=""><img src="n.png" width="12" height="12">
			</td>
		</tr>
		<tr>
			<td>日</td>
			<td>一</td>
			<td>二</td>
			<td>三</td>
			<td>四</td>
			<td>五</td>
			<td>六</td>
		</tr>
		<?php
			$dt->setDate($dt->format('Y'),$dt->format('n'),1);
			$start=$dt->format('w');
			$end=$dt->format('t');
			$j=0;

			//$FirstDay=date("w",mktime(0,0,0,$_SESSION['mm'],1,$_SESSION['yy']));
			//for($i=1;$i<=$FirstDay;$i++)
			//{
			//	echo"<td></td>";

			//}
			for($i=1-$start;$i<=$end;$i++)
			{
			
				if($j++%7==0)
				{
					echo "<tr>";
				}
				if($i<=0)
				{
					echo"<td>";
				}
				else
				{
					echo "<td>".$i;
				}

				
			}

			// for($i=1;$i<=$end;$i++)
			// {
									
			// 		echo "<td>".$i."</td>";
			//  		if($i%7==0)
			//  		{
			//  			echo "<tr></tr>";
			//  		}	
			 			 	
			// }
		?>
	</table>
</body>
</html>