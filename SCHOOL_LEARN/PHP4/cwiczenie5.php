<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cwiczenie5.php" method="post">
        <input type="number" min="-100" max="100" placeholder="zmiennaX" name="X">
        <input type="number" min="-100" max="100" placeholder="zmiennaY" name="Y">
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $x= $_POST["X"];
        $y= $_POST["Y"];
        $czypodziena=0;
        for($i=$x;$i<=$y;$i++){
            echo $i . "<br>";
            if((int)$i %3==0){$czypodziena++;}
        }
        echo "<h1>  $czypodziena </h1>";
    };
    ?>
</body>
</html>