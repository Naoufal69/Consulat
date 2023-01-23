<?php

class Users extends Utility
{
    private $connexion;

    /**
     * The function __construct() is a special function that is called when an object is created
     * 
     * @param db The database connection object.
     */
    public function __construct($db)
    {
        $this->connexion = $db;
        parent::__construct();
    }

    /**
     * It checks if the email is already in the database, if not, it checks if the email is valid, if
     * it is, it checks if the two passwords are the same, if they are, it hashes the password and
     * inserts the user in the database.
     * 
     * @param prenom_User_UNSAFE First name
     * @param nom_User_UNSAFE The name of the user
     * @param mail_User_UNSAFE the user's email
     * @param password_User_One The password the user entered
     * @param password_User_Two The second password the user entered
     * 
     * @return The return value is a boolean.
     */
    public function addUser($prenom_User_UNSAFE, $nom_User_UNSAFE, $mail_User_UNSAFE, $password_User_One, $password_User_Two)
    {
        $prenom_User = parent::sanitizeString($prenom_User_UNSAFE);
        $nom_User = parent::sanitizeString($nom_User_UNSAFE);
        $mail_User = parent::sanitizeString($mail_User_UNSAFE);

        $request = "SELECT * FROM users WHERE mail_User = '" . $mail_User . "';";
        $res = $this->connexion->prepare($request);
        $res->execute();
        if ($res->rowCount() == 1) {
            parent::writeInFile("Mail déjà pris - addUser()", 1);
            return false;
        } else {
            if (filter_var($mail_User, FILTER_VALIDATE_EMAIL)) {
                if ($password_User_One == $password_User_Two) {
                    $password = password_hash($password_User_One, PASSWORD_DEFAULT);
                    $addUser = "INSERT INTO users (prenom_User,nom_User,mail_User,password_User) VALUES 
                        ('" . $prenom_User . "','" . $nom_User . "','" . $mail_User . "','" . $password . "');";
                    $res = $this->connexion->prepare($addUser);
                    if ($res->execute()){
                        parent::writeInFile($mail_User." a été ajouté avec succès - addUser()",0);
                        return true;
                    }else{
                        parent::writeInFile("Problème avec la BDD - addUser()", 1);
                        return false;
                    }
                } else {
                    parent::writeInFile("Mauvais mot de passes - addUser()", 1);
                    return false;
                }
            } else {
                parent::writeInFile("Mail non valide - addUser()", 1);
                return false;
            }
        }
    }
}
