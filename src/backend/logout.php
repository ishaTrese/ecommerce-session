<?php
require_once(__DIR__ . '/session.php');
Session::logout();
header('Location: ../pages/home.php');
exit;
?>