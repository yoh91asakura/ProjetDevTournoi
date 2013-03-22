<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jQuery/jQuery.js"></script> 
<?php
require('Traitement/traitementPoule.php');

if(!isset($_GET['choix']))$choix=-1;
	else $choix = $_GET['choix'];
if ($choix >=0 AND $choix < count($_SESSION['tabPoule']))
afficherTabMatch($_SESSION['tabMatch'], $choix);
	else afficherTabPoule($_SESSION['tabPoule']);
	
	/*echo'<pre>'; 
	print_r($_SESSION['tabMatch']);
	echo'</pre>';*/
	?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#Form1").on('submit', function() {
		
		var set1 = $('#set1score1').val();
		var set2 = $('#set2score1').val();
		var set3 = $('#set3score1').val();
		
		$ajax({
			url: "Traitement/traitementScore.php",
			type: $(this).attr('method'),
			data: $(this).serialize(),
			success function(data){alert(data);}
			});
			
		return false;
	});
});
    </script>

<?php
	
function afficherTabPoule($tabPoule){// affiche le tableau des poules, pour le moment en lignes
	
	echo '<h1>Poules</h1>';
	echo '<hr>';
	
	foreach($tabPoule as $index => $lig)
	{	
		
		echo '<h2 align="center" id="nomPoule"><a href="affichePoule.php?choix='.($index).'" >Poule '.($index+1).'</a></h2>';
		echo '<table border="1" width="200px" cellspacing="0" cellpadding="10" align="center" >';
		foreach($lig as $col)
		{
			echo '<tr><td>'.$col[0].'</td>
			<td>'.$col[1].'</td>
			</tr>';
		}
		echo '</table><br />'; 
	}
	
}


function afficherTabMatch($tabMatch, $choix){//affiche le tableau de match de la poule choix+1
		
		echo '<h2 align="center"> Matches Poule '.($choix+1).'</h2>';
		echo '<hr>';
		echo '<table border="1" width="40%" cellspacing="0" cellpadding="10" align="center">';
		echo '<tr>
					<td>N° Match</td>
		 			<td width="default">Equipe1 </td>
					<td>Terrain</td>
		 			<td>set1</td>
					<td>set2</td>
					<td>set3</td>
					<td width="default">Equipe2 </td>
					<td width="default"> </td>
			</tr>';
		foreach($tabMatch[$choix] as $index => $col)
		{
			echo '<tr>';
			echo'<form id="Form'.($index+1).'" method="post">';
				echo '<td>'.($index+1).'</td>';
				echo '<td>'.$col[0].'</td>';
				echo '<td>Terrain'.$col.'</td>'; 
				echo '<td> <input type="text" name="scoreSet1" maxlength="5" size="2" id="set1score'.($index+1).'"</td>
					  <td> <input type="text" name="scoreSet2" maxlength="5" size="2" id="set2score'.($index+1).'"</td>
					  <td> <input type="text" name="scoreSet3" maxlength="5" size="2" id="set3score'.($index+1).'"</td>';
				echo '<td>'.$col[1].'</td>';
				echo '<td colspan="0" rowspan="0"><input name="Valider" type="submit" value="Valider Match '.($index+1).'"></td>';
			echo '</form>';
			echo '</tr>';
			
		}
		
		echo '</table>';
		echo '<p><br/><br/>';
		echo '<a href="affichePoule.php?choix=-1">Retour à La page des Poules</a></p>';
		
}//Traitement/traitementScore.php?equipe1='.$col[0].'&equipe2='.$col[1].'

?>