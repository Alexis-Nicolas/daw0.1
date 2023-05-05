<html>
    <head> 
        <title>Liste des cours</title>
    </head>
    <body>
        <h1>Liste des cours</h1>
        <a href="ControleCours.php?action=ajouter">Ajouter un cours</a>
        <ul>
            <?php
            foreach ($cours as $c) {
                echo "<li>";
                ?>
                <a href="ControleCours.php?id=<?php echo $c->getId(); ?>">
                    <?php
                    echo $c->getTitre()."</a></li>";
            }
                    ?>
                
            
            
        </ul>
    </body>
</html>