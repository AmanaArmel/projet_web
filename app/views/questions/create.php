<?php ob_start(); ?>
<h1 class="text-3xl font-bold">Poser une Question</h1>
<form action="/questions/create" method="POST" class="mt-4">
    <label class="block">Titre :</label>
    <input type="text" name="title" class="w-full border rounded p-2" required>

    <label class="block mt-4">Description :</label>
    <textarea name="body" rows="4" class="w-full border rounded p-2" required></textarea>

    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded mt-4">Publier</button>
</form>
<?php $content = ob_get_clean(); require '../app/views/layout.php'; ?>

