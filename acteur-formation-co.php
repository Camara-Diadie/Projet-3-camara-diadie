<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root','' );// variable bdd , connection a la base de donner 

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    
}
var_dump('bonjour');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page acteur FORMATION CO</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="css/img/GBAF.png" alt="logo">
        </div>
        <div class="info-utilisateur"><p><?php echo $_GET['info'];?></p></div>

    </header>
    <section id="contenu-texte">
        <h2>DSA FRANCE</h2>
        <img src="css/img/formation_co.png" alt="logo">
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

    </section>
    <footer>
        <div class="pied-page">
            <a href="mention-legale.html"> Mention légales-&nbsp;</a>
            <a href="contact.html"> Contact</a>

        </div>
        
    </footer>
    
</body>
</html>