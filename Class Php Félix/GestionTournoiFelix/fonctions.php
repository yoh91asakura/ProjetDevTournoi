<script type="text/javascript" src="fonctionJavascript.js"></script>
<?php
require_once('traitementPoule.php');

function gererAffichage($choix ,$tabMatch ,$tabPoule){// systeme imparfait de passage d'une page à une autre, la variable choix est passer par l'url pour savoir quoi afficher
		
	$choix = (int) $choix;
	if ($choix >=0 AND $choix < count($tabPoule))
		afficherTabMatch($tabMatch, $choix);
	else afficherTabPoule($tabPoule);
	
	/*echo'<pre>'; 
	print_r($tabMatch);
	echo'</pre>';*/
}


function afficherTabPoule($tabPoule){// affuche le tableau des poules, pour le moment en lignes
	
	foreach($tabPoule as $index => $lig)
	{	
		echo '<h2 align="center"><a href="affichePoule.php?choix='.($index).'" >Poule '.($index+1).'</a></h2>';
		echo '<table border="1" width="200px" cellspacing="0" cellpadding="10" align="center" >';
	 
		foreach($lig as $col)
		{
			echo '<tr><td>'.$col.'</td>
			<td></td>
			</tr>';
		}
		echo '</table><br />'; 
	}
	
}


function afficherTabMatch($tabMatch, $choix){//affiche le tableau de match de la poule choix+1
		
		echo '<h2 align="center"> Matches Poule '.($choix+1).'</h2>';
		echo '<table border="1" width="40%" cellspacing="0" cellpadding="10" align="center">';
		echo '<tr>
					<td width="default"> </td>
		 			<td>set1</td>
					<td>set2</td>
					<td>set3</td>
					<td width="default"> </td>
					<td width="default"> </td>
			</tr>';
		foreach($tabMatch[$choix] as $col)
		{
			echo '<tr>';
				echo '<td>'.$col[0].'</td>';
				echo '<td> <input type="text" name="score" maxlength="2" size="2"> </td>
						<td> <input type="text" name="score" maxlength="2" size="2"> </td>
						<td> <input type="text" name="score" maxlength="2" size="2"> </td>';
				echo '<td>'.$col[1].'</td>';
				echo '<td colspan="0" rowspan="0"><input name="Valider" type="button" value="valider"></td>';
			echo '</tr>';
			
		}
		
		echo '</table>';
		echo '<p><br/><br/>';
		echo '<a href="affichePoule.php?choix=-1">Retour à La page des Poules</a></p>';
		
}

?>