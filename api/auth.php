<?php
session_start();
require_once '../helpers/AuthHelper.php';
require_once '../models/User.php';

$mode = $_GET['mode'];
error_log("Mode: $mode");

if ($mode === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    error_log("Login attempt with email: $email");

    if (AuthHelper::authenticate($email, $password)) {
        error_log("Login successful for email: $email");
        header('Location: ../app/dashboard.php');
    } else {
        error_log("Login failed for email: $email");
        $_SESSION['error'] = 'Invalid email or password';
        header('Location: ../login.php');
    }
} elseif ($mode === 'signup') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    error_log("Signup attempt with email: $email");

    if ($password === $confirm_password) {
        $user = new User();
        $hashedPassword = AuthHelper::hash($password);
        $slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $name));
        $user->create(['name' => $name, 'email' => $email, 'password' => $hashedPassword, 'slug' => $slug]);
        error_log("User created with email: $email and slug: $slug");
        AuthHelper::authenticate($email, $password);
        header('Location: ../app/dashboard.php');
    } else {
        error_log("Signup failed: Passwords do not match for email: $email");
        $_SESSION['error'] = 'Passwords do not match';
        header('Location: ../signup.php');
    }
} elseif ($mode === 'logout') {
    AuthHelper::logout();
    error_log("User logged out");
    header('Location: ../index.php');
} else {
    error_log("Invalid mode: $mode");
    header('Location: ../index.php');
}
exit;
?>
