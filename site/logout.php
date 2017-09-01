<?php

    session_start();


    //Delete the authentication session
    unset($_SESSION['auth']);


    //Display a disconnection confirmation message
    $_SESSION['flash']['success'] = "Vous êtes maintenant déconnecté";


    //Redirect the user to the login page
    header('location: login.php');
?>
