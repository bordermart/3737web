<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'Inscription</title>
</head>
<body>

<h2>Formulaire d'Inscription</h2>

<form action="traitement.php" method="post">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>
    
    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="mot_de_passe">Mot de passe :</label><br>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
    
    <input type="submit" value="S'inscrire">
</form>

</body>
</html>