<?php
session_start();
require_once '../helpers/AuthHelper.php';
require_once '../models/User.php';

$mode = $_GET['mode'];

if ($mode === 'login') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (AuthHelper::authenticate($email, $password)) {
        header('Location: ../dashboard.php');
    } else {
        header('Location: ../index.php');
    }
} elseif ($mode === 'signup') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $user = new User();
        $hashedPassword = AuthHelper::hash($password);
        $user->create(['name' => $name, 'email' => $email, 'password' => $hashedPassword]);
        AuthHelper::authenticate($email, $password);
        header('Location: ../dashboard.php');
    } else {
        header('Location: ../index.php');
    }
} else {
    header('Location: ../index.php');
}
exit;
?>
