<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Connexion</h1>
    <form class="form" method="POST" action="insert_user.php">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prenom" required>
                <input type="text" name="pseudo" placeholder="Pseudo" required>
                <input type="text" name="mail" placeholder="Mail" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <input type="text" name="photo" placeholder="URL Photo" required>
                <button type="submit">Envoyer</button>
    </form>
</body>
</html>