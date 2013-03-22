<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function() {
    // lorsque je soumets le formulaire
    $('#monForm').on('submit', function() {
 
        // je récupère les valeurs
        var pseudo = $('#pseudo').val();
        var mail = $('#mail').val();
 
 
            // appel Ajax
            $.ajax({
                url: $(this).attr('action'), // le nom du fichier indiqué dans le formulaire
                type: $(this).attr('method'), // la méthode indiquée dans le formulaire (get ou post)
                data: $(this).serialize(), // je sérialise les données (voir plus loin), ici les $_POST
                success: function(html) { // je récupère la réponse du fichier PHP
                    alert(html); // j'affiche cette réponse
                }
            });
        
        return false; // j'empêche le navigateur de soumettre lui-même le formulaire
    });
});
</script>

<form id="monForm" action="file2.php" method="post">
    <label for="pseudo">Pseudo</label>
    <input type="text" id="pseudo" name="pseudo" />
 
    <label for="mail">Email</label>
    <input type="email" id="mail" name="mail" />
 
    <input type="submit" id="envoyer" value="Envoyer" />
</form>