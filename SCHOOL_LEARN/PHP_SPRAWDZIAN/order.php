<?php
if(isset($_POST["submit"])){
    $cena_paczka = 1.05;
    $cena_grzebienia = 1.45;
    $paczki = $_POST["paczki"];
    $grzebienie = $_POST["grzebienie"];

    $cenapaczkow = $paczki * $cena_paczka;
    $cenagrzebieni = $grzebienie * $cena_grzebienia;
    echo "zamówiłeś:<br>";
    echo "$cena_paczka-paczki*$paczki" ."=>$cenapaczkow<br>";
    echo "$cena_grzebienia-grzebienie*$grzebienie" ."=>$cenagrzebieni<br>";
    echo "SUMA TO <br>";
    $suma = $cenapaczkow + $cenagrzebieni;
    echo "<h1>$suma</h1>";
}
?>