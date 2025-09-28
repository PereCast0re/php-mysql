<?php

session_start();

include_once("mysql.php");

if (isset($_GET['recipe_id'])){
    $id_recette = $_GET['recipe_id'];
    $sqlQuery = $db->prepare('DELETE from recipes where recipe_id = :id');
    $sqlQuery->execute([
        ':id'=> $id_recette
    ]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once('header.php'); ?>
            <h1>Recette supprimer</h1>

    <a href="index.php">Retour a l'accueil</a>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>