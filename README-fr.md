# Members_area_system
Create a user account system in PHP part 1


<br><br>


<p>
  Créer un système de membres en PHP procédural. Notre système se composera des fonctionnalitées suivantes:
</p>
<ul>
    <li>Une partie inscription avec confirmation par email</li>
    <li>Une partie connexion / déconnexion, avec une option "Se souvenir de moi".</li>
    <li>Un système de rappel et de modification de mot de passe</li>
    <li>Une page réservée aux membres</li>
</ul>




<br><br>




<h3>1- La structure de base de notre espace membre :</h3>
<ul>
    <li>Dossier css: contient tous nos css</li>      
    <li>Dossier Inc: contient tous les fichiers à inclure dans nos pages</li>       
    <ul>
        <li>header.php définit l'en-tête de nos pages</li>
        <li>footer.php définit le pied de page de nos pages</li>
        <li>functions.php: définit toutes les fonctions du site</li>
    </ul>
</ul>
<ul>
    <li>À la racine du site:</li>
    <ul>
        <li>register.php: permet à l'utilisateur de s'inscrire</li>    
    </ul>
</ul>




<br><br>




<h3>2 - L'inscription de l'utilisateur :</h3>

<p>
    La partie inscription permet aux utilisateurs de se créer un compte.
    On se retrouve avec un formulaire classique qui génère des erreurs si les champs ne sont pas renseignés correctement.
</p>

<br>

<p>Gestion des messages d'erreurs du formulaire : </p>
<pre>
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    }


    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Votre mot de passe n'est pas valide";
    }
</pre>
