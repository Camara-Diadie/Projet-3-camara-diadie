<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );// variable bdd , connection a la base de donner 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Execption $e){
    die('erreur:'.$e->postMessage());
}

if(isset($_SESSION['nom']) AND $_SESSION['prenom'])
{
    $reqUser = $bdd->prepare("SELECT * FROM acteur_utilisateur WHERE id = ?");
    $reqUser->execute(array($_SESSION['id']));
    $infoUser = $reqUser->fetch();

    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $infoUser['nom']) {
        $newnom = htmlspecialchars($_POST['newnom']);
        $insertnom = $bdd->prepare("UPDATE acteur_utilisateur SET nom = ? WHERE id = ?");
        $insertnom->execute(array($newnom, $_SESSION['id']));
        header('Location: ../public/index.php');
 
        
     }
     if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $infoUser['prenom']) {
         $newmprenom = htmlspecialchars($_POST['newprenom']);
         $insertprenom = $bdd->prepare("UPDATE acteur_utilisateur SET prenom = ? WHERE id = ?");
         $insertprenom->execute(array($newprenom, $_SESSION['id']));
         header('Location: ../public/index.php');
      }
    

    if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $infoUser['pseudo']) {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        $insertpseudo = $bdd->prepare("UPDATE acteur_utilisateur SET nom_utilisateur = ? WHERE id = ?");
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        header('Location: ../public/index.php');
    }
    
    if(isset($_POST['newmdp']) AND !empty($_POST['newmdp']) AND $_POST['newmdp'] != $infoUser['mot_de_pass']) {
        $newmdp = sha1($_POST['newmdp']);
        $insertmdp = $bdd->prepare("UPDATE acteur_utilisateur  SET mot_de_pass = ? WHERE id = ?");
        $insertmdp->execute(array($newmdp, $_SESSION['id']));
        header('Location: ../public/index.php');
       }
           
    if(isset($_POST['newquestion']) AND !empty($_POST['newquestion']) AND $_POST['newquestion'] != $infoUser['question']) {
        $newquestion = htmlspecialchars($_POST['newquestion']);
        $insertquestion = $bdd->prepare("UPDATE acteur_utilisateur  SET question = ? WHERE id = ?");
        $insertquestion->execute(array($newquestion, $_SESSION['id']));
        header('Location: ../public/index.php');
        }
        if(isset($_POST['newreponse']) AND !empty($_POST['newreponse']) AND $_POST['newreponse'] != $infoUser['reponse']) {
            $newreponse = sha1($_POST['newreponse']);
            $insertreponse = $bdd->prepare("UPDATE acteur_utilisateur  SET reponse = ? WHERE id = ?");
            $insertreponse->execute(array($newreponse, $_SESSION['id']));
             header('Location: ../public/index.php');
            }
         else {
         echo "erreur !";
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
    <title>Page enregistrement</title>
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
                <input type="text" placeholder=" nouveaux nom" name="newnom" id="nom" ></br>
                <label for="utilisateur">votre nouveaux prenom : </label>
                <input type="text" placeholder=" nouveaux prenom" name="newprenom" id="prenom" ></br>
                <label for="utilisateur">votre nouveaux pseudo d'utilisateur : </label>
                <input type="text" placeholder=" nouveaux Pseudo" name="newpseudo" id="pseudo"  ></br>
                <label for="mot-de-passe">votre nouveaux  mot de passe :</label>
                <input type="password" placeholder="votre nouveaux Mdp" name="newmdp" id="mdp" ><br>
                <label for="question">Qestion secret:</label>
                <select name="newquestion">
                    <option value="">--Choix de la question--</option>
                    <option >Quel est le nom de votre animal</option>
                    <option >Votre coleur préferer</option>
                    <option >Lieu de naissance </option>
                    <option >chiffre préferer</option>
                </select>
                <input type="text" placeholder=" nouvelle réponse" name="newreponse" id="reponse" ><br>
                <input type="submit"id="submit" name="modifier" value="modifier">
            </form>
    </section>
<?php include("../src/include/footer.php")?>