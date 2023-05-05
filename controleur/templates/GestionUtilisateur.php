
<html>
    <head>
        <title>Gestion des utilisateurs</title>
    </head>
    <body>
        <h1>Gestion des utilisateurs</h1>
        <ul>
            <li><a href="ControleGestionUtilisateur.php?action=ajouter">Ajouter un utilisateur</a></li>
        </ul>
        <p>Bienvenue 
            <?php echo $_SESSION['login']; 
            ?> !</p>

        <table>
            <tr>
                
                <th>Login</th>
                <th>Prénom</th>
                <th>Nom</th>
                
            </tr>
            <?php foreach ($users as $u) { ?>
            <tr>
                
                <?php echo "<td>". $u->getLogin(). "</td>"; ?>
                <?php echo "<td>". $u->getPrenom(). "</td>"; ?>
                <?php echo "<td>". $u->getNom(). "</td>"; ?>
                <?php echo "<td><a href='ControleGestionUtilisateur.php?action=modifier&id=".$u->getId()."'>Modifier</a></td>"; ?>
                <?php echo "<td><a href='ControleGestionUtilisateur.php?action=supprimer&id=".$u->getId()."'>Supprimer</a></td>"; ?>
            </tr>
            <?php } ?>
    </body>

</html>