<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'], $_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        if ($login == "admin" && $password == "admin") {
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = "admin";
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            header('Location: admin01.php');
            exit(0);
        } else {
            header('Location: pageform01.php?error');
            exit(0);
        }
    } else {
        header('Location: pageform01.php?error');
        exit(0);
    }
} else {
    header('Location: pageform01.php');
    exit(0);
}
?>
