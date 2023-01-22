<?php
$Onglet = "Consulat";
$Style = "./public/style.css";
require_once('./Include/define.php');
include(str_replace("\\","/",DIR.'\entete.inc.php'));

?>
<main class="site-content">
    <form method='POST' action='./src/connexion.php' enctype="multipart/form-data" class="formulaire Connexion">
        <h3>Connexion : </h3>
        <label for='mail'>Mail : </label>
        <input type='text' name='mail' id='mail' placeholder="xyz@exemple.com">
        <label for='password'>Mot de passe : </label>
        <input type='password' name='password' id='password' placeholder="****">
        <input type='submit' value='Valider' class="submitButton">
        <h5>Pas inscrit ? <a href="./src/FormInscription.php">Inscrivez vous</a></h5>
    </form>
</main>

<?php
include(str_replace("\\","/",DIR.'\pied.inc.html'));
