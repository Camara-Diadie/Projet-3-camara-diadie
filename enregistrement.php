<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf', 'root','');
}
catch(Exception $e)
{
    die('erreur:'.$e->getMessage());
}

        $insertActeur = $bdd->prepare('INSERT INTO acteur_utilisateur(nom, prenom, nom_utilisateur, mot_de_pass, question, reponse) VALUES (?, ?, ?, ?, ?, ?)');
        $insertActeur->execute(array($nom, $prenom, $speudo, $mdp, $question, $secret));
        header('Location: connexion.html');





?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/enregistrement.css">
    <title>Page enregistrement</title>
</head>
<body>
    <header class="logo">
        <img class="logo-gbaf" src="css/img/GBAF.png" alt="logo">
    </header>

    <section class="titre-connexion">
        <h1>Bienvenue sur GBAF, page d'enregistrement</h1>
    </section>

    <section class="formulaire">
        <div class="formulaire-enregistrement">
            <form method="POST" action="">
                <h1>Création de compte GBAF</h1>
                <label for="nom">Nom : </label>
                <input type="text" placeholder="Entrer votre Nom" name="nom" id="nom" required><br>
                <label for="prenom">Prénom : </label>
                <input type="text" placeholder="Entrer votre Prénom" name="prenom" id="prenom" required><br>
                <label for="utilisateur">Nom d'utilisateur : </label>
                <input type="text" placeholder="Nom d'utilisateur" name="speudo" id="utilisateur" required></br>
                <label for="mot-de-passe"> Mot de passe :</label>
                <input type="password" placeholder="votre Mdp" name="mdp" id="mot-de-passe" required><br>
                <label for="question">Qestion secret <SELECT name="question" size="0"><OPTION>le nom de votre animal<OPTION>le nom de votre meilleur ami(e)</SELECT></label>
                <input type="text" placeholder="Réponse" name="secret" id="secret" required><br>
                <input type="submit"  id="submit" name="teste" value="Enregistré">
            </form>
        </div>
    </section>
    <footer>
            <a href="page-mention-legale.html"> Mention légales-&nbsp;</a>
            <a href="page-contact.html"> Contact</a>
    </footer>
    
</body>
</html>