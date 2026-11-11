
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
$file = "data/damier.csv";
$fp = fopen($file, "r");
$data = fgetcsv($fp, 1024,",");
while($data = fgetcsv($fp, 1024,",")) {
    $tableau[$data[3]-1][$data[4]-1] = $data[2];
}
fclose($fp);
echo "<div class='echiquiers-wrapper'>";


echo "<div class='echiquier-presentation'>";
echo "<h1>Echiquier 1 (blancs en bas)</h1>";
echo "<div class='table-container'>";
echo "<table>";
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        if (($i +$j)%2 == 0){
            $color = "grey";
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
echo "</div>";


echo "<div class='echiquier-presentation'>";
echo "<h1>Echiquier 2 (blancs en haut)</h1>";
echo "<div class='table-container'>";
echo "<table>";
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        if (($i +$j)%2 == 0){
            $color = "grey";
        }
        else {
            $color = "white";
        }
        $nouv_i = 7-$i;
        $nouv_j = 7-$j;
        echo "<td style='background-color: $color '>" . $tableau[$nouv_i][$nouv_j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "</div>";

echo "</div>";


?>

