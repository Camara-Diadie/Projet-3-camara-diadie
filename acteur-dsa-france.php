<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/acteur.css">

    <title>Page acteur DSA FRANCE</title>
</head>
<body>
    <header>
        <img class="logo-gbaf" src="css/img/GBAF.png" alt="logo">
        </div>
        <div class="info-utilisateur"><p><?php echo $_SESSION['nom'].'  '.$_SESSION['prenom'];?></p></div>

    </header>
    <section id="contenu-texte">
        <h2>DSA FRANCE</h2>
        <img class="logo-acteur" src="css/img/Dsa_france.png" alt="logo">
        <h2>Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales. Nous accompagnons les entreprises dans les étapes clés de leur évolution.Notre philosophie : s’adapter à chaque entreprise. Nous les accompagnons pour voir plus grand et plus loin et proposons des solutions de financement adaptées à chaque étape de la vie des entreprises
        </h2>


    </section>
    <section id="commentaires">
        <h3>Commentaires</h3>

    </section>
    <footer>
        <div class="pied-page">
            <a href="mention-legale.html"> Mention légales-&nbsp;</a>
            <a href="contact.html"> Contact</a>

        </div>
        
    </footer>
    
</body>
</html>