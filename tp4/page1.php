<?php
session_start();
if(isset($_SESSION['login'])){
    $login = $_SESSION['login'];
    if ($login == "admin"){
        //header("Location:admin.php");
        echo "<p>Bonjour admin</p>";
        echo "<p><a href='acceuil.php'>Retour</a></p>";
    }elseif ($login == "user"){
        echo "<p>Bonjour user</p>";
    }elseif ($login == "toto"){
        echo "<p>Bonjour toto</p>";
    }
    echo "<p><a href='logout.php'>déconnection</a></p>";
}