<?php
$Onglet = "Consulat";
$Style = "./../public/style.css";
require_once('../Include/define.php');
include(str_replace("\\","/",DIR.'./entete.inc.php'));

?>


<main class="site-content">
    <form method='POST' action='./Inscription.php' enctype="multipart/form-data" class="formulaire Inscription">
        <h3>Inscription : </h3>
        <label for='mail'>Mail : </label>
        <input type='text' name='mail' id='mail' placeholder="xyz@exemple.com">
        <label for='passwordOne'>Mot de passe : </label>
        <input type='password' name='passwordOne' id='passwordOne' placeholder="****">
        <label for='passwordTwo'>Confirmez le mot de passe : </label>
        <input type='password' name='passwordTwo' id='passwordTwo' placeholder="****">
        <input type='submit' value='Valider' class="submitButton">
        <h5>Inscrit ? <a href="./../Index.php">Connectez vous</a></h5>
    </form>
</main>

<?php
include(str_replace("\\","/",DIR.'./pied.inc.html'));
