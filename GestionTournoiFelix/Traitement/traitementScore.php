<?php
/*function recupScores($chaineScore)// récupere les scores du formulaire selon le caractere de séparation choisi
{
	return $scores = explode('/',$chaineScore);
}

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=tournois', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['scoreSet1'])){
		$req = $bdd -> prepare('INSERT INTO rencontrepoule (idterrain , idarbitre , numsemaine , jour , 
		equipe1 , equipe2 , set1equipe1 , set1equipe2 , set2equipe1 , set2equipe2 , set3equipe1 , set3equipe2 )
		VALUES (:idterrain , :idarbitre , :numsemaine , :jour , 
		:equipe1 , :equipe2 , :set1equipe1 , :set1equipe2 , :set2equipe1 , :set2equipe2 , :set3equipe1 , :set3equipe2)');
		
		if(isset($_POST['scoreSet1']))$scoresSet1 = recupScores($_POST['scoreSet1']);
		if(isset($_POST['scoreSet2']))$scoresSet2 = recupScores($_POST['scoreSet2']);
		if(isset($_POST['scoreSet3']))$scoresSet3 = recupScores($_POST['scoreSet3']);
		if(isset($_GET['equipe1']))$equipe1 = $_GET['equipe1'];
		if(isset($_GET['equipe2']))$equipe2 = $_GET['equipe2'];
		
		$req -> execute(array(
		'idterrain' => NULL,
		'idarbitre' => NULL,
		'numsemaine' => NULL,
		'jour' => NULL,
		'equipe1' => $equipe1,
		'equipe2' => $equipe2,
		'set1equipe1' => $scoresSet1[0],
		'set1equipe2' => $scoresSet1[1],
		'set2equipe1' => $scoresSet2[0],
		'set2equipe2' => $scoresSet2[1],
		'set3equipe1' => $scoresSet3[0],
		'set3equipe2' => $scoresSet3[1]
		));
		 $reponse = 'ok';
		 }else $reponse = 'Tous les champs ne sont pas parvenus';
		 echo $reponse;*/
		 print_r($_POST);
?>