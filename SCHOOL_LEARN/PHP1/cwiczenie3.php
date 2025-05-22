<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $k = 500;
    $y = 300;
    function obliczanie($k, $y) {
        echo $k + $y;
        echo "<br>";
        echo $k - $y;
        echo "<br>";
        echo $k * $y;
        echo "<br>";
        echo $k / $y;
        echo "<br>";
        echo $k % $y;
        echo "<hr>";}
    obliczanie($k, $y);
    $k = "jek";
    //obliczanie($k, $y);
    $k = 500;
    $y = "jek";
    obliczanie($k, $y);
    ?>
</body>
</html>