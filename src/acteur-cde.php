<?php
session_start();
if(isset($_SESSION['nom']) AND $_SESSION['prenom'])
{
  
}
else
{
  header('location: ../src/connexion.php');
}
     
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e){
    die('erreur:'.$e->getMessage());
}
if(isset($_POST['envoyer'])){
    if(!empty($_POST['commentaire'])){
        $commentaire =htmlspecialchars($_POST['commentaire']);
        $req =$bdd->prepare('INSERT INTO commentaires_cde (commentaire, nom, prenom, date_creation_titre) VALUES (:commentaire, :nom, :prenom, now())');
        $req->execute([
            ':commentaire'=>$commentaire,
            ':nom'=>$_SESSION['nom'],
            'prenom'=>$_SESSION['prenom']
            ]);
        var_dump('gool');

    }
}
$reponse = $bdd->query('SELECT  prenom, commentaire,date_creation_titre  FROM commentaires_cde');

    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Page acteur PROTECTPEOPLE</title>
</head>
<body>
<?php include("../src/include/header-acteur.php")?>
    <section id="contenu-texte">
        <h2>Chambre des Entrepreneurs</h2>
        <img class="logo-acteur4"src="../public/img/CDE.png" alt="logo">
        <h2>Son président est élu 3ans par ses paires, chefs d'entreprise et présidents de CDE.</h2>


    </section>
    <section id="commentaires">
        <h3>Commentaires</h3>
        <form action="" method="POST">
        <label for="commentaire">Votre commentaire</label>
        <input class="champs" type="text" name="commentaire" id="commentaire" size="27px">
        <input type="submit" value="envoyer" name='envoyer'>
        </form>
        
        <h3 class="affichage-commentaire"> les commentaires des nos collaborateur</h3>
		  <?php 
        while($donnees = $reponse->fetch()){
			?>
			<div class="les-commentaire">
			<p><?php echo $donnees['prenom'].'</br>';?></p>
			<p><?php echo $donnees['date_creation_titre'].'</br>';?></p>
			<p><?php echo $donnees['commentaire'].'</br>';?></p>
			</div>
			<?php
        }
        ?>
    </section>
<?php include("../src/include/footer.php")?>