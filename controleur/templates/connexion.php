<html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <h1>Connexion</h1>
        <form action="ControleConnexion.php" method="post">
            <input type="hidden" name="action" value="connexion">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
        </form>
    </body>
</html>