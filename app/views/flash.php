<?php
require_once __DIR__ . '/../core/flash.php';
foreach (['success', 'error'] as $type) {
    $msg = get_flash($type);
    if ($msg) {
        $color = $type === 'success' ? 'green' : 'red';
        echo "<div class='bg-$color-100 border border-$color-400 text-$color-700 px-4 py-3 rounded mb-4'>$msg</div>";
    }
}
