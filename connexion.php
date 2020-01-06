<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root','');
}
catch(Exception $e)
{
    die('erreur:'.$e->getMessage());
}


?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/connexion.css">
    <title>Page Connexion GBAF</title>
</head>
<body>
    <header class="logo">
            <img class="logo-gbaf"src="css/img/GBAF.png" alt="logo">
    </header>
    <section class="titre-connexion">
            <h1>Bienvenue sur GBAF, page de Connexion</h1>
    </section>

    <section class="formulaire">
        <form class="formulaire-connexion">
                <h1>Se connecter </h1>
                <label for="nom-utilisateur">Nom Utilisateur :</label><input type="text" placeholder="Entrer votre Nom" name="speudo" id="speudo" required></br>
                
                <label for="mot-de-passe">Mot de Passe :</label><input type="password" placeholder="Entrer votre Mot de passe" name="mdp" id="mdp" required></br>
                
                <input type="submit" id="submit" value="Connexion">

        </form>
            <h3>Si vous avez pas encore de compte veuillez vous enregistrer <a href="enregistrement.php">ici</a></h3>
    </section>

    <footer>
            <a href="mention-legale.html"> Mention légales-&nbsp;</a>
            <a href="contact.html"> Contact</a>
    </footer>
    
</body>
</html>