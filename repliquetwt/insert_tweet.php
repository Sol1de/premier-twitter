<h1>Informations</h1>

<ul>
    <li><?= $_POST['contenu'] ?></li>
    <li><?= $_POST['date'] ?></li>
</ul>

<?php

require 'template/database.php';

$insert = $database -> prepare("INSERT INTO tweet (contenu) VALUES (:Contenu) ");
$insert -> execute(
    [
        "Contenu" => $_POST['contenu'],
    ]

);

header("Location: index.php"); ?>