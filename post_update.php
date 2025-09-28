<?php
session_start();

include_once("mysql.php");

if(isset($_POST["nom_recette"]) && isset($_POST["description_recette"]) && isset($_POST['id'])){
    $new_nom = $_POST["nom_recette"];
    $new_description = $_POST["description_recette"];
    $id = $_POST["id"];

    //insertion bdd
    $update = $db->prepare("UPDATE recipes set title = :new_title, recipe = :new_recipe where recipe_id = :id ");
    $update->execute([
        ":new_title"=> $new_nom,
        ":new_recipe"=> $new_description,
        ":id"=> $id
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
            <h1>Recette modifié avec seccès !</h1>
            <div class="info_update">
                <p>Votre recette misea jour <?php echo($_SESSION['LOGGED_USER']) ?></p>
                <br>
                <p>Titre : <?php echo($new_nom) ?></p>
                <br>
                <p>Description :</p>
                <br>
                <p><?php echo($new_description) ?></p>
            </div>
    <a href="index.php">Retour a l'accueil</a>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>