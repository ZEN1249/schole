<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $naukaczas = [
        "Matma" =>120,
        "Polski" => 60,
        "Angielski" =>30
    ];
    $suma = array_sum($naukaczas);
    echo "suma czasu => ". $suma;
    echo "<br>";
    $najwiecej = max(array_keys($naukaczas));
    $najmniej = min(array_keys($naukaczas));
    echo "najwiecej" . $najwiecej;
    echo "<br>";
    echo "najmniej" . $najmniej;
    echo "<br>";
    foreach($naukaczas as $przedmiot => $czas){
        if($czas > 60){
            echo $przedmiot . "=>" . $czas;
        }
    }
    ?>
</body>
</html>