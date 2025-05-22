<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Przykładowe wartości zmiennych
$a = 10;
$b = 5;
$c = 8;

// Zagnieżdżona instrukcja warunkowa do posortowania wartości
if ($a <= $b) {
    if ($a <= $c) {
        if ($b <= $c) {
            // $a <= $b <= $c
            echo "$a, $b, $c";
        } else {
            // $a <= $c < $b
            echo "$a, $c, $b";
        }
    } else {
        // $c < $a <= $b
        echo "$c, $a, $b";
    }
} else {
    if ($b <= $c) {
        if ($a <= $c) {
            // $b <= $a <= $c
            echo "$b, $a, $c";
        } else {
            // $b <= $c < $a
            echo "$b, $c, $a";
        }
    } else {
        // $c < $b <= $a
        echo "$c, $b, $a";
    }
}
?>

</body>
</html>