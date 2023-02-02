<?php
	session_start();
	session_destroy();
	echo "<script type = \"text/javascript\">
	alert(\"User Logged Out\");
	window.location = (\"../index.php\")
	</script>";



	

	
?>