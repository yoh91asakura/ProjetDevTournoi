<?php // ce fichier permet de créer les poules et tabmatches à partir du tableau d'équipe, reste a regler de probleme du rafraichissement qui refait ces instruction à l'infinie 

require('Class/Poule.class.php');
require('Class/GestionPoule.class.php');
require('Traitement/traitementBase.php');
//$tabEquipe = array ('lapin','chien','chat','tortue','chevre','girafe',/*'rat','lezard','renard','1234','rapidStar','lapanoma','rotard','rapinotte','pluie','soleil','rapace','joviale','roger','herbert','ines','felix','rabin','kokiri','lacif','massif','klarifie','4567','ilisousous','retorque','bitokus','tokris','cloporte','pikachu','salamèche','bulbizarre','robinhood','dracofeu','polite','robespierre','volataire','rousseaux'*/);



if ($_SESSION['i']==0)
{
$tabEquipe = recupEquipes($bdd);//recupere les équipes depuis la base de donnée
$poule = new Poule($tabEquipe);//créer une instance de poule (donc un tableau de poule)

	$poule->nbPoule(count($tabEquipe));//nbPoule DOIT etre mis a jour en fonction du nb d'équipe pour que ça marche
	$poule->repartitionPoule();//créer le TabPoule grace au nbPoule mis à jour
	$tabPoule = $poule->getTabPoule();//on récup le tabPoule (tab a 2 dimension : dim1=n° de poule ; dim2= équipes)

$gestionPoule = new GestionPoule($tabPoule);//créer une instance de gestion du poule
	$gestionPoule->genererTabMatch();//genere le tabMatch

$nbPoule = $poule->getNbPoule();//ne sert que pour les test mais éxiste pour récup le nombre de poule
$_SESSION['tabPoule'] = $poule->getTabPoule();//on récup le tabPoule (tab a 2 dimension : dim1=n° de poule ; dim2= équipes)
$_SESSION['tabMatch'] = $gestionPoule->getTabMatch();//on récup le tabMatch (tab à 3 dimention : dim1=n° de poule ; dim2 = match : dim3 = équipes)
$_SESSION['nbMatch'] = $gestionPoule->getNbMatch();//on récup le nombre de match (int)
initIdPoule($bdd,$_SESSION['tabPoule']);//Set les IdPoules dans la base de données
$_SESSION['i']=1;
}
updateScore($bdd,$_SESSION['tabPoule']);

	
function afficherInfoPoule ($tabEquipe, $nbPoule) {//affiche le nb de Poule et le vb d'équiep minime
echo count($tabEquipe)."<br />";
echo $nbPoule."<br />";
echo "il y aura : ".((int)(count($tabEquipe)/$nbPoule))." equipes par poule au min <br/>"; 
}

//afficherInfoPoule($tabEquipe,$nbPoule);
//afficherTabPoule($tabPoule);
//afficherTabMatch($tabMatch);


?>