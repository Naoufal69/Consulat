<?php
if (
    empty($_POST['mail'])
    or empty($_POST['prenom'])
    or empty($_POST['nom'])
    or empty($_POST['passwordOne'])
    or empty($_POST['passwordTwo'])
) {
    header('Location: http://localhost/Consulat/src/FormInscription.php?adv=error');
    exit();
}else{
    header('Location: http://localhost/Consulat/src/FormInscription.php?adv=good');
    exit();
}
