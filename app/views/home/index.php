<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparaison Flutter vs React Native</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <section class="">
                <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Apprenez à créer des applications innovantes</h1>
                        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">De l'apprentissage du langage jusqu'au déploiement de de votre première application mobile nous vous assisterons </p>
                        <a href="#commencer" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 ">
                            Commencer
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                         <a href="/questions" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                            Participer au forum
                        </a>
                    </div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
                    </div>
                </div>
            </section>
    <div class="container mx-auto px-4 py-8">

        <h1 class="text-4xl font-bold text-center mb-12 text-blue-600" id="commencer" >Quelle technologie choisir?</h1>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="text-2xl font-semibold mb-4 text-blue-500 flex items-center gap-2 justify-start flex-row  ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32">
                        <path fill="#40d0fd" d="m15.383 18.316l3.361-3.274h8.349l-7.396 7.396z" />
                        <path fill="#41d0fd" d="m4.907 16.125l4.199 4.299L27.093 2.287h-8.349z" />
                        <path fill="#1fbcfd" d="m11.176 22.479l4.259 4.196l4.262-4.237l-4.314-4.122z" />
                        <path fill="#095a9d" d="m15.435 26.675l4.262-4.237l7.292 7.375h-8.396z" />
                        <path fill="#0e5199" d="m15.435 26.675l3.971-1.321l-1.338-1.297z" />
                    </svg>Flutter
                </div>
                <div class="mb-4">
                    <h3 class="font-bold text-lg mb-2">Présentation</h3>
                    <p>Framework open-source de Google pour le développement d'applications multiplateformes en utilisant le langage Dart.</p>
                </div>

                <div class="mb-4">
                    <h3 class="font-bold text-lg mb-2">Avantages</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Performance native élevée grâce au moteur de rendu Skia</li>
                        <li>UI cohérente sur toutes les plateformes</li>
                        <li>Hot Reload pour un développement rapide</li>
                        <li>Communauté croissante et soutenue par Google</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-2">Inconvénients</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Taille d'application plus grande</li>
                        <li>Moins de bibliothèques par rapport à React Native</li>
                        <li>Courbe d'apprentissage du langage Dart</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                    <i class="fab fa-react mr-3 text-cyan-400"></i>React Native
                </h2>
                <div class="mb-4">
                    <h3 class="font-bold text-lg mb-2">Présentation</h3>
                    <p>Framework open-source de Facebook pour le développement d'applications multiplateformes en utilisant JavaScript et React.</p>
                </div>

                <div class="mb-4">
                    <h3 class="font-bold text-lg mb-2">Avantages</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Grande communauté et nombreux packages</li>
                        <li>Réutilisation de code React existant</li>
                        <li>Proche du développement web</li>
                        <li>Performance proche du natif</li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-bold text-lg mb-2">Inconvénients</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Performances moins optimales que le natif</li>
                        <li>Débogage plus complexe</li>
                        <li>Dépendance aux modules natifs</li>
                        <li>Mises à jour de framework plus fréquentes</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-6 text-center text-blue-600">Tableau Comparatif</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-blue-100">
                            <th class="border p-3 text-left">Critère</th>
                            <th class="border p-3 text-center">Flutter</th>
                            <th class="border p-3 text-center">React Native</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border p-3">Langage</td>
                            <td class="border p-3 text-center">Dart</td>
                            <td class="border p-3 text-center">JavaScript/TypeScript</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border p-3">Performance</td>
                            <td class="border p-3 text-center">Excellente</td>
                            <td class="border p-3 text-center">Bonne</td>
                        </tr>
                        <tr>
                            <td class="border p-3">Courbe d'apprentissage</td>
                            <td class="border p-3 text-center">Modérée</td>
                            <td class="border p-3 text-center">Facile</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="border p-3">Communauté</td>
                            <td class="border p-3 text-center">Croissante</td>
                            <td class="border p-3 text-center">Très large</td>
                        </tr>
                        <tr>
                            <td class="border p-3">Support Entreprise</td>
                            <td class="border p-3 text-center">Google</td>
                            <td class="border p-3 text-center">Facebook</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>