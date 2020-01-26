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
catch(Execption $e){
    die('erreur:'.$e->postMessage());
}
if(isset($_POST['envoyer'])){
    if(!empty($_POST['commentaire'])){
        $commentaire =htmlspecialchars($_POST['commentaire']);
        $req =$bdd->prepare('INSERT INTO commentaires_co (commentaire, nom, prenom, date_creation_titre) VALUES (:commentaire, :nom, :prenom, now())');
        $req->execute([
            ':commentaire'=>$commentaire,
            ':nom'=>$_SESSION['nom'],
            'prenom'=>$_SESSION['prenom']
            ]);
        var_dump('gool');

    }
}
$reponse = $bdd->query('SELECT  prenom, commentaire,date_creation_titre  FROM commentaires_co');

    

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/acteur.css">

    <title>Page acteur FORMATION CO</title>
</head>
<body>  
<?php include("../src/include/header-acteur.php")?>
    <section id="contenu-texte">
        <h2>DSA FRANCE</h2>
        <img class="logo-acteur3" src="../public/img/formation_co.png" alt="logo">
        <h2>Formation&co est une association française présente sur tout le territoire.<br>Nous proposons à des personnes issues de tout milieu de devenir entrepreneur grâce à un crédit et un accompagnement professionnel et personnalisé.<br>Notre proposition : 
           <ul>
                <li>un financement jusqu’à 30 000€ ;</li>
            	<li>un suivi personnalisé et gratuit ;</li>
                <li>une lutte acharnée contre les freins sociétaux et les stéréotypes.</li>
           </ul>
            
            Le financement est possible, peu importe le métier : coiffeur, banquier, éleveur de chèvres… .<br> Nous collaborons avec des personnes talentueuses et motivées.<br>
            Vous n’avez pas de diplômes ? Ce n’est pas un problème pour nous ! Nos financements s’adressent à tous.
            
        </h2>


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