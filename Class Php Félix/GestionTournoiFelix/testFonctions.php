<?php
include('Poule.class.php');

$tabEquipe = array ('lapin','chien','chat','tortue','chevre','girafe','rat',/*'lezard','renard','1234','rapidStar','lapanoma','rotard','rapinotte','pluie','soleil','rapace','joviale','roger','herbert','ines','felix','rabin','kokiri','lacif','massif','klarifie','4567','ilisousous','retorque'*/);

$nbEquipe = count($tabEquipe);
$poule = new Poule($tabEquipe,$nbEquipe);
echo $nbEquipe."<br />";
$poule->nbPoule($nbEquipe);
echo $poule->getNbPoule()."<br />";
echo "il y aura : ".((int)($nbEquipe/$poule->getNbPoule()))." equipes par poule au min <br/>"; 

$poule->repartitionPoule();
$tabPoule = $poule->getTabPoule();
echo "<pre>";
print_r($tabPoule);
echo "</pre>";


?>