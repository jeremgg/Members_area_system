<?php

    //Save url parameters in variables
    $user_id = $_GET['id'];
    $token = $_GET['token'];



    //Connection to the database
    require 'inc/db.php';



    //Execute the query and save the result
    //Retrieve the token of the user whose id is passed as parameter
    $req = $pdo->prepare("SELECT confirmation_token FROM users WHERE id = ?");
    $req->execute([$user_id]);
    $user = $req->fetch();



    //If the token of the query corresponds to the one passed as a parameter
    if($user && $user->confirmation_token == $token){
        die('ok');
    }
    else{
        die('pas ok');
    }

?>
