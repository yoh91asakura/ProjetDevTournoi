<?php
include('Poule.class.php');

$tabEquipe = array ('lapin','chien','chat','tortue','chevre','girafe','rat','lezard','renard','1234','rapidStar','lapanoma','rotard','rapinotte','pluie','soleil','rapace','joviale','roger','herbert','ines','felix');
$nbEquipe = count($tabEquipe);
$poule = new Poule($tabEquipe,$nbEquipe);
echo $nbEquipe."<br />";
echo $poule->nbPoule($nbEquipe)."<br />";
echo $poule->getNbPoule()."<br />";
echo "il y aura : ".((int)($nbEquipe/$poule->getNbPoule()))." equipes par poule au min"; 



?>