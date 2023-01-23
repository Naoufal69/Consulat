<?php

class Utility
{
    protected $_nom_fichier = '../../../Trafics.log';

    /**
     * If the file doesn't exist, create it.
     */
    protected function __construct()
    {
        if (!file_exists($this->_nom_fichier)) {
            fopen($this->_nom_fichier, 'c+b');
        }
    }


    /**
     * It writes a message to a file.
     *
     * @param content The content of the log message
     * @param lvlOfError 0 = success, 1 = error
     */
    protected function writeInFile($content, $lvlOfError)
    {
        $date = date("Y-m-d H:i:s");
        if ($lvlOfError == 0) {
            $logMessage = "[" . $date . "] - SUCCES - " . $content."\n";
        } else {
            $logMessage = "[" . $date . "] - ERROR - " . $content."\n";
        }
        file_put_contents($this->_nom_fichier, $logMessage,FILE_APPEND);
    }

    /**
     * It generates a random string of 10 characters
     * 
     * @return A random string of 10 characters.
     */
    protected function generateRandomString()
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
        for ($i = 0; $i < 10; $i++) {
            $string .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $string;
    }


    /**
     * It takes a string, strips all HTML tags, and adds slashes to it
     *
     * @param string The string to be sanitized.
     *
     * @return The sanitized string.
     */
    protected function sanitizeString($string)
    {
        $string = strip_tags($string);
        $string = addslashes($string);
        return $string;
    }
}
