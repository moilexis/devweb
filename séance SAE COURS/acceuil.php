<?php
echo "<form action='login.php' method='POST'>
<label for='login'>Login</label>
<input type='text' name='login' id='login' placeholder='Login'>
<label for='password'>Mot de passe</label>
<input type='password' name='password' id='password' placeholder='Mot de passe'>
<input type='submit' value='Se connecter'>
</form>";

if (isset($_GET['error'])) {
    echo "<p>tu dois remplir le formulaire</p>";
}