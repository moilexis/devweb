<?php
function display ($a) {
    echo "<pre>";
    print_r($a);
    echo "<pre>";
}

function dump ($a) {
    echo "<pre>";
    var_dump($a);
    echo "<pre>";
}

//Zone exercice séance 2
function moyenne ($car, $eff){
    $total_car = 0;
    $total_eff = 0;
    for ($i = 0; $i < count($car); $i++){
        $total_car += $car[$i]*$eff[$i];
        $total_eff += $eff[$i];
    }
    return ($total_car/ $total_eff);

}
function variance ($car, $eff) {
    $moy_car = moyenne($car, $eff)**2;
    
    $total_car_car = 0;
    $total_eff = 0;
    for ($i = 0; $i < count($car); $i++){
        $total_car_car += ($car[$i]**2)*$eff[$i];
        $total_eff += $eff[$i];
    }
    $moy_val_car = $total_car_car/$total_eff;
    return $moy_val_car-$moy_car;
}
function ecarttype ($car, $eff) {
    return variance($car, $eff)**0.5;
}



?>
