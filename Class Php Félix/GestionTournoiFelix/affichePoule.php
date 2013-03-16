<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
	header ("Page poules");
	require_once('fonctions.php'); 
	
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="fonctionJavascript.js"></script>
<title>Page Poules</title>
<h1>Poules</h1>
</head>

<body>
<hr>
<?php

  if(!isset($_GET['choix']))gererAffichage(-1,$tabMatch, $tabPoule);
  else gererAffichage($_GET['choix'],$tabMatch, $tabPoule);

?>


</body>
</html>