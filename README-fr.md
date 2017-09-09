
<h1>Créer un système de compte utilisateur dans PHP partie 1</h1>

<br>
<br>
<br>


<p>
  Création en php procédural d'un projet de base regroupant les principales fonctionnalitées d'un système d'espace membre. Ce système permet d'avoir la base d'un projet similaire beaucoup plus complexe.
</p>

<br>

<p>
  Ce code a été réorganisé en POO dans le projet 'POO-Members_area_system_base'
</p>

<br>
<br>

<h2>Structure de la base de données</h2>

<p>
  La structure de la table de la base de données est représentée ci-dessous mais il est possible de renommer la table et les champs en fonction des conventions de chacuns.
</p>

<br>

<ul>
  <li>members</li>
  <ul>
    <li>id</li>
    <li>username</li>
    <li>email</li>
    <li>password</li>
    <li>confirmation_token</li>
    <li>confirmed_at</li>
    <li>reset_token</li>
    <li>reset_at</li>
    <li>remember_token</li>
  </ul>
</ul>
