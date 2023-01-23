<?php

class Database
{
    private $host = "localhost";
    private $db_name = "consulat_db";
    private $password = "";
    private $login = "root";
    public $connexion;


    /**
     * It connects to the database.
     * 
     * @return The connection to the database.
     */
    public function getConnection()
    {
        $this->connexion = null;

        try {
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->login, $this->password);
            $this->connexion->exec("set names utf8");
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        return $this->connexion;
    }
}
