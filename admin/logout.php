<?php
	session_start();
	session_destroy();
	echo "<script type = \"text/javascript\">
	alert(\"Dalja e Suksesshme\");
	window.location = (\"../index.php\")
	</script>";

	
?>