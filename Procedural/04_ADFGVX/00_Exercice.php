<?php
define('ALPHANUMERIC', ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9']);
define('ADFGVX', ['A','D','F','G','V','X']);

// Génère la table de substitution
function generateEncryptionTable(array $substitutionSymbols, array $alphanumeric): array
{
    $encryptionTable = [];
    shuffle($alphanumeric);

    // Générer la table de substitution

    return $encryptionTable;
}

// Chiffre un message
function encryptMessage(array $encryptionTable, string $keyword, string $secretMessage): string
{
    $secretMessage = strtoupper(str_replace(' ', '', $secretMessage));

    // Génère le chiffre intermédiaire en utilisant le carré de Polybe
    
    // Génère le chiffre final en utilisant le mot-clé
}

// Déchiffre un message
function decryptMessage(array $encryptionTable, string $keyword, string $cipher): string
{
    $keyword = str_split($keyword);
    $countOfLongerColumns = strlen($cipher) % count($keyword);
    $approximateColumnsLength = strlen($cipher) / count($keyword);
    
    // Calcule les longueurs des colonnes en fonction de la longueur du texte chiffré

    // Remplit la table de substitution
    
    // Reconstruit le chiffre intermédiaire à partir de la table de substitution
    
    // Déchiffre le message à l'aide de la table de substitution
}
?>