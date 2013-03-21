<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tournois', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

function recupEquipes($bdd){
$tabEquipe=array();
$res = $bdd->query('SELECT nomequipe FROM equipe');
while ($ligne = $res->fetch())
	array_push($tabEquipe,$ligne['nomequipe']);
return $tabEquipe;

}

function initPoule($bdd,$tabPoule){
$req = $bdd->prepare('INSERT INTO poule(idpoule: id, nombreequipe : nombre');
foreach($tabPoule as $index=>$poule)
$req->execute(array(
    'id' => $index,
    'nombreequipe' => count($poule),
    ));
}

function updateScore($bdd,&$tabPoule){
/*$res = $bdd->prepare('INSERT INTO rencontre('',idterrain,idarbitre,numsemaine
,jour,equipe1,equipe2,gagnant,set1equipe1,set1equipe2,set2equipe1,set2equipe2,set3equipe1,set3equipe2) VALUES(:id,:idterrain,:idarbitre,:numsemaine
,:jour,:equipe1,:equipe2,:gagnant,:set1equipe1,:set1equipe2,:set2equipe1,:set2equipe2,:set3equipe1,:set3equipe2);
*/
$res = $bdd->query('SELECT nomequipe, scorePoule FROM equipe');
while ($donnees = $res->fetch()){
	foreach($tabPoule as &$poule)
	foreach($poule as &$equipe_score)
	if (strcasecmp($equipe_score[0], $donnees['nomequipe']) == 0) $equipe_score[1] = $donnees['scorePoule'];
	}
}


?>