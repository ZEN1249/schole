<!-- index.php -->
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Przycisk PHP OnClick</title>
</head>
<body>

<form method="post">
    <button type="submit" name="pokaz">Kliknij mnie</button>
</form>

<?php
if (isset($_POST['pokaz'])) {
    echo "<p>Oto jak można uruchomić kod PHP przez zdarzenie onclick W PHP</p>";
}
?>

</body>
</html>
