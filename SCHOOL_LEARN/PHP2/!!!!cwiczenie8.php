<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function rozwiazanieKwadratowe($a, $b, $c) {
    // Oblicz delta
    $delta = $b * $b - 4 * $a * $c;

    // Sprawdź wartość delty
    if ($delta > 0) {
        // Dwa pierwiastki
        $pierwiastek1 = (-$b + sqrt($delta)) / (2 * $a);
        $pierwiastek2 = (-$b - sqrt($delta)) / (2 * $a);
        return array($pierwiastek1, $pierwiastek2);
    } elseif ($delta == 0) {
        // Jeden podwójny pierwiastek
        $pierwiastek = -$b / (2 * $a);
        return array($pierwiastek);
    } else {
        // Brak pierwiastków rzeczywistych (delta < 0)
        return array();
    }
}

// Przykładowe współczynniki równania kwadratowego
$a = 1;
$b = -3;
$c = 2;

// Rozwiązanie równania kwadratowego
$pierwiastki = rozwiazanieKwadratowe($a, $b, $c);

// Wyświetlenie wyników
if (count($pierwiastki) > 0) {
    echo "Pierwiastki równania kwadratowego dla a=$a, b=$b, c=$c: ";
    foreach ($pierwiastki as $pierwiastek) {
        echo $pierwiastek . " ";
    }
} else {
    echo "Brak pierwiastków rzeczywistych dla a=$a, b=$b, c=$c.";
}

?>

</body>
</html>