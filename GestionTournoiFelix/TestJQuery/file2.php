<?php
if(isset($_POST['pseudo']) && isset($_POST['mail'])) {
    if(($_POST['pseudo'] != '') && ($_POST['mail'] != '')) {
        $reponse = 'ok';
    } else {
        $reponse = 'Les champs sont vides';
    }
} else {
    $reponse = 'Tous les champs ne sont pas parvenus';
}
 
echo $reponse;
?>