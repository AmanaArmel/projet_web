<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Présentation des technologies mobiles">
    <title>Présentation</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Tailwind & Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<!-- Conteneur Principal -->
<div class="flex flex-col items-center w-full px-4">

    <!-- SECTION TITRE -->
    <div class="w-full text-center mb-8">
        <h1 class="text-3xl font-bold">Présentation des technologies de développement mobile</h1>
    </div>

    <!-- SECTION CARTES -->
    <div class="flex flex-wrap justify-center gap-6 w-full max-w-4xl">

        <!-- Première Carte -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
            <img class="rounded-t-lg w-1/2 h-48 object-cover mx-auto" src="images/flutter.png" alt="Tech Image 1">
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold text-gray-900">Flutter</h5>
                <p class="mb-3 text-gray-700">Flutter est un framework open-source développé par Google permettant de créer des applications multiplateformes.</p>
                <a href="https://flutter.dev" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                    En savoir plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Deuxième Carte -->
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
            <img class="rounded-t-lg w-1/2 h-48 object-cover mx-auto" src="images/react.png" alt="Tech Image 2">
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold text-gray-900">React Native</h5>
                <p class="mb-3 text-gray-700">React Native est un framework développé par Facebook qui permet de créer des applications mobiles avec JavaScript et React.</p>
                <a href="https://reactnative.dev" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                    En savoir plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>



    <div class="mt-8 bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Comment choisir entre Flutter et React Native ?</h2>
        <p class="mb-4">Le choix entre Flutter et React Native dépend de plusieurs critères, notamment votre stack technologique, vos besoins en performance et votre expérience en développement.</p>
        <p class="mb-4">Flutter utilise Dart, un langage performant avec une compilation en code natif. Il est idéal pour des applications nécessitant une interface utilisateur avancée et des performances élevées.</p>
        <p class="mb-4">React Native, basé sur JavaScript, est un bon choix si vous avez déjà de l'expérience avec React et souhaitez mutualiser du code entre web et mobile.</p>
        <p class="mb-4">Enfin, la communauté et l'écosystème de React Native sont plus matures, tandis que Flutter se démarque par ses performances et son rendu graphique.</p>
    </div>

    <div class="mt-8 bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Tableau comparatif</h2>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 p-2">Critère</th>
                <th class="border border-gray-300 p-2">Flutter</th>
                <th class="border border-gray-300 p-2">React Native</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border border-gray-300 p-2">Langage</td>
                <td class="border border-gray-300 p-2">Dart</td>
                <td class="border border-gray-300 p-2">JavaScript</td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Performance</td>
                <td class="border border-gray-300 p-2">Très élevée</td>
                <td class="border border-gray-300 p-2">Bonne</td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Interface utilisateur</td>
                <td class="border border-gray-300 p-2">Widgets natifs intégrés</td>
                <td class="border border-gray-300 p-2">Basé sur des composants natifs</td>
            </tr>
            <tr>
                <td class="border border-gray-300 p-2">Communauté</td>
                <td class="border border-gray-300 p-2">En croissance</td>
                <td class="border border-gray-300 p-2">Très large</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>
</html>
