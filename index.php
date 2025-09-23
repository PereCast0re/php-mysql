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
            <h1>Site de recettes</h1>
            <!-- inclusion des variables et fonctions -->
        <?php
            include_once('variable.php');
            include_once('functions.php');
        ?>
        <!-- inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>

        <!-- inclusion du login -->
        <?php include_once('login.php'); ?>

        <!-- On se connecte à MySQL -->
        <?php include_once('mysql.php'); ?>

        <!-- Si tout va bien, on peut continuer -->
        <?php
            // On récupère tout le contenu de la table recipes
            $sqlQuery = 'SELECT * FROM recipes';
            $recipesStatement = $db->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();
        ?>

        <?php if(isset($_SESSION['LOGGED_USER'])): ?>
            <?php foreach(get_recipes($recipes) as $recipe) : ?>
                    <article>
                        <h3><?php echo $recipe['title']; ?> </h3>
                        <div><?php echo $recipe['recipe']; ?> </div>
                        <i><?php echo display_author($recipe['author'], $users); ?> </i>
                    </article>
            <?php endforeach ?>
        <?php endif ?>
        
        <br>

        <a href="ajout_recette_form.php">Ajouter une recette</a>

        <br>
    
        <!--Btn de redirection page contact-->
        <a href='contact.php'>Contactez nous</a>
    </div>
    <!-- inclusion du bas de page du site -->
    <?php include_once('footer.php'); ?>
</body>
</html>