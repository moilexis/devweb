<?php
include ("fragments/entete.html");
require_once("fun/fun.php");
//mettre en hporizontal et en vertical
//formulaire menu deroulant dynamique methode post et action vide
//traitement formulaire appel focntion
?>
<h1>Exercice TP1 </h1>
<h2>Affichage d'arrays dans un tableau</h2>
<?php
//création des tableaux
$caractere = array(17,20,14.6,20,7.60,19,19,14.5);
$effectif = array(2,1,3,2,2,1,2,1);
$fonction = array("moyenne","variance","ecarttype");
?>
<h2>Premier tableau</h2>
<?php
echo"<table>";
//première ligne
echo "<tr>";
echo "<th scope='row'>Caractère</th>";
for ($i = 0; $i<count($caractere); $i++){
    echo "<td>".$caractere[$i]."</td>";
}
echo "</tr>";
//deuxième ligne
echo "<tr>";
echo "<th scope='row'>Effectif</th>";
for ($i = 0; $i<count($effectif); $i++){
    echo "<td>".$effectif[$i]."</td>";
}
echo "</tr>";
echo"</table>";
?>
<h2>Deuxième tableau</h2>
<?php
echo"<table>";
//première ligne
echo "<tr>";
echo "<th scope='col'>Caractère</th>";
echo "<th scope='col'>Effectif</th>";
echo "</tr>";
for ($i = 0; $i<count($caractere); $i++){
    echo "<tr>";
    echo "<td>".$caractere[$i]."</td>";
    echo "<td>".$effectif[$i]."</td>";
    echo "</tr>";
}
echo "</tr>";
echo"</table>";
?>

<h2>Formulaire interactif</h2>
<form action = "" method ="POST">
    <label for = "fonction "> statistiques :</label>
<select name = "fonction" id = "fonction">

<?php
for ($i = 0; $i<count($fonction); $i++){
    echo "<option value = \"$fonction[$i]\">$fonction[$i]</option>";
}
?>
</select>
<button type="submit">Envoyer</button>
</form>
<?php
if (isset($_POST["fonction"])){
    $action= $_POST["fonction"];
    switch ($action){
    case "moyenne": 
        echo moyenne($caractere,$effectif);
        break;
    case "variance": 
        echo variance($caractere,$effectif);
        break;
    case "ecarttype": 
        echo ecarttype($caractere,$effectif);
    break;

}}

?>
<?php
include ("fragments/pied.html");
?>