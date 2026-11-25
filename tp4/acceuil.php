<?php
echo "<form action='login.php' method='POST'>
<label for='login'>Login</label>
<input type='text' name='login' id='login' placeholder='Login'>
<label for='password'>Mot de passe</label>
<input type='password' name='password' id='password' placeholder='Mot de passe'>
<input type='submit' value='Se connecter'>
</form>";

if (isset($_GET['error'])) {
    $error=$_GET['error'];
    switch ($error) {
        case 1001:
            echo "Erreur : on ne passe pas comme ca";

            case 1002:
                echo "Erreur : remplis le formulaire";
                case 1003:
                    echo "Erreur : login ou mot de passe incorrect";
    }
}