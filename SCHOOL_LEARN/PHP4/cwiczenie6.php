<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Ulubiony kolor i samochód</title>
</head>
<body>

<h2>Podaj swój ulubiony kolor i samochód</h2>

<form method="post">
    <input type="text" name="kolor" placeholder="Ulubiony kolor"><br><br>
    <input type="text" name="samochod" placeholder="Ulubiony samochód"><br><br>
    <button type="submit" name="submit">Wyślij</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $kolor = trim($_POST['kolor']);
    $samochod = trim($_POST['samochod']);

    $dlugoscTekstu = strlen($kolor) + strlen($samochod);

    echo "<p>$kolor</p>";
    echo "<p>$samochod</p>";
    echo "<p>Łączna liczba znaków: $dlugoscTekstu</p>";
    echo "<p>Mój ulubiony samochód to $samochod, ma kolor $kolor.</p>";
}
?>

</body>
</html>