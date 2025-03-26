<?php ob_start();?>
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center">Connexion</h2>
    <form action="/auth/login" method="POST" class="mt-4">
        <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border rounded-lg mb-3">
        <input type="password" name="password" placeholder="Mot de passe" required class="w-full px-4 py-2 border rounded-lg mb-3">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">Se connecter</button>
    </form>
    <?php if (isset($error)) : ?>
        <p class="text-red-500 text-center mt-3"><?php echo $error; ?></p>
    <?php endif; ?>
    <p class="text-center mt-3">Pas encore de compte ? <a href="/auth/register" class="text-blue-500">S'inscrire</a></p>
</div>
