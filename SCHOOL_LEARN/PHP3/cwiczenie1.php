<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $miasta = [
        "Warszawa" => 1864679,
        "Krakow" => 807644,
        "Lodz" => 665259,
        "Wroclaw" => 669564,
        "Poznan" => 541782
    ];

    foreach($miasta as $miasto => $ludnosc){
        if($ludnosc >= 600000 && $ludnosc <= 800000){
            echo $miasto . "=>" . $ludnosc . "<br>";
        };
    };
    ?>
</body>
</html>