<?php
$paczek = 1.05;
$grzebien = 1.45;

$liczbapaczkow = $_POST["liczbapaczkow"];
$liczbagrzebieni = $_POST["liczbagrzebieni"];
$suma = ($paczek * $liczbapaczkow) + ($grzebien * $liczbagrzebieni);
echo "zamówienie: <br>";
echo "- $liczbapaczkow x $paczek <br>";
echo "- $liczbagrzebieni x $grzebien <br>";
echo "SUMA <br>";
echo $suma;
?>
<!DOCTYPE html>
<html lang="en">
<body>
<a href="index.php">strona glowna</a>
</body>
</html>