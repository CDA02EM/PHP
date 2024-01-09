<?php
// Les tableaux
/* 
Les tableaux peuvent être déclaré de deux manières :
*/
$shoppingList = [];
$shoppingList = array();
// On a aussi cette troisième astuce, mais il lui faudra atribuer une première valeur.
// Cette manière de fair agit comme array_push(); La valeur attribué sera ajouté comme dernier index dans le tableau, et pas besoin de déclarer au préalable le tableau.
$shoppingList[] = 'première valeur';

/* 
Les tableaux sont tous des structures de données. Il en existe trois types :
*/
// Tableaux numériques
$nameList = ['Benoit', 'Sophie', 'Vanessa', 'Eliot'];
// Tableaux associatifs
$gameScores = [
    'Lucas' => 42,
    'Delphine' => 64,
];
// Tableaux multidimensionnels. C'est un tableau associatif ou numérique mais qui comporte d'autres tableaux
$recipes = [
    'tiramisu' => [
        'autor' => 'Mathieu',
        'ingredients' => [
            'mascarpon',
            'biscuit boudoir',
            'café',
        ],
    ],
    'Tarte au citron' => [
        'autor' => 'Sacha',
        'ingredients' => [
            'maïzena',
            'citron',
            'sucre',
        ],
    ],
];

/* 
Décomposition et déconstruction
*/
// Déstructuration
$coffeeTime = ['coffee', 'brown', 'cafeine'];
[$a, $b, $c] = $coffeeTime;
echo "$a is $b and $c makes it special";

// Déconstrution
$user = ['name' => 'Sébastient', 'age' => 38, 'hobby' => 'cuisine'];
[
    'name' => $userName,
    'hobby' => $userHobby,
] = $user;
echo "le hobby de $userName est la $userHobby";

/* 
Passage par référence
Vous aurais remarqué que certaines fonctions affectent directement le tableau passé en argument, c'est par ce qu'il récupère la référence du tableau pour le modifier.
https://www.php.net/manual/fr/language.references.pass.php
*/
// L'esperluette vous permet de récupérer la référence du tableau, sans, vous récupérer seulement une copy
function addSomthing(&$user) {
    $user['job'] = 'développeur';
}
// attention, quand vous parcourez un tableau, et que vous souhaitez modifier les valeurs du tableau, ils doivent être passées par références.

/* 
Parcourir un tableau avce foreach
*/
// Vous pouvez parcourir les valeurs d'un tableau de la manière suivante
foreach($user as $userInfo) {
    var_dump($userInfo);
}

// Vous pouvez récupérer les clés de cette façcon :
foreach($user as $field => $userInfo) {
    echo $field."\n";
    var_dump($userInfo);
}

// Pour modifier les valeurs par référence
foreach($nameList as &$name) {
    // ucfirst() mes le premier caractère en majuscule.
    // https://www.php.net/manual/fr/function.ucfirst
    ucfirst($name);
}

/* 
Les spreads operators
*/
$names = ['erike', 'stephane', 'auror'];
// Les spreads operators permettent de décomposer un tableau et de ne récupérer que les valeurs. Ils sont très pratiques dans les fonctions quand on ne connait pas le nombre d'arguments qui sera pris à l'avance.
var_dump(...$names);
var_dump('Eliot', 'Johnatan');
// Dans une fonction, la variable précédé par les spreads operators est un tableau.
function mergeNames(...$names) {
    return implode(' ', $names);
}
echo mergeNames('Eliot', 'Johnatan', ...$names);
// Eliot Johnatan erike stephane auror

/* 
Les fonctions natives pour manipuler les tableaux.
En PHP il y a beaucoup de fonction native (pas moins de 9000...), ici je vous en cite quelques unes; N'hésité pas à faire des recherches, vous pouriez trouver des pépites !
*/
// Ajouter avant/après, dépiller avant/après
// Empile un element dans un tableau; Équivalent à $shoppingList[] = 'Mayonnaise';
array_push($shoppingList, 'Mayonnaise');

// Enfile un element au début d'un tableau
array_shift($shoppingList, 'Macaron');

// dépile un element et le returne
array_pop($shoppingList);

// dépile un element au début en le retourne
array_unshift($shoppingList);

// Les fonctions de trie
// https://www.php.net/manual/fr/array.sorting.php

// trie par ordre croissant mais redéfinit des index; remplace les clés par des index sur un tableau associatif
// version décroissante : rsort();
sort($shoppingList);

// trie par ordre croissant mais conserve les clés
// version décroissante : arsort();
asort($gameScores);

// trie par ordre croissant en fonction des clés
// version décroissante : krsort();
ksort($recipes);

// trie un tableau avec une fonction de comparaison tout en gardant les clés.
uasort($recipes, function($a, $b) {
    /* 
    La fonction de rappel (callback) doit comparer $a à $b. 
        si $a est plus petit que $b, alors retourne -1, 
        si $a est égale à $b, alors retourne 0 // s'il sont égales, met $a, puis $b à la suite,
        si $a est plus grand, alors retourne 1
    */
    return count($a['ingredients']) < count($b['ingredients']) ? -1 : 1;
});
// On reviendra sur les fonctions qu'on peut passer en argument (callback, fonction anonyme, etc...)

// Filtrer un tableau
// array_filter() retourne un nouveau tables 
array_filter($recipes, function($recipe) {
    return count($recipe['ingredients']) < 4;
});

// array_map() parcour un tableau avec une fonction callback, la fonction retourne un nouveau tableau de même longueur dont les elements sont les valeurs retournées par la fonction callback
$gameScoresAverages = array_map(function($score) {
    return $score / 100;
}, $gameScores);

// chercher dans un tableau une valeur et retourner la clé
$vanessaKey = array_search('Vanessa', $nameList);

// chercher si une clés existe
array_key_exists('tiramisu', $recipes);
/* 
D'une manière plus génerale, la fonction isset() permet de vérifier si une variable existe
    $i = 0;
    echo isset($i) ? 'la variable $i existe' : 'il n\'y a pas de variable $i...';
    // la variable $i existe

Avec une valeur au sein d'un tableau nous aurions fait de cette sorte :
    $user = ['name' => 'Sébastien'];
    echo isset(user['name']) ? 'l\'utilisateur à bien un nom !' : 'Nous ne connaissons pas son identité';
    // l'utilisateur à bien un nom !
*/

// cherche si une valeur se trouve dans un tableau
in_array('Sophie', $nameList);

// Récupérer que les clés d'un tableau dans un autre tableau
$players = array_keys($gameScores);

// Récupérer que les valeurs d'un tableau dans un autre tableau
$allScores = array_values($gameScores);

// Compter le nombre de répétitions des valeurs dans un tableau
// array_count_values() retourne un tableau dont les clés sont les valeurs, et les valeurs, sont le nombre d'occurences dans le tableau
$words = ['Dans','le','port','d\'Amsterdam','Y','a','des','marins','qui','chantent','Les','rêves','qui','les','hantent','Au','large','d\'Amsterdam','Dans','le','port','d\'Amsterdam','Y','a','des','marins','qui','dorment','Comme','des','oriflammes','Le','long','des','berges','mornes'];
['d\'Amsterdam' => $amsterdameOccurences] = array_count_values($words);
echo "amsterdam : $amsterdameOccurences";
// amsterdam : 3;