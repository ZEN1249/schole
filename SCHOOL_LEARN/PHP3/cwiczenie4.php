<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $osoby = [
        "Adam" => 170,
        "Kamil" => 150,
        "Maciek" => 160
    ];
    $najwieksza = array_search(max($osoby), $osoby);
    $najwyzsza = max($osoby);
    echo "Najwyzszy jest" . $najwieksza . "i ma" .$najwyzsza;
    echo "<br>";
    $najmniejsza = array_search(min($osoby), $osoby);
    $mala = min($osoby);
    echo "Najmnijeszy jest" . $najmniejsza. "i ma" . $mala;
    ?>
</body>
</html>