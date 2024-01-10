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

function addNewShelf(array &$shoppingList, string $shelfName): void
{
        if(!isset($shoppingList[$shelfName])) {
                $shoppingList[$shelfName] = [];
        }
}

function addItem(array &$shoppingList, string $shelf, string $item): void
{
        if(!in_array($item, $shoppingList[$shelf])) {
                $shoppingList[$shelf][] = $item;
        }
}

function shoppingListInfo(array $shoppingList): array
{
        $totalFood = 0;
        $shelfsInfo = [];

        foreach($shoppingList as $shelfName => $shelf) {
                $countItems = count($shelf);
                $totalFood += $countItems;
                $shelfsInfo[$shelfName] = $countItems;
        }

        return [
                'totalFood' => $totalFood,
                'totalShelf' => count($shoppingList),
                'shelfsInfo' => $shelfsInfo,
        ];
}

deleteFromCourseList($courses, 'fruits-et-legumes', 'Melons');
sortShoppingList($courses);

addNewShelf($courses, 'fruits-de-mer');
addItem($courses, 'fruits-de-mer', 'calamar');
addItem($courses, 'fruits-de-mer', 'calamar');

dump($courses);
dump(shoppingListInfo($courses));