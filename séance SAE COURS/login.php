<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//si t'as mis le lien dans l'URL c'est du get donc ca passe pas
    if (isset($_POST["login"], $_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];
    }
}
else{
    header("Location: acceuil.php?error=1001");
    exit();
}