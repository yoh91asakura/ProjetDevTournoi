<?php 
include('terrain.class.php');
include('connexionBdd.php');
include('Poule.class.php');
include('GestionPoule.class.php');
include('organiserTerrain.class.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script>
function testChamp(monForm)
{
	/*var valeur,valeur2,ok;
	ok=true;
	valeur=monForm.nbterain.value;
	valeur2=monForm.nbEquipe.value;
	if(isNaN(valeur1) && isNaN(valeur2) )
	{
		alert("saisie incorect entrez un chifre ou un nombre pourles equipes et les terrains");
		ok=false;
		monForm.nbEquipe.focus();}
		else{*/
	
	var valeur,ok;
	ok=true;
	valeur=monForm.nbterain.value;
	
	
	if(isNaN (valeur))
	{
		alert("saisie incorect entrez un chifre ou un nombre pour les terrains");
		ok=false;
		monForm.nbterain.focus();}
		
	else {
		var valeur,ok;
		ok=true;
		valeur=monForm.nbEquipe.value;
		if(isNaN(valeur))
			{
				alert("saisie incorect entrez un chifre ou un nombre pour les equipe");
				ok=false;
				monForm.nbEquipe.focus();				
				 }		
		}	
	//	}
	return ok;
	}



</script>



<body>

<?php
$unTerrain= new Terrain();
$message="";
$message2="";

if(empty($_POST['nbEquipe'])==false && empty($_POST['nbterain'])==false)
	{
	$message="traitemant des rencontre";
	
	
	$message=$unTerrain->simul($_POST['nbEquipe']);
	$poule = new Poule($tabEquipe);
	$poule->nbPoule(count($tabEquipe));
	echo $poule->getNbPoule()."<br />";
	
	
	}

else{
	
	if(isset($_POST['nbEquipe']) || isset($_POST['nbterain']))
{

	switch(isset($_POST['nbEquipe']) || isset($_POST['nbterain']))
	{
		case $_POST['nbEquipe']: $message= " vous avez besoin de :".$unTerrain->donnerTerrain($_POST['nbEquipe'])." terrain(s).";
			break;
		case $_POST['nbterain']: $message=" traitement terrain";
			break;
		default : $message=	"aucune information donnée";
		}	
	}//endif

	
	}	


if(isset($_POST['nbTerrain']))
{

$message2=$unTerrain->ajoutTerrain($_POST['nbTerrain']);

//$unTerrain->donnerTerrain(8);
//echo $unTerrain->donnerTerrain(15);
//echo $unTerrain->nbTerrain();
}

?>
<div>
<?php
echo "<p style='color:#39F'>".$message."</p>" ;
?>
<h3> <u>simulation besoin</u> </h3>
<form action="ajouTerrain.php" method="post"  onkeyup="return testChamp(this)">
entrer le nombre d'equipe participant au tournoi:<input id="nbEquipe" name="nbEquipe" size="5" placeholder="ex: 5" onkeyup="return testChamp(this)" /><br />
entrer le nombre de terrain :<input id="nbterain" name="nbterain" size="5" placeholder="ex: 5" onkeyup="return testChamp(this)" /><br />
<input type="submit" value="Simuler"   />

</form>
</div>


<div>

<?php
echo "<p style='color:#39F'>".$message2."</p>" ;
?>
<h3><u>Ajout Terrain</u></h3>
<form action="ajouTerrain.php" method="post">
<label for="nbTerrain">  Entrez le nombre de terrains à votre disposition</label>

<select name="nbTerrain">
<?php
for($i=1;$i<30;$i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<input type="submit" value="ok" />
</form>
</div>






</body>
</html>