<!-- index.php -->
<?php
session_start();
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
            <h1>Ajouter votre recette</h1>

            <form action="post_create.php" method="POST">
                <div class="Titre_recettes_add">
                    <p>
                        Titre de la recette
                    </p>
                    <input type="text" id="nom_recette" name="nom_recette" placeholder="Nom de votre recette ici !" required>
                </div>
                <div class="Description_recette_add">
                    <p>
                        Description de votre recette
                    </p>
                    <textarea class="description_recette" id="description_recette" name="description_recette" required></textarea>
                </div>

                <button type="submit">Envoyer</button>
            </form>


    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>