<?php 
	session_start();
	//header ("Page poules");
	if(!isset($_SESSION['i']))$_SESSION['i']=0;
	require('gestionAffichage.php');
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Page Poules</title>
</head>


<body>
<script src="jQuery/jQuery.js"></script>
<script>
	
	$('nomPoule').click{
		$(function(){
			var choix = $.get('gestionAffichage.php');
			$('nomPoule').load('gestionAffichage.php',choix);
			};
	};

</script>

<?php
session_destroy();
?>


</body>
</html>