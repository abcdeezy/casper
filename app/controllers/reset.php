<?php
$title = "Reset Password";
require_once __DIR__ . '/../views/header.php';
?>
<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Reset Password</h2>
    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter your email" class="w-full p-2 border mb-3">
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Send Reset Link</button>
    </form>
</div>
<?php require_once __DIR__ . '/../views/footer.php'; ?>
