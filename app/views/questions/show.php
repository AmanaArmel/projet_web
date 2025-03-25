<?php ob_start(); ?>
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold"><?= htmlspecialchars($question['title']) ?></h2>
    <p class="mt-2"><?= nl2br(htmlspecialchars($question['body'])) ?></p>
    <hr class="my-4">

    <h3 class="text-xl font-bold">Réponses :</h3>
    <?php if (empty($answers)) : ?>
        <p>Aucune réponse pour le moment.</p>
    <?php else : ?>
        <?php foreach ($answers as $answer) : ?>
            <div class="border p-4 my-2 rounded-lg">
                <p><?= nl2br(htmlspecialchars($answer['content'])) ?></p>
                <small class="text-gray-500">Posté par <?= htmlspecialchars($answer['username']) ?></small>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <a href="/questions" class="text-blue-500">Retour aux questions</a>
</div>
<?php $content = ob_get_clean(); require '../app/views/layout.php'; ?>
