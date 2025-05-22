<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wybierz kolor tła</title>
</head>
<body 
style="background-color: <?php
    // Domyślnie kolor tła to żółty
    $color = 'yellow';

    // Jeśli formularz został wysłany i wybrano kolor, to ustaw tło na wybrany kolor
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
        $color = $_POST['color'];
    }

    echo $color;
?>;">

    <h2>Wybierz kolor tła:</h2>
    <form method="post">
        <label>
            <input type="radio" name="color" value="red"> Czerwony
        </label><br>
        <label>
            <input type="radio" name="color" value="green"> Zielony
        </label><br>
        <label>
            <input type="radio" name="color" value="blue"> Niebieski
        </label><br><br>
        <input type="submit" value="Wyślij">
    </form>

</body>
</html>