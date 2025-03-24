<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Description de la page">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="home.php?page=presentation" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-house"></i>
                    <span class="ms-3">Présentation</span>
                </a>
            </li>
            <li>
                <a href="home.php?page=documentation" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-book"></i>
                    <span class="ms-3">Documentation</span>
                </a>
            </li>
            <li>
                <a href="home.php?page=forum" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-book"></i>
                    <span class="ms-3">Forum</span>
                </a>
            </li>
        </ul>
    </div>
</aside>


<!-- Contenu dynamique -->
<div id="content" class="p-4 sm:ml-64 h-3/4 flex items-center justify-center text-xl font-bold">
    <?php
    // Liste des pages autorisées avec leur chemin
    $allowed_pages = [
        'presentation'  => 'presentation.php',
        'documentation' => 'documentation.php',
        'forum'         => 'forum.php'
    ];

    // Vérifie si une page est spécifiée et autorisée, sinon charge "presentation"
    $page = isset($_GET['page']) ? $_GET['page'] : 'presentation';

    if (array_key_exists($page, $allowed_pages)) {
        include($allowed_pages[$page]);
    } else {
        echo "<p class='text-red-600'>Page introuvable.</p>";
    }
    ?>
</div>

<!-- Menu flottant -->
<!--<div class="fixed bottom-4 left-1/2 -translate-x-1/2 bg-white shadow-lg rounded-full px-6 py-3 flex space-x-6 border border-gray-200">-->
<!--    <a href="home.php?page=presentation" class="text-gray-600 hover:text-blue-500">-->
<!--        <i class="fa-solid fa-house"></i>-->
<!--    </a>-->
<!--    <a href="home.php?page=documentation" class="text-gray-600 hover:text-blue-500">-->
<!--        <i class="fa-solid fa-book"></i>-->
<!--    </a>-->
<!--    <a href="home.php?page=forum" class="text-gray-600 hover:text-blue-500">-->
<!--        <i class="fa-brands fa-rocketchat"></i>-->
<!--    </a>-->
<!--</div>-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
