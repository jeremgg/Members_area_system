# Members_area_system
Create a user account system in PHP part 1


<br><br>


<p>Création d'un système de membres en PHP procédural. Notre système se composera des fonctionnalitées suivantes:</p>
<ul>
    <li>Une partie inscription avec confirmation par email.</li>
    <li>Une partie connexion / déconnexion, avec une option "Se souvenir de moi".</li>
    <li>Un système de rappel et de modification de mot de passe</li>
    <li>Une page réservée aux membres</li>
</ul>




<br><br>




<h3>1- La structure de base de notre espace membre :</h3>

<ul>
    <li>Dossier css : contient tous nos css</li>      
    <li>Dossier Inc : contient tous les fichiers à inclure dans nos pages</li>       
    <ul>
        <li>header.php définit l'en-tête de nos pages</li>
        <li>footer.php définit le pied de page de nos pages</li>
        <li>functions.php: définit toutes les fonctions du site</li>
        <li>db.php : définit la connexion à la base de données</li>
    </ul>
</ul>
<ul>
    <li>À la racine du site:</li>
    <ul>
        <li>register.php: permet à l'utilisateur de s'inscrire</li>
        <li>confirm.php: page de traitement qui valide l'inscription de l'utilisateur</li>  
        <li>login.php: permet à l'utilisateur de se connecter</li>    
        <li>forget.php: page de traitement qui gère la fonctionnalité oubli de mot de passe</li>    
        <li>reset.php: page de traitement qui met à jour le mot de passe de l'utilisteur. Fait suite à la page forget.php</li>     
        <li>logout.php: permet à l'utilisateur de se déconnecter</li>    
        <li>account.php: affiche la page perso de l'utilisateur</li>               
    </ul>
</ul>
