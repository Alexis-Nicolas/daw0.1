<html>
<head>
<title>Forum</title>
</head>
<body>
<h1>Forum</h1>

<form action="ControleDiscussion.php" method="get">
    <input type="hidden" name="action" value="ajouter">
    <label for="nom">nom</label>
    <input type="text" name="nom" id="nom" />
    <label for="Sujet">Sujet</label>
    <input name="Sujet" id="Sujet"></input>
    <label for="cours">cours</label>
    <select name="cours" id="cours">
        <?php 
         foreach ($cours as $c){
            echo '<option value="'.$c->getId().'">'.$c->getTitre().'</option>';
        } ?>
        
    </select>
    <input type="submit" value="Créer" />
</form>
</html>