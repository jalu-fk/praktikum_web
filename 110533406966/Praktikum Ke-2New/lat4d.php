<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Seleksi if-else-if</title>
</head>

<body>
		<?php
		$i = 0;
		
		if($i == 0){
				echo "i sama dengan 0";}
		elseif($i == 1){
				echo "i sama dengan 1";}
		elseif($i == 2){
				echo "i sama dengan 2";}
		
		switch($i){
		case 0:
				echo "i sama dengan 0";
				break;
		case 1:
				echo "i sama dengan 1";
				break;
		case 2:
				echo "i sama dengan 2";
				break;
		}
		?>
</body>
</html>