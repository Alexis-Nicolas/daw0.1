<html>

<head>
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>
    <form action="ControleGestionUtilisateur.php" method="POST">
        <table>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" size="30" maxlength="45"></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" size="30" maxlength="45"></td>
            </tr>
            <tr>
                <td>Login</td>
                <td><input type="text" name="login" size="30" maxlength="45"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="mdp" size="30" maxlength="45"></td>
            </tr>
            <tr>
                <input type="hidden" name="action" value="ajouterUtilisateur">
                <td>Valider</td>
                <td><input type="submit" value="Valider"></td>
            </tr>
        </table>
    </form>
</body>
</html>