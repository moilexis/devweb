<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//si t'as mis le lien dans l'URL c'est du get donc ca passe pas
    if (isset($_POST["login"], $_POST["password"])) {
        $login = $_POST["login"];
        $password = sha1($_POST["password"]);




        $connexion = mysqli_connect("localhost", "root", "");
        $database = "users";
        $table = "login";
        $ok = mysqli_select_db($connexion, $database);
        $sql = "SELECT * FROM $table WHERE login='$login' AND password='$password'";
        $result = mysqli_query($connexion, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck ==1) {
            echo "<p>OUI</p>";
        }
        else {
            echo "<p>NON</p>";
        }

    }
}
else{
    header("Location: acceuil.php?error=1001");
    exit();//pour etre sur de rediriger
}