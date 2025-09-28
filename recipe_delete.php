<?php
session_start();

include_once("mysql.php");

$id_recette = $_GET['recipe_id'];
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
            <h1>Etes vous sur de supprimer cette recette</h1>
            <?php
                if (isset($id_recette)){
                    $sqlQuery = $db->prepare("SELECT * FROM recipes where recipe_id = :id");
                    $sqlQuery->execute([
                        ":id"=> $id_recette
                    ]);
                    $recipes = $sqlQuery->fetch();
                }
            ?>

            <div>
                <h3><?php echo($recipes['title']); ?></h3>
                <br>
                <p>Recette : <?php echo($recipes['recipe']); ?></p>
            </div>
            <div>
                <a href="final_delete_recipe.php?recipe_id=<?php echo($id_recette) ?>" >Supprimer</a>
                <a href="index.php">Accueil</a>
            </div>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>