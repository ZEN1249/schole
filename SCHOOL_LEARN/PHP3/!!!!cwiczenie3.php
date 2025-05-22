<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $auta = [
        2013 => 512800,
        2014 => 568890,
        2015 => 514200,
        2016 => 554050,
        2017 => 620500
    ];
    $najwieksza_wartosc = max($auta);
    $rok_najwieksza = array_search($najwieksza_wartosc, $auta);

    $najmniejsza_wartosc = min($auta);
    $rok_najmniejsza = array_search($najmniejsza_wartosc, $auta);

    echo "najwięcej aut wyprodukowano w " . $rok_najwieksza;
    echo "<br>";
    echo "najmniej aut wyprodukowano w " . $rok_najmniejsza;
    echo "<br>";
    echo "roznica miedzy najlepszym a najslabszym rokiem wynoki" . $najwieksza_wartosc - $najmniejsza_wartosc;
    ?>
</body>
</html>