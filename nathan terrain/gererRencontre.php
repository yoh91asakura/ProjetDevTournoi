<?php 
include('connexionBdd.php');
include('terrain.class.php');
include('organiserTerrain.class.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gestion rencontre </title>


</head>

<body>

<div id='formulaire'>
<?php
$unTerrain = new Terrain();
$message="";
if(isset($_POST['newHoraire']))
{
$ok=$unTerrain->majTerain($_POST['id'],$_POST['newHoraire']);
if($ok == 1)
	header('location:organiser.php');
else	$message="ERREUR modification pas pris en compte!";	
	}

echo "<span style='color:red'>".$message."</span>";
?>
<table>
<caption>Gestion Terrain</caption>
<form action='gererRencontre.php' method='post' >

<tr><td>
<label for="id">NUMERO TERRAIN:</label>
</td><td>
<input type='text' name='id' value='<?php echo $unTerrain->getId($_GET['id']-1); ?>'/></td></tr>
<tr><td>
<label for="dispo">DISPONIBILITE:</label></td><td>
<input type="text" name="dispo" value="<?php  if($unTerrain->getDispo($_GET['id']-1)==0)echo "disponible"; else echo"indisponible";?>"/></td></tr>
<tr><td>
<label for="horaire">HORAIRE:</label>
</td><td>
<input type="text" name="horaire" value="<?php echo $unTerrain->getHoraire($_GET['id']-1);?>"/>
</td><td>
<input type='radio' name='newHoraire' value='12h30'/>12h30
<input type='radio' name='newHoraire' value='13h00'/>13h00.
</td></tr>
<tr ><td colspan="3" align="center">
<input type='submit' value='enregistrer'/>
</td></tr>
</form>

</table>

<a href="organiser.php" style="outline:none; color:#09C" > RETOUR</a>
 </div> 


</body>
</html>