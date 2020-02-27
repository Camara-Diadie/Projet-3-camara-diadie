<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Exception $e){
    die('erreur:'.$e->getMessage());
}
if(isset($_POST['connexion'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = sha1($_POST['mdp']);
    if(!empty($pseudo) && !empty($mdp)){
        $requet = $bdd->prepare('SELECT * FROM acteur_utilisateur WHERE nom_utilisateur = ? AND mot_de_pass = ?');
        $requet->execute(array($pseudo, $mdp));
        $userExist = $requet->rowCount();

        if($userExist ==1){
            $userinfo= $requet->fetch();
            $_SESSION['nom'] =$userinfo['nom'];
            $_SESSION['prenom'] =$userinfo['prenom'];
            $_SESSION['id'] =$userinfo['id'];
            $_SESSION['pseudo'] =$userinfo['pseudo'];
            $_SESSION['mdp'] =$userinfo['mdp'];
            


            header('Location: ../public/index.php?info='.' '.$_SESSION['nom'].'  '.$_SESSION['prenom']);

        }
        else{
            $erreur =' Les informations ne sont pas correctes !!! ';
        }
    }
    else{
        $erreur=' Veillez rensigner touts les champs svp!!!';
    }
    
    
}

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Page Connexion GBAF</title>
</head>
<body>
    <header class="titre-connexion">
        <img class="logo-gbaf"src="../public/img/GBAF.png" alt="logo">
    </header>
    
    <section class="formulaire">
        <form method="POST" action="">
            <h1>Se connecter </h1>
            <label for="nom-utilisateur">Pseudo </label></br><input type="text" placeholder=" Votre Pseudo" name="pseudo" id="pseudo" ></br>
            <label for="mot-de-passe">Mot de passe</label></br><input type="password" placeholder=" Votre Mot de passe" name="mdp" id="mdp" ></br>
            <input type="submit" name="connexion" id="submit" value="Connexion"></br>
            <h3><a href="">Mots de passe oublier ?</a></h3>
            <h3><a href="../src/enregistrement.php">Inscription ici</a></h3>
            <?php 
            
            if (isset($erreur)) 
            {
            ?>
                <p class="message"> <?php echo $erreur ; ?></p>
            <?php
            }

            ?>
        </form>    
    </section>
}
<?php include("../src/include/footer.php")?>