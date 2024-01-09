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


