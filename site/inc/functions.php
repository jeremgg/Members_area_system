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



?>
