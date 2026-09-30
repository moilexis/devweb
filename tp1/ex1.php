

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> index </title>
</head>
<body>
<h1>Première page</h1>
<?php
echo "<p>Bonjour tout le monde</p>";
?>

<h2>un autre script</h2>
<?php
$a = 5;
$b = 14;
$c = $a%$b;
echo "<p> la valeur de \$c est : $c</p>";
?>


<form action = "" method = "GET">
    <label for="message">Message : </label>
    <input type = "text" id = "message", name = "message" >
    <input type = "submit" value = "OK" name = "OK">
</form>

<?php
//AVEC GET
if (isset($_GET['message'],$_GET['OK'])){
    echo"<pre>";
    print_r($_GET);
    echo"<pre>";
}
?>


<form action = "" method = "POST">
    <label for="message2">Message : </label>
    <input type = "text" id = "message2", name = "message2" >
    <input type = "submit" value = "OK2" name = "OK2">
</form>

<?php
//AVEC POST
if (isset($_POST['message2'],$_POST['OK2'])){
    echo"<pre>";
    print_r($_POST);
    echo"<pre>";
}
?>


<h2>tableaux en PHP</h2>

<?php
$tab [] = "bonjour";
$tab[] = "a bientot";
echo"<pre>";
print_r($tab);
echo"<pre>";

$tab2 = array(0=>"toto",1=>"titi","tata"=>"tata");

echo"<pre>";
print_r($tab2);
echo"<pre>";

?>




</body>
</html>

