# 04_Exercice
1. Amélioré le projet avec un fichier **utils.php** dans lequel vous déposerez votre fonction de trie.
    **Organisation des fichier :**
    ```mermaid
    flowchart TD
        A[fa:fa-folder Recettes de Chef] --> A2[(data.php)]
        A --> A1[index.php]
        A --> A3[bootstrap.php]
        A --> A4[utils.php]
        style A4 stroke-width:4px,font-size:16px
    ```
    **Fonctionnement de l'application :**
    ```mermaid
    flowchart LR
        A1[index.php]
        A2[(data.php)]
        A3[bootstrap.php]
        A4[utils.php]
        style A4 stroke-width:4px,font-size:16px
        A2 --> |$recipes|A3
        A4 --> |funcions|A3
        A3 --> A1
    ```