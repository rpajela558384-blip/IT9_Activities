<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['username'] === 'admin' && $_POST['password'] === '1234') {

        $_SESSION['user'] = 'admin';

        if (isset($_POST['remember'])) {
            setcookie('remember', 'admin', time() + 86400 * 30); // 30 days hell yeah
        }

        header("Location: dashboard.php");
        exit;
    }
}
?>
<form method="post">
    <h1>Login</h1>
  <input type="text" name="username" id="username" placeholder="Username" required><br><br>
  <input type="password" name="password" id="password" placeholder="Password" required><br><br>
  <label><input type="checkbox" name="remember"> Remember me</label><br><br>
  <button>Login</button>
</form>