
<?php
include ("fragments/entete.html");
include ("fragments/navigation.html");

echo"<h1>Échiquier</h1>";

$tableau = [];
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 8; $j++) {
        $tableau[$i][$j] = "";
    }
}
$file = "damier.csv";
$fp = fopen($file, "r");
$data = fgetcsv($fp, 1024,",");
while($data = fgetcsv($fp, 1024,",")) {
    $tableau[$data[3]-1][$data[4]-1] = $data[2];
}
fclose($fp);
echo "<div class='table-container'>";
echo "<table>";
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        if (($i +$j)%2 == 0){
            $color = "olive";
        }
        else {
            $color = "white";
        }
        echo "<td style='background-color: $color '>" . $tableau[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";


///formulaire 3 champs, nombre ligne, nombre colonnes, et couleur max 20 tailles
?>

