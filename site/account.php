<?php
    session_start();

    //Include file containing site functions
    require_once 'inc/functions.php';

    //Include the page header file
    require 'inc/header.php';
?>



<h1>Votre compte</h1>



<?php debug($_SESSION); ?>



<!-- Include the page footer file -->
<?php require 'inc/footer.php'; ?>
