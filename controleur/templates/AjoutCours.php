<html>
<head>
<title>nouveau cours</title>
</head>

<body>
<h1>nouveau cours</h1>

<form action="ControleCours.php" method="get">
    <input type="hidden" name="action" value="ajouter">
    <label for="nom">nom cours</label>
    <input type="text" name="nom" id="nom" />
    <label for="matiere">matiere</label>
    <input name="matiere" id="matiere"></input>
    <input type="submit" value="Créer" />
</form>
</body>

</html>