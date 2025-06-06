<?php
require_once __DIR__ . '/../core/middleware.php';
require_admin();

$title = "Dashboard";
require_once __DIR__ . '/../views/header.php';
?>
<div class="p-6">
    <h2 class="text-2xl font-bold">Admin Dashboard</h2>
    <p class="mt-4">Welcome, Admin! You have full access.</p>
</div>
<?php require_once __DIR__ . '/../views/footer.php'; ?>
