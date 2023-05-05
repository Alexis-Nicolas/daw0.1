<html>
<head>
<title>Forum</title>
</head>
<body>
<h1>Forum</h1>

<a href="ControleDiscussion.php?action=ajouter">Créer une discussion</a>
<ul>
<?php foreach ($forum as $f){
    echo '<li><a href="ControleDiscussion.php?id='.$f->getId().'">'.$f->getTitre().'</a></li>';
    } ?>
</ul>
</ul>
</html>