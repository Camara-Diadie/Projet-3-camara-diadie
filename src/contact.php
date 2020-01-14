<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/contact.css">
    <title>Contact</title>
</head>
<body>
<header>
    <img class="logo-gbaf" src="../public/img/GBAF.png" alt="logo">
    <h1 class="titre-contact">Formulaire de Contact</h1>
    <p>Bonjour est bienvenu dans le formulair de contact de GBAF, Si vous désirez nous contacter pour plus de renseigement:
        <ul>
            <li>Adresse: 147 rue du Géneral Potier 75015 cedex Paris</li>
            <li>Tel: 01-02-03-04-05</li>
            <li>Email: Gbaf.france@contact.fr</li>
            <li>Fax:01-02-03-04-06</li>
        </ul>
    </p>
</header>
<section class="formaulair-contact">
    <form action="">
        <div>
            <label for="name">Nom:</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="mail">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea  id="message" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</section>
<?php include("../src/inlclude/footer.php")?>