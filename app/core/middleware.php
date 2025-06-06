<?php
function is_logged_in() {
    return isset($_SESSION['user']);
}

function is_admin() {
    return is_logged_in() && $_SESSION['user']['role'] === 'admin';
}

function require_login() {
    if (!is_logged_in()) {
        header("Location: /login");
        exit;
    }
}

function require_admin() {
    if (!is_admin()) {
        header("Location: /login");
        exit;
    }
}
