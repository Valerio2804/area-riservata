<?php
session_start();
include('config.php');

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user === $utente && password_verify($pass, $hash_password)) {
        $_SESSION['loggedin'] = true;
        header('Location: area_riservata.php');
        exit;
    } else {
        $errore = 'Credenziali non valide';
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login Area Riservata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <?php if (isset($errore)): ?>
            <p class="error"><?= htmlentities($errore) ?></p>
        <?php endif; ?>
        <form method="post" novalidate>
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="login">Accedi</button>
        </form>
    </div>
</body>
</html>
