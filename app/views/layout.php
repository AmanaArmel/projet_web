<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StackDev - Forum des Développeurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Site Logo/Name -->
            <div class="flex items-center">
                <svg class="w-8 h-8 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <a href="/" class="text-2xl font-bold text-gray-800 hover:text-blue-600 transition duration-300">StackDev</a>
            </div>

            <!-- Navigation Menu -->
            <nav class="hidden md:flex space-x-6">
                <a href="/" class="text-gray-700 hover:text-blue-500 transition duration-300 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Accueil
                </a>
                <a href="/questions" class="text-gray-700 hover:text-blue-500 transition duration-300 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Forum
                </a>
                <a href="/docs" class="text-gray-700 hover:text-blue-500 transition duration-300 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Documentation
                </a>
            </nav>

            <!-- Authentication Buttons -->
            <div class="flex items-center space-x-4">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <!-- Logged In State -->
                    <div class="relative group">
                        <button class="flex items-center text-gray-700 hover:text-blue-500 transition duration-300">
                            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <?= htmlspecialchars($_SESSION['username'] ?? 'Utilisateur') ?>
                        </button>
                    </div>
                    <a href="/auth/logout" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Déconnexion
                    </a>
                <?php else: ?>
                    <!-- Guest State -->
                    <a href="/auth/login" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-300 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Connexion
                    </a>
                    <a href="/auth/register" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition duration-300 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        S'inscrire
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-6 flex-grow">
        <?= $content ?>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md py-6 mt-10">
        <div class="container mx-auto px-4 text-center text-gray-600">
            © <?= date('Y') ?> StackDev - Forum des Développeurs. Tous droits réservés.
        </div>
    </footer>
</body>
</html>