<?php
$title = "Login";
require_once __DIR__ . '/../views/header.php';
?>

 
<div class="min-h-screen flex items-center justify-center px-4 bg-gray-50">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Login</h2>
        <form action="" method="post" class="space-y-6">
            <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
            
            <div>
                <label for="email" class="block text-gray-700 mb-1 font-semibold">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                    class="w-full px-4 py-2 rounded border border-gray-300 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <div>
                <label for="password" class="block text-gray-700 mb-1 font-semibold">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="••••••••"
                    required
                    class="w-full px-4 py-2 rounded border border-gray-300 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-gray-700 text-white font-bold py-2 rounded hover:bg-indigo-700 transition"
            >
                Login
            </button>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/../views/footer.php'; ?>
