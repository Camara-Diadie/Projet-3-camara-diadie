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
        $req =$bdd->prepare('INSERT INTO commentaires_prot (commentaire, nom, prenom, date_creation_titre) VALUES (:commentaire, :nom, :prenom, now())');
        $req->execute([
            ':commentaire'=>$commentaire,
            ':nom'=>$_SESSION['nom'],
            'prenom'=>$_SESSION['prenom']
            ]);
        var_dump('gool');

    }
}
$reponse = $bdd->query('SELECT  prenom, commentaire,date_creation_titre  FROM commentaires_prot');

    

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
        <h2>PROTECTPEOPLE</h2>
        <img class="logo-acteur1"src="../public/img/protectpeople.png" alt="logo">
        <h2>Protectpeople finance la solidarité nationale.<br>Nous appliquons le principe édifié par la Sécurité sociale française en 1945 : permettre à chacun de bénéficier d’une protection sociale. Chez Protectpeople, chacun cotise selon ses moyens et reçoit selon ses besoins.Proectecpeople est ouvert à tous, sans considération d’âge ou d’état de santé.Nous garantissons un accès aux soins et une retraite.Chaque année, nous collectons et répartissons 300 milliards d’euros. Notre mission est double :
            <ul>
                <li>sociale : nous garantissons la fiabilité des données sociales ;</li>
                <li>économique : nous apportons une contribution aux activités économiques.</li>
            </ul> 
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