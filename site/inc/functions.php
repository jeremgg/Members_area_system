<?php

    /**
     * Debug the code and display the value of a variable
     * @param  string  $variable  The variable to be debugged
     * @return string
     */
    function debug($variable){
        echo '<pre>' . print_r($variable, true) . '</pre>';
    }



    /**
     * Generate a random string with letters and numbers
     * Which are mixed and can be used several times
     * @param int  The number of characters
     * @return string
     */
    function str_random($length){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }



    /**
     * If the user is not logged in, he does not have access to his personal page
     * and he is redirected to the login page
     */
    function logged_only(){
        if(!isset($_SESSION['auth'])){
            //If we do not have a session we create a
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page, vous devez être connecté";
            header('location: login.php');
            exit();
        }
    }



?>
