<?php
session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['login']=="admin"){
        session_destroy();
        unset($_SESSION['login']);
        header("Location:actionform01.php");
        exit(0);
    } else {
        header("Location:actionform01.php");
        exit(0);
    }
} else {
    header("Location:actionform01.php");
    exit(0);
}
?>