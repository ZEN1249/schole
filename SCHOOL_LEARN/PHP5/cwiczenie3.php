<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" min="1" max="30" name="minimalna">
        <input type="number" min="1" max="30" name="maximum">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
    $minimalna = $_POST["minimalna"];
    $maximum = $_POST["maximum"];
    $tablica=[];
    for($i=0; $i<20; $i++){
        $randomnumber = rand($minimalna,$maximum);
        array_push($tablica, $randomnumber);
    }
    foreach($tablica as $elementy){
        echo $elementy . "<br>";
    };
    };
    ?>
</body>
</html>