# Shopping List
Vous avez une liste de course rangé par rayon :
```php
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
```

1. Créer une fonction qui réorganise par ordre alphabétique les rayons et les aliments

1. Créer une fonction qui supprime un aliment d'un rayon
    - Utilisé-là pour supprimer le melon des fruits et legumes

1. Créer une fonction qui créer un rayon

1. Créer une fonction qui rajoute un aliment
    - Créer le rayon fruit de mer et ajoutés-y un calamar

1. Créer une fonction qui affiche dans un tableau associatif le nombre d'aliment total, le nombre de rayon et un autre tableau avec les différents rayon et le nombre total d'aliment dans chacun.
    ```php
    [
        'total_foods' => 18,
        'total_shelf' => 5,
        'shelf' => [
            'fruits-et-legumes' => 6,
            'epicerie' => 5,
            ...
        ]
    ]
    ```