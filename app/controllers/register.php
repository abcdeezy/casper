<?php
$title = "Register";
require_once __DIR__ . '/../views/header.php';
?>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Register</h2>
    <form action="" method="post">
        <input type="hidden" name="csrf" value="<?= csrf_token() ?>">
        <input type="text" name="name" placeholder="Name" class="w-full p-2 border mb-3">
        <input type="email" name="email" placeholder="Email" class="w-full p-2 border mb-3">
        <input type="password" name="password" placeholder="Password" class="w-full p-2 border mb-3">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Register</button>
    </form>
</div>
<?php require_once __DIR__ . '/../views/footer.php'; ?>
