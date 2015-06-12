<!DOCTYPE html>
<html>

	<head>
		<script type="text/javascript">
		</script>
	</head>

	<body>
		<?php
			$p=0;
			$tmp=array();
			for($i=0;$i<6;$i++)
			{
				$p=rand(1,49);
				while(in_array($p, $tmp))
				{
					$p=rand(1,49);
				}
				$tmp[$i]=$p;
				echo $p." ";
			}
		?>
	</body>

</html>
