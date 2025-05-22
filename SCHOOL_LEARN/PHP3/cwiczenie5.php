<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $samochody = [
        "lambo" => 123,
        "porshe" => 321,
        "ferarri" => 231
    ];
    $srednia = array_sum($samochody) / count($samochody);
    echo $srednia . "srednia <br>";
    foreach($samochody as $auto => $cena){
        if($srednia > $cena){
            echo $auto ."=>" . $cena;
        };
    };
    ?>
</body>
</html>