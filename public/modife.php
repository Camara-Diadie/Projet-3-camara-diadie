<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );// variable bdd , connection a la base de donner 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(exception $e){
    die('erreur:'.$e->getMessage());
}

if(isset($_SESSION['nom']) AND $_SESSION['prenom']){

        $reqUser = $bdd->prepare("SELECT * FROM acteur_utilisateur WHERE id = :id");
        $reqUser->execute([
            ':id'=>$_SESSION['id']
            ]);
        $infoUser = $reqUser->fetch();
            
        if(isset($_POST['nouveauNom']) AND !empty($_POST['nouveauNom']) AND $_POST['nouveauNom'] != $infoUser['nom']) {
            $nouveauNom = htmlspecialchars($_POST['nouveauNom']);
            $insertNom = $bdd->prepare("UPDATE acteur_utilisateur SET nom = :nom WHERE id = :id");
            $insertNom->execute([
                ':nom'=>$nouveauNom,
                ':id'=>$_SESSION['id']
                ]);

            
        }
        if(isset($_POST['nouveauPrenom']) AND !empty($_POST['nouveauPrenom']) AND $_POST['nouveauPrenom'] != $infoUser['prenom']) {
            $nouveauPrenom = htmlspecialchars($_POST['nouveauPrenom']);
            $insertPrenom = $bdd->prepare("UPDATE acteur_utilisateur SET prenom = :prenom WHERE id = :id");
            $insertPrenom->execute([
                ':prenom'=>$nouveauPrenom,
                ':id'=>$_SESSION['id']
                ]);
        }
        
        if(isset($_POST['nouveauPseudo']) AND !empty($_POST['nouveauPseudo']) AND $_POST['nouveauPseudo'] != $infoUser['pseudo']) {
            $nouveauPseudo = htmlspecialchars($_POST['nouveauPseudo']);
            $insertPseudo = $bdd->prepare("UPDATE acteur_utilisateur SET nom_utilisateur = :nouveauPseudo WHERE id = :id");
            $insertPseudo->execute([
                ':nouveauPseudo'=> $nouveauPseudo, 
                ':id'=>$_SESSION['id']
                ]);
        }
        
        if(isset($_POST['nouveauMdp']) AND !empty($_POST['nouveauMdp']) AND $_POST['nouveauMdp'] != $infoUser['mot_de_pass']) {
            $nouveauMdp = sha1($_POST['nouveauMdp']);
            $insertMdp = $bdd->prepare("UPDATE acteur_utilisateur  SET mot_de_pass = :nouveauMdp WHERE id = :id");
            $insertMdp->execute([
                ':nouveauMdp'=> $nouveauMdp,
                ':id'=>$_SESSION['id']
                ]);
        }
            
        if(isset($_POST['nouveauQuestion']) AND !empty($_POST['nouveauQuestion']) AND $_POST['nouveauQuestion'] != $infoUser['question']) {
            $nouveauQuestion = htmlspecialchars($_POST['nouveauQuestion']);
            $insertQuestion = $bdd->prepare("UPDATE acteur_utilisateur  SET question = :nouveauQuestion WHERE id = :id ");
            $insertQuestion->execute([
                ':nouveauQuestion'=>$nouveauQuestion, 
                ':id'=>$_SESSION['id']
                ]);
            }
        if(isset($_POST['nouveauReponse']) AND !empty($_POST['nouveauReponse']) AND $_POST['nouveauReponse'] != $infoUser['reponse']) {
                $nouveauReponse = sha1($_POST['nouveauReponse']);
                $insertReponse = $bdd->prepare("UPDATE acteur_utilisateur  SET reponse = :nouveauReponse WHERE id = :id");
                $insertReponse->execute([
                    ':nouveauReponse'=>$nouveauReponse,
                    ':id'=>$_SESSION['id']
                ]);
                header('Location: ../public/index.php');
                }
                
            else {
            $erreur=  "erreur !";
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
    <title>Page paramettre</title>
</head>
<body>
    <header>
        <img class="logo-gbaf" src="../public/img/GBAF.png" alt="logo">
    </header>

    <section class="titre-connexion">
        <h1>Bienvenue sur GBAF, page de modification</h1>
    </section>

    <section class="formulaire">
            <form method="POST" action="">
                <h1>Parametre de compte GBAF</h1>
                <label for="utilisateur">votre nouveaux nom : </label>
                <input type="text" placeholder=" nouveaux nom" name="nouveauNom" id="nom" ></br>
                <label for="utilisateur">Nouveaux prenom : </label>
                <input type="text" placeholder=" nouveaux prenom" name="nouveauPrenom" id="prenom" ></br>
                <label for="utilisateur">Nouveaux pseudo : </label>
                <input type="text" placeholder=" nouveaux Pseudo" name="nouveauPseudo" id="pseudo"  ></br>
                <label for="mot-de-passe">Nouveaux  mot de passe :</label>
                <input type="password" placeholder="votre nouveaux Mdp" name="nouveauMdp" id="mdp" ><br>
                <label for="question">Qestion secret:</label>
                <select name="nouveauQuestion">
                    <option value="">--Choix de la question--</option>
                    <option >Quel est le nom de votre animal</option>
                    <option >Votre coleur préferer</option>
                    <option >Lieu de naissance </option>
                    <option >chiffre préferer</option>
                </select>
                <input type="text" placeholder=" nouvelle réponse" name="nouveauReponse" id="reponse" ><br>
                <input type="submit"id="submit" name="modifier" value="modifier">
                <?php 
                     if (isset($erreur)) 
                     {
                     ?>
                         <p> <?php echo $erreur ; ?></p>
                     <?php
                     }
         
                     ?>
            </form>
    </section>
<?php include("../src/include/footer.php")?>