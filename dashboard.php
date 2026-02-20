<?php
session_start();

if (!isset($_SESSION['user'])) {
    if (isset($_COOKIE['remember'])) {
        $_SESSION['user'] = $_COOKIE['remember']; // restore login
    } else {
        header("Location: login.php");
        exit;
    }
}
?>

<h1>Welcome <?= $_SESSION['user'] ?>!</h1>
<a href="logout.php">Logout</a>
``