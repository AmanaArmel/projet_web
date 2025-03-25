<?php ob_start(); ?>
<h1 class="text-3xl font-bold mb-4">Toutes les Questions</h1>
<a href="/questions/create" class="bg-blue-500 text-white py-2 px-4 rounded">Poser une question</a>

<ul class="mt-4">
    <?php foreach ($questions as $q): ?>
        <li class="p-4 border-b">
            <a href="/questions/<?= $q['id'] ?>" class="text-xl text-blue-500"><?= htmlspecialchars($q['title']) ?></a>
            <p class="text-gray-500">Posé par <?php
             $user = null;
                             foreach ($users as $u) {
                                 if ($u['id'] == $q['user_id']) {
                                     $user = $u;
                                     break;
                                 }
                             }
                             if ($user != null) {
                                 echo htmlspecialchars($user['username']);
                             } else {
                                 echo "Utilisateur inconnu";
                             }
             ?> le <?= $q['created_at'] ?></p>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); require '../app/views/layout.php'; ?>
