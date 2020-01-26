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
    $reqUser = $bdd->prepare("SELECT * FROM acteur_utilisateur WHERE id = :id");
    $reqUser->execute([
        ':id'=>$_SESSION['id']
        ]);
    $infoUser = $reqUser->fetch();

    if(isset($_POST['nouveau_nom']) AND !empty($_POST['nouveau_nom']) AND $_POST['nouveau_nom'] != $infoUser['nom']) {
        $nouveau_nom = htmlspecialchars($_POST['nouveau_nom']);
        $insertNom = $bdd->prepare("UPDATE acteur_utilisateur SET nom = :nom WHERE id = :id");
        $insertNom->execute([
            ':nom'=>$nouveau_nom,
            ':id'=>$_SESSION['id']
            ]);
        header('Location: ../public/index.php');
 
        
     }
     if(isset($_POST['nouveau_prenom']) AND !empty($_POST['nouveau_prenom']) AND $_POST['nouveau_prenom'] != $infoUser['prenom']) {
         $nouveau_mprenom = htmlspecialchars($_POST['nouveau_prenom']);
         $insertPrenom = $bdd->prepare("UPDATE acteur_utilisateur SET prenom = :prenom WHERE id = :id");
         $insertPrenom->execute([
             ':prenom'=>$nouveau_prenom,
             ':id'=>$_SESSION['id']
            ]);
         header('Location: ../public/index.php');
      }
    

    if(isset($_POST['nouveau_pseudo']) AND !empty($_POST['nouveau_pseudo']) AND $_POST['nouveau_pseudo'] != $infoUser['pseudo']) {
        $nouveau_pseudo = htmlspecialchars($_POST['nouveau_pseudo']);
        $insertPseudo = $bdd->prepare("UPDATE acteur_utilisateur SET nom_utilisateur = :nouveau_pseudo WHERE id = :id");
        $insertPseudo->execute([
            ':nouveau_pseudo'=> $nouveau_pseudo, 
            ':id'=>$_SESSION['id']
            ]);
        header('Location: ../public/index.php');
    }
    
    if(isset($_POST['nouveau_mdp']) AND !empty($_POST['nouveau_mdp']) AND $_POST['nouveau_mdp'] != $infoUser['mot_de_pass']) {
        $nouveau_mdp = sha1($_POST['nouveau_mdp']);
        $insertmdp = $bdd->prepare("UPDATE acteur_utilisateur  SET mot_de_pass = :nouveau_mdp WHERE id = :id");
        $insertmdp->execute([
            ':nouveau_mdp'=> $nouveau_pseudo,
            ':id'=>$_SESSION['id']
            ]);
        header('Location: ../public/index.php');
       }
           
    if(isset($_POST['nouveau_question']) AND !empty($_POST['nouveau_question']) AND $_POST['nouveau_question'] != $infoUser['question']) {
        $nouveau_question = htmlspecialchars($_POST['nouveau_question']);
        $insertQuestion = $bdd->prepare("UPDATE acteur_utilisateur  SET question = :nouveau_question? WHERE id = :id");
        $insertQuestion->execute([
            ':$nouveau_question'=$nouveau_question, 
            ':id'=>$_SESSION['id']
            ]);
        header('Location: ../public/index.php');
        }
        if(isset($_POST['nouveau_reponse']) AND !empty($_POST['nouveau_reponse']) AND $_POST['nouveau_reponse'] != $infoUser['reponse']) {
            $nouveau_reponse = sha1($_POST['nouveau_reponse']);
            $insertReponse = $bdd->prepare("UPDATE acteur_utilisateur  SET reponse = :nouveau_reponse WHERE id = :id");
            $insertReponse->execute([
                ':nouveau_reponse'=>$nouveau_reponse,
                ':id'=>$_SESSION['id']
            ]);
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
                <input type="text" placeholder=" nouveaux nom" name="nouveau_nom" id="nom" ></br>
                <label for="utilisateur">votre nouveaux prenom : </label>
                <input type="text" placeholder=" nouveaux prenom" name="nouveau_prenom" id="prenom" ></br>
                <label for="utilisateur">votre nouveaux pseudo d'utilisateur : </label>
                <input type="text" placeholder=" nouveaux Pseudo" name="nouveau_pseudo" id="pseudo"  ></br>
                <label for="mot-de-passe">votre nouveaux  mot de passe :</label>
                <input type="password" placeholder="votre nouveaux Mdp" name="nouveau_mdp" id="mdp" ><br>
                <label for="question">Qestion secret:</label>
                <select name="nouveau_question">
                    <option value="">--Choix de la question--</option>
                    <option >Quel est le nom de votre animal</option>
                    <option >Votre coleur préferer</option>
                    <option >Lieu de naissance </option>
                    <option >chiffre préferer</option>
                </select>
                <input type="text" placeholder=" nouvelle réponse" name="nouveau_reponse" id="reponse" ><br>
                <input type="submit"id="submit" name="modifier" value="modifier">
            </form>
    </section>
<?php include("../src/include/footer.php")?>