<?php
if (!class_exists('Session')) {
    require_once(__DIR__ . '/session.php');
}

Session::start();

function isLoggedIn() {
    return Session::isLoggedIn();
}

function getCurrentUser() {
    $user = Session::user();
    return $user ?: null;
}

function requireLogin($redirectTo = '../pages/home.php') {
    if (!isLoggedIn()) {
        header('Location: ' . $redirectTo);
        exit;
    }
}

function requireGuest($redirectTo = '../pages/home.php') {
    if (isLoggedIn()) {
        header('Location: ' . $redirectTo);
        exit;
    }
}
?>
