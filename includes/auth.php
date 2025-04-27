<?php
session_start();

$valid_username = 'admin';
$valid_password = 'admin';

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

if ($user === $valid_username && $pass === $valid_password) {
    $_SESSION['logged_in'] = true;
    header('Location: ../admin.php');
    exit;
} else {
    header('Location: login.php?error=Invalid credentials');
    exit;
}
