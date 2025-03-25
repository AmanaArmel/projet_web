<?php ob_start(); ?>
<div class="text-center mt-10">
    <h1 class="text-3xl font-bold">Bienvenue sur StackDev 🚀</h1>
    <p class="mt-4 text-gray-600">Un forum dédié aux développeurs.</p>
    <a href="/auth/register" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded-lg">S'inscrire</a>
</div>
<?php $content = ob_get_clean(); require '../app/views/layout.php'; ?>
