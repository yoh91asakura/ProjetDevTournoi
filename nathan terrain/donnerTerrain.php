<?php
include('terrain.class.php');
include('connexionBdd.php');
include('Poule.class.php');
include('GestionPoule.class.php');
include('organiserTerrain.class.php');


$poule = new Poule($tabEquipe);
$unterrain = new OrganiserTerrain();

if( $unterrain->getNbTerrainLibre() < $poule->getNbPoule() )
{
	$k=0;
	for($i=0;$i<$poule->getNbPoule();$i++)
		{
			$tabjeu[$i] = $unterrain->getTerrainLibre($k).' ->poule'.$i;
			$k++;
			if($k == $unterrain->getNbTerrainLibre())
				$k=0;
			}
	}
else{
	for($i=0; $i < $poule->getNbPoule() ; $i++)
		$tabjeu[$i] = $unterrain->getTerrainLibre($i).' ->poule'.$i; 
	
	}	


?>