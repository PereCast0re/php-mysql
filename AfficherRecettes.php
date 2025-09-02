<?php

// Déclaration du tableau des recettes
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets ! <br> Etape 2 : des saucisses !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : Acheter cela aux traiteur',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ]
];


?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" href="style.css" rel="stylesheet">
</head>
<body>
    <ul>
        <h1 class="title"> Affichage des recettes </h1>
        <?php foreach($recipes as $recipe) {
            if ($recipe['is_enabled'] == true){
                echo '<h2 class="r_title">' . $recipe['title'] . '</h2>' . $recipe['recipe'] . '<br>' .  $recipe['author'] . '<br> <br>';}
            }
        ?>
    </ul>
</body>
</html>