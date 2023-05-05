<html>
    <head>
        <title>Accueil</title>
    </head>
    <body>
        <h1>Accueil</h1>
        <!-- barre de navigation -->
        <ul>
            <li><a href="ControleListeCours.php">Listes des Cours</a></li>
            <li><a href="ControleForum.php">Forum</a></li>
            <?php if($isAdmin) { ?>
            <li><a href="ControleGestionUtilisateur.php">Gestion utilisateurs</a></li>
            <?php } ?>
            <li><a href="ControleProfil.php">Profil</a></li>
                <?php if($isProf) { ?>
            <li><a href="ControleInscriptionCours.php">Inscription Cours</a></li>
            <?php } ?>
            <li><a href="ControleAccueil.php?action=deconnexion">Déconnexion</a></li>
        </ul>
        <p>Bienvenue 
            <?php echo $_SESSION['login']; ?> !</p>
            <p> Vous êtes connecté en tant que
            <?php
            if($isAdmin) {
                echo 'administrateur';
            } else if ($isProf) {
                echo 'professeur';
            }else {
                echo 'étudiant';
            }
            ?>
            </p>
            
    </body>

        
</html>