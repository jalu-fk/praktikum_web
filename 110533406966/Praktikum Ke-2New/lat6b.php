<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3c.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Argumen fungsi/prosedur</title>
</head>

<body>
	<?php
	/**
	mencetak string
	$teks nilai string
	$bold adalah argumen opsional
	*/
	
	function print_teks($teks, $bold = true){
		echo $bold ? "<b>" .$teks. "</b>" : $teks;}
	
	print_teks("JF Kesuma");
	print_teks("JF Kesuma", false);
	?>
</body>
</html>
