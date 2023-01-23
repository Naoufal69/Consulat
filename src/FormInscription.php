<?php
$Onglet = "Consulat";
$Style = "./../public/style.css";
require_once('../Include/define.php');
include(str_replace("\\", "/", DIR . './entete.inc.php'));

?>


<main class="site-content">
    <form method='POST' action='./Inscription.php' enctype="multipart/form-data" class="formulaire Inscription">
        <h3>Inscription : </h3>
        <label for='mail'>Mail : </label>
        <input type='text' name='mail' id='mail' placeholder="xyz@exemple.com">
        <label for='mail'>Prenom : </label>
        <input type='text' name='prenom' id='prenom'>
        <label for='mail'>Nom : </label>
        <input type='text' name='nom' id='nom'>
        <label for='passwordOne'>Mot de passe : </label>
        <input type='password' name='passwordOne' id='passwordOne' placeholder="****">
        <label for='passwordTwo'>Confirmez le mot de passe : </label>
        <input type='password' name='passwordTwo' id='passwordTwo' placeholder="****">
        <input type='submit' value='Valider' class="submitButton">
        <h5>Inscrit ? <a href="./../Index.php">Connectez vous</a></h5>
    </form>
    <?php
        if(isset($_GET['adv'])){
            switch($_GET['adv']){
                case "badform":
                    echo "<h5 class='error'>Vous n'avez pas remplie le formulaire correctement</h5>";
                    break;
                case "error":
                    echo "<h5 class='error'>Les données remplies ne sont pas correctes</h5>";
                    break;
                case "good" :
                    echo "<h5 class='no error'>Inscrit avec succès</h5>";
                    break;
            }
        }
    ?>
</main>

<?php
include(str_replace("\\", "/", DIR . './pied.inc.html'));
