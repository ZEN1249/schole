<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $integer_var = 42;
    var_dump($integer_var);
    echo "<br>";
    $float_var = 3.14;
    var_dump($float_var);
    echo "<br>";
    $string_var = "Hello, World!";
    var_dump($string_var);
    echo "<br>";
    $array_var = array(1, 2, 3);
    var_dump($array_var);
    echo "<br>";
    $object_var = new stdClass();
    var_dump($object_var);
    ?>
</body>
</html>