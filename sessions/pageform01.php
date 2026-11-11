<?php

echo "<h1> formulaire d'authentification</h1>";
echo "<form action='actionform01.php' method='post'>";
echo "<label for='login'> login : </label>";
echo "<input type='text' id='login' name='login' placeholder='login'>";
echo "<label for='password'> mot de passe : </label>";
echo "<input type='password' id='password' name='password' placeholder='password'>";
echo "<input type='submit' id='submit' name='submit' value='authentification'>";
echo "</form>";


if(isset($_GET['error'])){
    echo "<p style='color: red'>IL y a une erreur dans la saisie de vos identifiants</p>";
}

?>
