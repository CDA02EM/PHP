# 03_Exercice
1. Créez un fichier **index.php** et un fichier **bootstrap.php**, dans ce dernier fichier récupérer les données et créez une fonction qui ordonne les recettes.
Pensé à utiliser la [constante magique](https://www.php.net/manual/fr/language.constants.magic.php) `__DIR__`
```php
// bootstrap.php

$recipes = // ...récupérer données

function sort_recipes(array $recipes): array
{
    // ...retourner les recettes triées
}
```
```php
// index.php

<?php
// ...récupérer les données triées; 
// Pensé à bien fermer la balise et à mettre le moins d'espace possible si vous affiché du code HTML par la suite
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de Chef</title>
</head>
<body>
<h1>Recettes de Chef</h1>
    <!-- Afficher dans une liste HTML 
    <ul>
        <li></li>
    </ul> -->
</body>
</html>
```