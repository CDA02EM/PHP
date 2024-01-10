<?php
function dump(array $value): void
{
    if(is_array($value)) {
        echo '<pre>'.PHP_EOL;
        print_r($value);
        echo '</pre>'.PHP_EOL;
    } else {
        var_dump($value);
    }
}

$courses = [
	"fruits-et-legumes" => [
        'Pommes', 
        'Carottes', 
        'Fraises', 
        'Radis', 
        'Melons', 
        'Tomates'
	],
	"epicerie" => [
        'Pâtes', 
        'Sauce Roquefort', 
        'Vinaigre', 
        'Huile', 
        'Sucre'
	],
	"frais" => [
        'Yaourt aux fruits', 
        'Crème déssert', 
        'Beurre'
	],
	"petit-dejeuner" => [
        'Gateaux', 
        'Nuttela', 
        'Céréales'
	],
];
dump($courses);

function sortShoppingList(array &$shoppingList): void
{
        ksort($shoppingList);
        foreach($shoppingList as &$shelf) {
                sort($shelf);
        }
}

function deleteFromCourseList(array &$shoppingList, string $shelf, string $product): void
{
        unset($shoppingList[$shelf][array_search($product, $shoppingList[$shelf])]);
        $shoppingList[$shelf] = array_values($shoppingList[$shelf]);
}

deleteFromCourseList($courses, 'fruits-et-legumes', 'Melons');
sortShoppingList($courses);

dump($courses);