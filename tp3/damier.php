


<?php
include ("fragments/entete.html");
include ("fragments/navigation.html");
echo"<table>";
//première ligne

for ($i = 0; $i<=10; $i++){
    echo "<tr>";
    for($j = 0; $j <= 10; $j++){
        if (($i +$j)%2 == 0){
            $color = "black";
        }
        else {
            $color = "white";
        }
        echo"<td style='background-color: $color '></td>";
    }
    echo "</tr>";
}



echo"</table>";

///formulaire 3 champs, nombre ligne, nombre colonnes, et couleur max 20 tailles


echo "<hr>";

echo"<form method='post' action=''>";
echo "<div>";
    echo"<label for='lignes'>nombre de lignes</label>";
    echo"<input type='number' name='lignes' id='lignes' min='2' max='20'> ";
echo "</div>";

echo "<div>";
    echo"<label for='colonnes'>nombre de colonnes</label>";
    echo"<input type='number' name='colonnes' id='colonnes' min='2' max='20'> ";
echo "</div>";

echo "<div>";
    echo"<label for='color'>couleur</label>";
    echo"<input type='color' name='color' id='color'> ";
echo "</div>";

    echo"<button type='submit'>Envoyer</button>";
echo"</form>";

if( isset($_POST['lignes'],$_POST['colonnes'],$_POST['color']) ) {
    $lignes = $_POST['lignes'];

    if ($lignes > 20) {
        $lignes = 20;
    }
    $colonnes = $_POST['colonnes'];
    if ($colonnes > 20) {
        $colonnes = 20;
    }
    $couleur = $_POST['color'];

    echo "<table>";
    for ($i = 0; $i < $lignes; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colonnes; $j++) {
            if (($i + $j) % 2 == 0) {
                $color = $_POST["color"];
            } else {
                $color = "white";
            }
            echo "<td style='background-color: $color '></td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}



