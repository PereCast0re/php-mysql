<?php
session_start();

include_once("mysql.php");


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST['nom_recette']) && isset($_POST['description_recette'])){
    $title =$_POST['nom_recette'];
    $description = $_POST['description_recette'];
    $author = $_SESSION['LOGGED_USER'];
    $enabled = 1;

    // insertion dans la base
    $insertRecipe = $db->prepare('INSERT into recipes  VALUES (recipe_id, :title, :recipe, :author, :isenabled)');
    $insertRecipe->execute([
        ':title' => $title,
        ':recipe' => $description,
        ':author' => $author,
        ':isenabled' => $enabled
    ]);
}

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
            <h1>Recette ajouter avec seccès !</h1>

            <div>
                <h3><?php echo $title ?></h3>
                <br>
                <p>Email <?php echo $author ?></p>
                <br>
                <p>Recette : <?php echo $description ?></p>
            </div>

    <a href="index.php">Retour a l'accueil</a>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>