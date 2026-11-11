<?php
//si pas de durée, par défaut le cookie n'est plus actif après la session du navigateur
setcookie("cookie01", "Bonjour tout le monde");
if (isset($_COOKIE["cookie01"])) {
    print $_COOKIE["cookie01"];
} else {
    echo "pas de cookie encore exploitable côté serveur";
}
echo "<h1>Cookie 01 - PAGE 1</h1>";
echo "<p>Voici une page web qui charge un cookie</p>";
echo "<p>Vous pouvez le vérifier en ouvrant <kbd><kbd>CTRL</kbd></kbd> <kbd><kbd>MAJ</kbd></kbd><kbd><kbd> I</kbd></kbd>";
echo "<p>Dans l'outil du développerur vous pouvez constater que le cookie est bien présent avec sa valeur</p>";
echo "<a href='page-cookie02.php'>vers la page 2</a>";

?>