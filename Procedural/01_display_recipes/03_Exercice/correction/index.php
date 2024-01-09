<?php
$recipes = require_once __DIR__.'/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Recettes de Chef</h1>
    <ul>
        <?php foreach($recipes as $recipe): ?>
            <li>
                <h2><?= $recipe['titre']; ?></h2>
                <p><?= $recipe['auteur']; ?><br/>
                Note de la recette : <?= $recipe['note']; ?> ⭐️</p>
                <details>
                    <summary>Ingrédients</summary>
                    <ul>
                        <?php foreach($recipe['ingredients'] as $ingredient): ?>
                            <li><?= $ingredient; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
                <details>
                    <summary>Préparation</summary>
                    <ol>
                        <?php foreach($recipe['etapes'] as $etape): ?>
                            <li><?= $etape; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </details>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>