<html>
<head>
<title>Modifier un utilisateur</title>
</head>
<body>
<h1>Modifier un utilisateur</h1>
<form action="ControleGestionUtilisateur.php" method="POST">
<table>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?php echo $user->getNom(); ?>" size="30" maxlength="45"></td>
</tr>
<tr>
<td>Prénom</td>
<td><input type="text" name="prenom" value="<?php echo $user->getPrenom(); ?>" size="30" maxlength="45"></td>
</tr>
<tr>
<td>Login</td>
<td><input type="text" name="login" value="<?php echo $user->getLogin(); ?>" size="30" maxlength="45"></td>
</tr>
<tr>
<input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
<input type="hidden" name="action" value="modifierUtilisateur">
<td>Valider</td>
<td><input type="submit" value="Valider"></td>
</tr>
</table>
</html>