<?php
include('Poule.class.php');
include('GestionPoule.class.php');

$tabEquipe = array ('lapin','chien','chat','tortue','chevre','girafe','rat','lezard','renard','1234','rapidStar','lapanoma','rotard','rapinotte','pluie','soleil','rapace','joviale','roger','herbert','ines','felix','rabin','kokiri','lacif','massif','klarifie','4567','ilisousous','retorque',/*'bitokus','tokris','cloporte','pikachu','salamèche','bulbizarre','robinhood','dracofeu','polite','robespierre','volataire','rousseaux'*/);

$nbEquipe = count($tabEquipe);
$poule = new Poule($tabEquipe);


echo count($tabEquipe)."<br />";
$poule->nbPoule(count($tabEquipe));
echo $poule->getNbPoule()."<br />";
echo "il y aura : ".((int)($nbEquipe/$poule->getNbPoule()))." equipes par poule au min <br/>"; 

$poule->repartitionPoule();
$tabPoule = $poule->getTabPoule();
echo "<pre>";
print_r($tabPoule);
echo "</pre>";
echo "<br /><br />";

$gestionPoule = new GestionPoule($tabPoule);

$tabMatch = $gestionPoule->genererTabMatch();

echo "<pre>";
print_r($tabMatch);
echo "</pre>";


?>