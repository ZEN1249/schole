<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define('k', 'piatek');
    print "weekend zaczyna sie w ". k;
    define('k', 'sobota');
    print "weekend zaczyna sie w ". k;
    //print nie wykonuje sie ponownie po próbie nadpisania stałej i pokazuje blad
    ?>
</body>
</html>