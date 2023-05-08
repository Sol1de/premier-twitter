<h1>Informations</h1>

<ul>
    <li><?= $_POST['nom'] ?></li>
    <li><?= $_POST['prenom'] ?></li>
    <li><?= $_POST['pseudo'] ?></li>
    <li><?= $_POST['mail'] ?></li>
    <li><?= $_POST['mdp'] ?></li>
    <li><?= $_POST['photo'] ?></li>
</ul>

<?php

require 'template/database.php';

$insert = $database -> prepare("INSERT INTO infos (nom, prenom, pseudo, mail, mdp, photo) VALUES (:Nom, :Prenom, :Pseudo, :Mail, :Mdp, :Photo) ");
$insert -> execute(
    [
        "Nom" => $_POST['nom'],
        "Prenom" => $_POST['prenom'],
        "Pseudo" => $_POST['pseudo'],
        "Mail" => $_POST['mail'],
        "Mdp" => $_POST['mdp'],
        "Photo" => $_POST['photo']
    ]

);

header("Location: index.php"); ?>