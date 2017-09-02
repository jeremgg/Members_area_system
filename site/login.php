<?php
    //Include file containing site functions
    require_once 'inc/functions.php';


    //verify that the user is trying to connect and that no form fields are empty
    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
        require_once 'inc/db.php';

        session_start();

        ///Save the user according to the email or pseudo entered in the form
        //and that the user has a validated account
        $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
        $req->execute(['username' => $_POST['username']]);
        $user = $req->fetch();


        //If the password entered by the user matches the password entered in the database
        //redirect the user to his personal page
        if(password_verify($_POST['password'], $user->password)){
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] = "Bienvenue, vous êtes connecté à votre compte";
            header('location: account.php');
            exit();
        }
        else{
            $_SESSION['flash']['danger'] = "Identifiant ou mot de passe incorrect";
        }
    }
?>



<!-- Include the page header file -->
<?php require 'inc/header.php'; ?>



<h1>Se connecter</h1>

<!-- Display the register form -->
<form action="" method="post">
    <div class="form-group">
        <label for="">Pseudo ou Email</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mot de passe<a href="forget.php">(J'ai oublié mon mot de passe)</a></label>
        <input type="password" name="password" class="form-control">
    </div>


    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>



<!-- Include the page footer file -->
<?php require 'inc/footer.php'; ?>
