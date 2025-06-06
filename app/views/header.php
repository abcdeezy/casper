<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Casper Framework' ?></title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-sm">
<nav class="bg-gray-900 text-white p-4">
    <div class="container mx-auto">
        <a href="/" class="font-bold text-lg">Casper</a>
    </div>
</nav>

<?php require_once __DIR__ . '/../views/flash.php'; ?>
