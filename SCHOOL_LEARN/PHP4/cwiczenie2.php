<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cwiczenie2.php" method="post">
        <input type="text" name="imie">
        <textarea name="nazwisko"></textarea>
        radio1<input type="radio" name="radioradio" value="radio1">
        radio2<input type="radio" name="radioradio" value="radio2">
        radio3<input type="radio" name="radioradio" value="radio3">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        /*
        $points = 0;
        if($_POST["radioradio"] == "radio1"){$points++;};
        echo $points;
        */
        echo "pole tekst " . $_POST["imie"];
        echo "<br>";
        echo "text area" . $_POST["nazwisko"];
        echo "<br>";
        if(isset($_POST["radioradio"])){
            echo "radio wybrane =>". $_POST["radioradio"];
        };
    }else if(empty($_POST["submit"])){

    };
    ?>
</body>
</html>