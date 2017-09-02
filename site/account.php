<?php
    session_start();

    //Include file containing site functions
    require_once 'inc/functions.php';


    //If the user is not logged in, he does not have access to his personal page
    logged_only();
?>



<!-- Include the page header file -->
<?php require 'inc/header.php'; ?>



<!-- Display user's nickname -->
<h1>bonjour <?= $_SESSION['auth']->username; ?> et bienvenue !!!</h1>


<!-- Display the form to change the password -->
<form action="" method="post">
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Changer votre mot de passe">
    </div>
    <div class="form-group">
        <input type="password" name="password-confirm" class="form-control" placeholder="Confirmation de votre mot de passe">
    </div>
    <button class="btn btn-primary">Changer mon  mot de passe</button>
</form>



<!-- Include the page footer file -->
<?php require 'inc/footer.php'; ?>
