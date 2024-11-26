<?php

class AuthHelper
{
    public static function isLoggedIn()
    {
        return isset($_SESSION['user']);
    }

    public static function requireLogin()
    {
        if (!self::isLoggedIn()) {
            header('Location: login.php');
            exit;
        }
    }

    public static function requireGuest()
    {
        if (self::isLoggedIn()) {
            header('Location: index.php');
            exit;
        }
    }

    public static function hash($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public static function authenticate($email, $password)
    {
        require_once '../models/User.php';

        $user = new User();
        $result = $user->read(['email' => $email]);

        if (!empty($result) && password_verify($password, $result[0]->password)) {
            $_SESSION['user'] = $result[0];
            return true;
        }

        return false;
    }

    public static function logout()
    {
        unset($_SESSION['user']);
    }

    public static function user()
    {
        return $_SESSION['user'];
    }

    public static function redirectIfAuthenticated()
    {
        if (self::isLoggedIn()) {
            header('Location: dashboard.php');
            exit;
        }
    }

    public static function redirectIfNotAuthenticated()
    {
        if (!self::isLoggedIn()) {
            header('Location: login.php');
            exit;
        }
    }

    public static function checkLogin()
    {
        if (self::isLoggedIn()) {
            header('Location: dashboard.php');
            exit;
        }
    }
}