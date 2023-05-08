<?php
require "template/database.php";

//ETAPE 1 - PREPARATION

$requete = $database -> prepare("SELECT * FROM tweet ORDER BY date DESC");

//ETAPE 2 - EXECUTION

$requete -> execute();

//ETAPE 3 - ON EN FAIT UN TRUC
//toutes les données  : tu en fait un tableau de bg 
$tweet = $requete -> fetchall(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require "template/navigation.php"; ?> 
    <main>
    <h1>Bienvenue Sur Twitter !</h1>
    <br>
        <form method="GET" action="search.php">
            <input type="search" name="search" id="" placeholder="Rechercher">
            <button type="submit">Rechercher</button>
        </form>
        <hr>

        <form method="POST" action="insert_tweet.php">
                <textarea name="contenu" rows="5" cols="40"></textarea>
                <button type="submit">Tweet</button>
            </form>
            <br>
            <h2>Tweets</h2>
            <br>
            <?php foreach($tweet as $twt) { ?> 
                <div>
                    <h1><?= $twt['contenu']; ?></h1>
                    <p>Envoyé le : <?= $twt['date'] ?></p>
                    <form class="form" action="delete.php" method="POST">
                        <input type="hidden" name="supp" value="<?= $twt['id'] ?>">
                        <button type="submit">Supp</button>

                    </form>
                </div>
            <?php } ?>
    </main>
</body>
</html>