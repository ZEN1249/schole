<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczbawegla = [
        //wartosci sa podane w tonach a po prawej stronie jest rok
        30 => 2020,
        45 => 2021,
        50 => 2022,
        55 => 2023,
        60 => 2024,
        75 => 2025
    ];
    $suma = 0;
    $poprzedniWengiel = null;
    $poprzedniRok = null;

    foreach($liczbawegla as $wengiel => $rok){
        if($wengiel * 1000 < 75000){
            echo "W roku $rok zostało wydobyte $wengiel ton węgla.<br>";
        }

        if($poprzedniWengiel !== null){
            $zmiana = (($wengiel - $poprzedniWengiel) / $poprzedniWengiel) * 100;
            echo "Zmiana procentowa z roku $poprzedniRok na $rok: " . number_format($zmiana, 2) . "%<br>";
        }

        $poprzedniWengiel = $wengiel;
        $poprzedniRok = $rok;

        $suma += $wengiel;
    }

    echo "<br>Łączna ilość wydobytego węgla: $suma ton<br>";
    ?>
</body>
</html>