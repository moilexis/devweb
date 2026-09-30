<?php
$file="data.txt";
$fh=fopen($file,"r");
// les modes essentiels sont r, w et a (append)
// le pointeur du fichier est placé au debut en R et au W donc w écrase par défaut, il faut append pour pas ecraser


// il y a deux commandes possibles pour lire : FREAD
$data=fread($fh,filesize($file));//on lit la ligne entière (pointeur, taille du fichier)
echo "<pre>";
print_r($data);
echo "</pre>";
fclose($fh);//fermeture du fichier

//deuxième methode : ligne par ligne FGETS
$fp=fopen($file,"r");
echo "<pre>";
while (!feof($fp)) {//find end of file
    $data=fgets($fp);//on lit la ligne entière (pointeur, taille du fichier)
    //lit une seule ligne
    print_r($data);
}
echo "</pre>";

fclose($fp);//fermeture du fichier
echo"<hr>";

$file = "data.csv";
$fp = fopen($file, "r");
$data = fgetcsv($fp, 1024,",");
//fgetcsv retourne un tableau
echo"<pre>";
print_r($data);
echo"</pre>";
fclose($fp);

echo"<hr>";

$file = "data.csv";
$fp = fopen($file, "r");
$data = fgetcsv($fp, 1024,",");
//fgetcsv retourne un tableau
echo"<table>";
echo"<tr>";
foreach ($data as $value) {
    echo "<th>".$value."</th>";
}
echo"</tr>";
while($data = fgetcsv($fp, 1024,",")) {
    echo"<tr>";
    foreach ($data as $value) {
        echo "<td>".$value."</td>";
    }
    echo"</tr>";
}
echo"</table>";
fclose($fp);

?>