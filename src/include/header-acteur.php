<?php
if(isset($_SESSION['nom']) AND $_SESSION['prenom'])
{
  
}
else
{
  header('location: ../src/connexion.php');
} ?>
<header>
        
        <img class="logo-gbaf" src="../public/img/GBAF.png" alt="logo">
        <div class="info-session">
            <p class="info-utilisateur"><?php echo $_SESSION['nom'].'  '.$_SESSION['prenom'];?></p>
            <a href="../src/deconnexion.php">deconnexion</a>
        </div>
    </header>