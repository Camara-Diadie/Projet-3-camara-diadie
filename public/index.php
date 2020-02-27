<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Page Utilisateur</title>
</head>
<body>
<?php include("../src/include/header-acteur.php")?>
    
    <section class="presentation">
        <p> Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la reglementation financière française. Sa mission est de promouvoir l'activité bancaire à l'échelle nationale, c'est aussi un interlocuteur privilégié des pouvoirs publics.</p>
        <img class="ilustration" src="../public/img/ilustration.jpg" alt="">
    </section >
            
    <section class="info-acteur">
        <p>Les produits et services bancaires sont nombreux et très variés. Afin de renseigner au mieux les clients, les salariés des 340 agences des banques et assurances en France (agents, chargés de clientèle, conseillers financiers, etc) recherchent sur Internet des informations portant sur des produits bancaires et des financeurs, entre autres. Aujourd’hui, il n’existe pas de base de données pour chercher ces informations de manière fiable et rapide ou pour donner son avis sur les partenaires et acteurs du secteur bancaire, tels que les associations ou les financeurs solidaires. Pour remédier à cela, le GBAF souhaite proposer aux salariés des grands groupes français un point d’entrée unique, répertoriant un grand nombre d’informations sur les partenaires et acteurs du groupe ainsi que sur les produits et services bancaires et financiers. Chaque salarié pourra ainsi poster un commentaire et donner son avis.</p>
        <div class="text-acteur"> 
            <div class="acteur1">
                <img class="logo-acteur" src="../public/img/CDE.png" alt="logo">
                <p class="info">La CDE (Chambre Des Entrepreneurs) accompagne les entreprises dans leurs démarches de formation<p>
                <a class="lien" href="../src/acteur-cde.php">lire la suite</a>
            </div>

            <div class="acteur2">
                <img class="logo-acteur"src="../public/img/Dsa_france.png" alt="logo">
                <p class="info">Dsa France accélère la croissance du territoire et s’engage avec les collectivités territoriales<p>
                <a class="lien" href="../src/acteur-dsa-france.php">lire la suite</a>
            </div>

            <div class="acteur3">
                <img class="logo-acteur" src="../public/img/formation_co.png" alt="logo">
                <p class="info">Formation&co est une association française présente sur tout le territoire. Nous proposons<p>
                <a class="lien" href="../src/acteur-formation-co.php?info">lire la suite</a>
            </div>

            <div class="acteur4">
                <img class="logo-acteur" src="../public/img/protectpeople.png" alt="logo">
                <p class="info" >Protectpeople finance la solidarité nationale. Nous appliquons le principe édifié par<p>
                <a class="lien" href="../src/acteur-protectpeople.php">lire la suite</a>
            </div>
        </div>
    </section>
<?php include("../src/include/footer.php")?>