<html>
    <head> 
        <title>Profil</title>
    </head>
    <body>
        <h1>Profil</h1>
        <p>Bienvenue 
            <?php echo $_SESSION['login']; 
            ?> !</p>
        <ul>
            <li><?php echo "NOM : " . $_SESSION['nom']; ?></li>
            <li><?php echo "PRENOM : " . $_SESSION['prenom']; ?></li>
            <li><?php echo "LOGIN : " . $_SESSION['login']; ?></li>
            
    </body>
</html>