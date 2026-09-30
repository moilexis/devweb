<?php
include ("fragments/entete.html");
require_once("fun/fun.php");
?>
<h1>TP numéro 2</h1>
<h2>Première partie : Affectation par référence</h2>


<?php
$a=5;
$b= &$a;
//la variable $b est affectée par référence avec le '&'
//les deux poitnent vers la meme case mémoire et en modifier un modifie l'autre

echo "la valeur de \$a est ".$a." test d'une concaténation";
echo "<br>";
echo "la valeur de \$b est ".$b;//le '.' sert à concaténer les chaines de caractères
echo "<br>";
echo "<hr>";
$b=8;
echo "la valeur de \$a est ".$a;
echo "<br>";
echo "la valeur de \$b est ".$b;
echo "<br>";
?>

<h2>Deuxième partie : Opérateurs de fusion nulle ou NULL</h2>
<?php
echo "la valeur de \$c est  : ".($c ?? "inconnue");
//?? veu dire que si $c est null, on utilise la valeur entrée dans le guillemets après
// on  a testé si la variables était affectée
echo "<br>";
echo "<hr>";
$c= 3.14;
echo "la valeur de \$c est  : ".($c ?? "inconnue");
//meme commande mais cette fois $c a bien une valeur.
echo "<br>";


echo"la valeur de \$d est : ".($d ?? $e ?? "inconnue");
//si d est nulle on prend e, si elle est nulle on prend les guillemets
echo "<br>";
echo "<hr>";
//////////////////////////////
echo "on donne une valeur à \$e :";
echo "<br>";
$e="la vie est belle";
echo"la valeur de \$d est : ".($d ?? $e ?? "inconnue");
echo "<br>";
echo "<hr>";
//////////////////////////////////////
echo "on donne une valeur à \$d :";
echo "<br>";
$d="la vie est dure ";
echo"la valeur de \$d est : ".($d ?? $e ?? "inconnue");
echo "<br>";
?>
<h2>Opérateur d'affectation de fusion nulle</h2>
<?php

$f ??= "inconnue";
//attribue une valeur si et seulement si f n'a pas deja une valeur
echo "la valeur de \$f est : ".$f;
echo "<br>";
echo "<hr>";
//////////////////////////////////////
$f = "titi";
$f ??= "inconnue";
echo "la valeur de \$f est : ".$f;

?>
<h2>Operateur ternaire</h2>

<?php
$nom="";
echo "Bonjour ".($nom=="" ? "inconnu" : $nom);
// SI ? ALORS : SINON

echo "<br>";

if ($nom==""){
    echo "inconnu";
}
else{
    echo $nom;
}
?>

<h2>Les tableaux en PHP : </h2>
<?php

echo "<h3>tableau indexé</h3>";
$tab = array(1,2,3,5,4,7);//peut être multitypes
echo "<br>";
echo "avec la fonction print_r";
echo "<hr>";
print_r($tab);
echo "<br>";
echo "avec la fonction display de fun.php";
echo "<hr>";
display($tab);
echo "<br>";
echo "avec la fonction dump de fun.php";
echo "<hr>";
dump($tab);

echo "<br>";
echo"avec la boucle classique";
echo "<hr>";

for ($i= 0; $i<count($tab); $i++) {
    echo $tab[$i]."<br>";
}

echo "<br>";
echo"avec la boucle foreach";
echo "<hr>";

foreach ($tab as $val) {
    echo $val."<br>";
}


echo "<h3>tableau associatif (dico) </h3>";
echo "<br>";
$tab2 = array("lundi"=>"macdo","mardi"=>"resto", "mercredi"=>"jeune");
foreach ($tab2 as $key =>$val) {
    echo $key." est la clé, ";
    echo $val." est la valeur associée "."<br>";

}
$tabnul = array("lundi"=>"macdo","mardi"=>"resto", 1=>"jeune");
//php le permet mais c'est pas beau sah, pas d'intéret à le faire


?>
<h3>Notes en plus</h3>
on a des tableaux associatifs $_GET et $_POST dont les clés dont les "name" sont les clés


<?php
include ("fragments/pied.html");
?>