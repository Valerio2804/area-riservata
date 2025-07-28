<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
include('config.php');
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Area Riservata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Area Riservata</h2>
        <ul class="link-list">
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="<?= htmlentities($link['url']) ?>" target="_blank">
                        <?= htmlentities($link['titolo']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p><a href="logout.php" class="logout">Esci</a></p>
    </div>
</body>
</html>
