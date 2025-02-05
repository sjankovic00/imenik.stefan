<?php

use Core\Database;

session_start();

$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $db->query("SELECT * FROM users WHERE username = ?", [$username])->fetch();

    if ($user && $password===$user['password']) {
        $_SESSION['user'] = $user;

        if ($user['role'] === 'admin') {
            header('Location: /admin');
            exit;
        } else {
            header('Location: /user');
            exit;
        }
    } else {
        $_SESSION['error_message'] = "Pogresili ste. Pokusajte ponovo!";
        header('Location: /login');
        exit;
    }
}
