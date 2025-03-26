<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center">Inscription</h2>
    <form action="/auth/register" method="POST" class="mt-4">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required class="w-full px-4 py-2 border rounded-lg mb-3">
        <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-2 border rounded-lg mb-3">
        <input type="password" name="password" placeholder="Mot de passe" required class="w-full px-4 py-2 border rounded-lg mb-3">
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg">S'inscrire</button>
    </form>
    <p class="text-center mt-3">Déjà un compte ? <a href="/users/login" class="text-blue-500">Se connecter</a></p>
</div>

