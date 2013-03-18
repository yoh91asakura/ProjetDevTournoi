<?php include('terrain.class.php'); include('connexionBdd.php');// include('organiserTerrain.class.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
L'organisateur choisit les jours sur lesquels se déroulent les matchs 
Deux horaires sont disponibles par jour : 12h30 et 13h. 
Une équipe ne peut jouer deux matchs le même jour.
-->
<body>

<a href="organiser.php">actualiser</a><!-- transformer en bouton  lien qui actualise la page-->

<table border="1" bordercolor="#00CCFF">
<caption> GESTION TERRAINS</caption>

<tr bgcolor="#00CC99"><th>NUMERO TERRAIN</th><th>DISPONIBILITE</th><th>HORAIRE</th></tr>
<?php
 //$unterrain = new OrganiserTerrain();
 $lesTerrain = new Terrain();
  
 for($i=0;$i < $lesTerrain->nbTerrain(); $i++)
 {
		if($lesTerrain->getDispo($i)==0)
		{	$dispo="disponible";}	
	else{	$dispo="indisponible";}
	
	 echo "<tr><td>".$lesTerrain->getId($i)."</td><td>".$dispo."</td><td>".$lesTerrain->getHoraire($i)."</td><td><a href='gererRencontre.php?id=".$lesTerrain->getId($i)."'  style='color:#000; text-decoration:none'>MODIFIER</a></td></tr>";
	
	 }
	
 
?>
</table>


</body>
</html>