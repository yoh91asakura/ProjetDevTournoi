<html>
<head>
<style>
.boutonbleu {
	-moz-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	-webkit-box-shadow:inset 0px 1px 0px 0px #dcecfb;
	box-shadow:inset 0px 1px 0px 0px #dcecfb;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #bddbfa), color-stop(1, #80b5ea) );
	background:-moz-linear-gradient( center top, #bddbfa 5%, #80b5ea 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bddbfa', endColorstr='#80b5ea');
	background-color:#bddbfa;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #84bbf3;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #528ecc;
}.boutonbleu:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #80b5ea), color-stop(1, #bddbfa) );
	background:-moz-linear-gradient( center top, #80b5ea 5%, #bddbfa 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80b5ea', endColorstr='#bddbfa');
	background-color:#80b5ea;
}.boutonbleu:active {
	position:relative;
	top:1px;
}
body{
	background-image:url('img/fond.jpg');
	font-family:helvetica;
}
#formulaire {
position:relative;
height:750px;
width:800px;
top:5px;
left:50%;
margin-left:-400px;
border-radius:50px;
background-color:#F5F5F5;
}
#affichage {
position:relative;
height:750px;
width:800px;
top:5px;
left:50%;
margin-left:-400px;
border-radius:50px;
background-color:#F5F5F5;
}
</style>
</head>
<body>
<?php
$nbcapt=0;
$nbjoueur=0;

if(isset($_POST["nomequipe"]))$nomequipe=$_POST["nomequipe"];
if(isset($_POST["nom1"])){$nom1=$_POST["nom1"];$nbjoueur++;}
if(isset($_POST["prenom1"]))$prenom1=$_POST["prenom1"];
if(isset($_POST["capt1"])){$capt1="oui";$nbcapt++;}else $capt1="non";

if(isset($_POST["nom2"])){$nom2=$_POST["nom2"];$nbjoueur++;}
if(isset($_POST["prenom2"]))$prenom2=$_POST["prenom2"];
if(isset($_POST["capt2"])){$capt2="oui";$nbcapt++;}else $capt2="non";

if(isset($_POST["nom3"])){$nom3=$_POST["nom3"];$nbjoueur++;}
if(isset($_POST["prenom3"]))$prenom3=$_POST["prenom3"];
if(isset($_POST["capt3"])){$capt3="oui";$nbcapt++;}else $capt3="non";

if(isset($_POST["nom4"])){$nom4=$_POST["nom4"];$nbjoueur++;}
if(isset($_POST["prenom4"]))$prenom4=$_POST["prenom4"];
if(isset($_POST["capt4"])){$capt4="oui";$nbcapt++;}else $capt4="non";

if(isset($_POST["nom5"])){$nom5=$_POST["nom5"];$nbjoueur++;}
if(isset($_POST["prenom5"]))$prenom5=$_POST["prenom5"];
if(isset($_POST["capt5"])){$capt5="oui";$nbcapt++;}else $capt5="non";

if(isset($_POST["nom6"])){$nom6=$_POST["nom6"];$nbjoueur++;}
if(isset($_POST["prenom6"]))$prenom6=$_POST["prenom6"];
if(isset($_POST["capt6"])){$capt6="oui";$nbcapt++;}else $capt6="non";

if(isset($_POST["nom7"])){$nom7=$_POST["nom7"];$nbjoueur++;}
if(isset($_POST["prenom7"]))$prenom7=$_POST["prenom7"];
if(isset($_POST["capt7"])){$capt1="oui";$nbcapt++;}else $capt7="non";

if(isset($_POST["nom8"])){$nom8=$_POST["nom8"];$nbjoueur++;}
if(isset($_POST["prenom8"]))$prenom8=$_POST["prenom8"];
if(isset($_POST["capt8"])){$capt8="oui";$nbcapt++;}else $capt8="non";

if(isset($_POST["nom9"])){$nom9=$_POST["nom9"];$nbjoueur++;}
if(isset($_POST["prenom9"]))$prenom9=$_POST["prenom9"];
if(isset($_POST["capt9"])){$capt9="oui";$nbcapt++;}else $capt9="non";

if(isset($_POST["nom10"])){$nom10=$_POST["nom10"];$nbjoueur++;}
if(isset($_POST["prenom10"]))$prenom10=$_POST["prenom10"];
if(isset($_POST["capt10"])){$capt10="oui";$nbcapt++;}else $capt10="non";

// VERFIFICATIONS DE SECURITES
if($nbcapt==0)$erreur="Une équipe doit avoir un capitaine.";
if($nbcapt>1)$erreur="Il ne peut y avoir qu'un capitaine par équipe.";
if($nbjoueur<6)$erreur="Une équipe doit être composée d'au moins 6 joueurs.";

echo '<div id="affichage">';
// AFFICHAGE DU RESUME DE L'EQUIPE SI PAS D'ERREUR
if(isset($erreur)){echo '<center><font color="red">'.$erreur.'</font></center>';}else{
echo '<h1><center>Résumé de l\'équipe : '.$nomequipe.'</center></h1><hr width="80%"/><br/>';

echo "<table border='1' align='center'>";
echo "<tr>";
echo "<td align='center'>NOM</td>";
echo "<td align='center'>PRENOM</td>";
echo "<td align='center'>CAPITAINE</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom1</td>";
echo "<td align='center'>$prenom1</td>";
echo "<td align='center'>$capt1</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom2</td>";
echo "<td align='center'>$prenom2</td>";
echo "<td align='center'>$capt2</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom3</td>";
echo "<td align='center'>$prenom3</td>";
echo "<td align='center'>$capt3</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom4</td>";
echo "<td align='center'>$prenom4</td>";
echo "<td align='center'>$capt4</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom5</td>";
echo "<td align='center'>$prenom5</td>";
echo "<td align='center'>$capt5</td>";
echo "</tr>";

echo "<tr>";
echo "<td align='center'>$nom6</td>";
echo "<td align='center'>$prenom6</td>";
echo "<td align='center'>$capt6</td>";
echo "</tr>";

if(isset($nom7))echo "<tr><td align='center'>$nom7</td><td align='center'>$prenom7</td><td align='center'>$capt7</td></tr>";
if(isset($nom8))echo "<tr><td align='center'>$nom8</td><td align='center'>$prenom8</td><td align='center'>$capt8</td></tr>";
if(isset($nom9))echo "<tr><td align='center'>$nom9</td><td align='center'>$prenom9</td><td align='center'>$capt9</td></tr>";


echo "</table>";
} // fin de l'affichage du résume de l'équipe
?>
</div>