<html>
<head>
<title>Discussion</title>
</head>

<body>
    <h1>Discussion</h1>
    <?php echo $NomDiscution; ?>
    <table>
        <tr>
            
            <th>Contenue</th>
            <th>Date</th>
            <th>Auteur</th>
        </tr>
        <?php
        foreach ($forum as $discussion) {
            echo "<tr>";
            
            echo "<td>" . $discussion->getContenue() . "</td>";
            echo "<td>" . $discussion->getDate() . "</td>";
            echo "<td>" . $discussion->getAuteur() . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <form method="get"> 
        <input type="text" name="contenue" placeholder="contenue">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>