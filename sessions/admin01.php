<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == 'admin') {
        echo "<h1>Bonjour " . $_SESSION['login'] . "</h1>";
        echo "<p><a href='actionlogout.php'>Déconnexion</a></p>";
    } else {
        header('location:pageform01.php?error');
        exit(0);
    }
} else {
    header('location:pageform01.php');
    exit(0);
}
?>
