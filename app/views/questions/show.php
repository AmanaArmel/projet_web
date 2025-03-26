<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <!-- Error and Success Messages -->
    <?php if(isset($_SESSION['error'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <?= htmlspecialchars($_SESSION['error']) ?>
            <?php unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <?php if(isset($_SESSION['success'])): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <?= htmlspecialchars($_SESSION['success']) ?>
            <?php unset($_SESSION['success']); ?>
        </div>
    <?php endif; ?>

    <!-- Question Details -->
    <div class="mb-6">
        <h2 class="text-3xl font-bold text-gray-800 mb-4"><?= htmlspecialchars($question['title']) ?></h2>
        <p class="text-gray-700 text-lg leading-relaxed"><?= nl2br(htmlspecialchars($question['body'])) ?></p>
        <div class="mt-4 text-sm text-gray-500">
            Posté le <?= date('d/m/Y à H:i', strtotime($question['created_at'])) ?>
        </div>
    </div>

    <hr class="border-t-2 border-gray-200 my-6">

    <!-- Answers Section -->
    <h3 class="text-2xl font-bold mb-4">Réponses (<?= count($answers) ?>)</h3>
    
    <?php if (empty($answers)) : ?>
        <p class="text-gray-600 italic">Aucune réponse pour le moment.</p>
    <?php else : ?>
        <?php foreach ($answers as $answer) : ?>
            <div class="bg-gray-50 border rounded-lg p-4 mb-4">
                <p class="text-gray-800 mb-2"><?= nl2br(htmlspecialchars($answer['body'])) ?></p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>Posté par <?= htmlspecialchars($answer['username']) ?></span>
                    <span><?= date('d/m/Y à H:i', strtotime($answer['created_at'])) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Answer Form -->
    <?php if(isset($_SESSION['user_id'])): ?>
        <div class="mt-6 bg-gray-100 p-6 rounded-lg">
            <h4 class="text-xl font-semibold mb-4">Ajouter une réponse</h4>
            <form action="/answers/create" method="POST">
                <input type="hidden" name="question_id" value="<?= $question['id'] ?>">
                <div class="mb-4">
                    <textarea 
                        name="body" 
                        rows="5" 
                        class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" 
                        placeholder="Votre réponse..."
                        required
                    ></textarea>
                </div>
                <button 
                    type="submit" 
                    class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out transform hover:scale-105"
                >
                    Soumettre la réponse
                </button>
            </form>
        </div>
    <?php else: ?>
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Connexion requise</strong>
            <span class="block sm:inline">Veuillez vous connecter pour répondre à cette question.</span>
            <a href="/auth/login" class="ml-4 text-blue-500 hover:underline">Se connecter</a>
        </div>
    <?php endif; ?>

    <!-- Navigation -->
    <div class="mt-6 flex justify-between items-center">
        <a href="/questions" class="text-blue-500 hover:text-blue-700 transition duration-300 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Retour aux questions
        </a>
    </div>
</div>
