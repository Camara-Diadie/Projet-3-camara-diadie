<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );// variable bdd , connection a la base de donner 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Execption $e){
    die('erreur:'.$e->postMessage());
}
if(isset($_POST['envoyer'])){
    if(!empty($_POST['commentaire'])){
        $commentaire =htmlspecialchars($_POST['commentaire']);
        $req =$bdd->prepare('INSERT INTO commentaires (commentaire, nom, prenom) VALUES (:commentaire, :nom, :prenom)');
        $req->execute([
            ':commentaire'=>$commentaire,
            ':nom'=>$_SESSION['nom'],
            'prenom'=>$_SESSION['prenom'],
            ]);
        var_dump('gool');
    }
}
$reponse = $bdd->query('SELECT  nom, prenom, commentaire FROM commentaires');
while($donnees = $reponse->fetch())
{
    

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
        <form action="" method="POST">
        <label for="commentaire">Votre commentaire</label>
        <input type="text" name="commentaire" id="commentaire">
        <input type="submit" value="envoyer" name='envoyer'>
        </form>
        <div class="affichage-commentaire">
        <h3>les commentaires des nos collaborateur</h3>
        


        </div>
<?php
}
$donnees->closeCursor();
?>
    </section>
    <footer>
        <div class="pied-page">
            <a href="mention-legale.html"> Mention légales-&nbsp;</a>
            <a href="contact.html"> Contact</a>

        </div>
        
    </footer>
    
</body>
</html>