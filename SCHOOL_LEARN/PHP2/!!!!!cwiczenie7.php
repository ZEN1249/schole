<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ocena = 1;
    switch ($ocena) {
        case $ocena <=1:
            echo "Niedostateczny";
            break;
        case $ocena <=3:
            echo "Dopuszczający";
            break;
        case $ocena <=5;
            echo "Dostateczny";
            break;
        case $ocena <=7:
            echo "Dobry";
            break;
        case $ocena <=9:
            echo "Bardzo dobry";
            break;
        case 10:
            echo "Celujący";
            break;
        default:
            echo "Nieznana ocena";
            break;
    }
    ?>
</body>
</html>