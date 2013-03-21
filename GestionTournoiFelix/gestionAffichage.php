<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jQuery/jquery.form.js"></script> 
<?php
require('traitementPoule.php');
		
if(!isset($_GET['choix']))$choix=-1;
	else $choix = $_GET['choix'];
if ($choix >=0 AND $choix < count($_SESSION['tabPoule']))
afficherTabMatch($_SESSION['tabMatch'], $choix);
	else afficherTabPoule($_SESSION['tabPoule']);
	
	/*echo'<pre>'; 
	print_r($_SESSION['tabMatch']);
	echo'</pre>';
	*/
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
			echo'<form id="myForm" action="affichePoule.php?choix=-1">';
				echo '<td>'.$col[0][0].'</td>';
				echo '<td>Terrain'.$col.'</td>'; 
				echo '<td> <input type="text" name="scoreSet1" maxlength="5" size="2" value="  /  "> </td>
					<td> <input type="text" name="scoreSet2" maxlength="5" size="2" value="  /  "> </td>
					<td> <input type="text" name="scoreSet3" maxlength="5" size="2" value="  /  "> </td>';
				echo '<td>'.$col[1][0].'</td>';
				echo '<td colspan="0" rowspan="0"><input name="Valider" type="submit" value="<?php echo $index; ?> "/></td>';
			echo '</form>';
			echo '</tr>';
			
		}
		
		echo '</table>';
		echo '<p><br/><br/>';
		echo '<a href="affichePoule.php?choix=-1">Retour à La page des Poules</a></p>';
		?><script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
        }); 
    </script>
	<?php
}

?>