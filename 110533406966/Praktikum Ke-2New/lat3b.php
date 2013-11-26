<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Casting Tipe</title>
</head>

<body>
		<?php
		$str = "123abc";
		$bil = (int) $str;
		
		echo gettype($str);
		echo gettype($bil);
		?>
</body>
</html>