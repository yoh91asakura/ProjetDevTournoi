<!-- connexion base de donnée -->
<?php 
$connexion=mysql_connect("localhost","root","");
if(!$connexion)
{
	echo "ATTENTION !!!! pas de connexion";}
	else{

$BDD=mysql_select_db("tournois");
		if(!$BDD)
		{
			echo"ATTENTION !!! la base de donnée n'existe pas";}
		}


?>