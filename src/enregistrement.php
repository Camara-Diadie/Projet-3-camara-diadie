<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );// variable bdd , connection a la base de donner 
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(Execption $e){
    die('erreur:'.$e->postMessage());
}



// teste 
if(isset($_POST['enregistrement'])){
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['question']) && !empty($_POST['reponse'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $question = htmlspecialchars($_POST['question']);
        $reponse = sha1($_POST['reponse']);
        $ins = $bdd->prepare ('INSERT INTO acteur_utilisateur (nom,prenom,nom_utilisateur,mot_de_pass,question,reponse) VALUES (:nom, :prenom, :pseudo, :mdp, :question, :reponse)');
        $estExecuter=$ins->execute([
            ':nom'=>$nom,
            ':prenom'=>$prenom,
            ':pseudo'=>$pseudo,
            ':mdp'=>$mdp,
            ':question'=>$question,
            ':reponse'=>$reponse]);
        var_dump($estExecuter);
        header('Location: connexion.php');
    var_dump('hey');
    }
    else{
        echo 'tout les champs ne sont pas renseigner!!!';
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
        <h1>Bienvenue sur GBAF, page d'enregistrement</h1>
    </section>

    <section class="formulaire">
            <form method="POST" action="">
                <h1>Création de compte GBAF</h1>
                <label for="nom">Nom : </label>
                <input type="text" placeholder="Entrer votre Nom" name="nom" id="nom" ><br>
                <label for="prenom">Prénom : </label>
                <input type="text" placeholder="Entrer votre Prénom" name="prenom" id="prenom" ><br>
                <label for="utilisateur">Pseudo d'utilisateur : </label>
                <input type="text" placeholder="Pseudo d'utilisateur" name="pseudo" id="pseudo" ></br>
                <label for="mot-de-passe"> Mot de passe :</label>
                <input type="password" placeholder="votre Mdp" name="mdp" id="mdp" ><br>
                <label for="question">Qestion secret:</label>
                <select name="question">
                    <option value="">--Choix de la question--</option>
                    <option >Quel est le nom de votre animal</option>
                    <option >Votre coleur préferer</option>
                    <option >Lieu de naissance </option>
                    <option >chiffre préferer</option>
                </select>
                <input type="text" placeholder="Réponse" name="reponse" id="reponse" ><br>
                <input type="submit"  id="submit" name="enregistrement" value="Enregistré">
            </form>
    </section>
<?php include("../src/include/footer.php")?>