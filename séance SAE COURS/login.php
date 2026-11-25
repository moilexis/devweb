<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//si t'as mis le lien dans l'URL c'est du get donc ca passe pas
    if (isset($_POST["login"], $_POST["password"])) {
        $login = $_POST["login"];
        $password = sha1($_POST["password"]);


        $connexion = mysqli_connect("localhost", "root", "");
        $database = "users";
        $table = "login";
        $ok = mysqli_select_db($connexion, $database);
        $sql = "SELECT * FROM $table WHERE login=? AND password=?";
        $req_prepare=mysqli_prepare($connexion,$sql);
        // $ok liaison bind des paramètres avec la requête SQL
        $ok=mysqli_stmt_bind_param($req_prepare,'ss',$login,$password);
        $ok=mysqli_stmt_execute($req_prepare);
        $result=mysqli_stmt_get_result($req_prepare);
        if (mysqli_num_rows($result) >0) {
            echo "<p>OUI</p>";
        } else {
            echo "<p>NON</p>";
        }

    }
}
else{
    header("Location: acceuil.php?error=1001");
    exit();//pour etre sur de rediriger
}
//on prépare une req avec mysqli_prepare


