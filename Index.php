<?php
$Onglet = "Consulat";
include('./entete.inc.php');

?>
<main class="site-content">
        <form method='POST' action='./src/connexion.php' enctype="multipart/form-data" class="formulaire Connexion">
            <label for='mail'>Mail : </label>
            <input type='text' name='mail' id='mail' placeholder="xyz@exemple.com">
            <label for='password'>Mot de passe : </label>
            <input type='password' name='password' id='password' placeholder="****">
        </form>
    </main>

<?php
include('./pied.inc.html');
