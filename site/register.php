<?php
    //Include file containing site functions
    require_once 'inc/functions.php';


    //Include the page header file
    require 'inc/header.php';


    //Verify that data has been send via the registration form
    if(!empty($_POST)){

        //If there are errors, they are saves in an array
        $errors = array();


        //Check that the username and email fields are not empty and that they are in the correct format
        if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
            $errors['username'] = "Votre pseudo n'est pas valide";
        }

        if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Votre email n'est pas valide";
        }


        //Check that the password field is not empty
        //and that it is the same as the password confirmation field
        if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
            $errors['password'] = "Votre mot de passe n'est pas valide";
        }


        debug($errors);
    }
?>




<h1>S'inscrire</h1>

<!-- Display the register form -->
<form action="" method="post">
    <div class="form-group">
        <label for="">Pseudo</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Confirmer votre mot de passe</label>
        <input type="password" name="password_confirm" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">M'inscrire</button>
</form>



<!-- Include the page footer file -->
<?php require 'inc/footer.php'; ?>
