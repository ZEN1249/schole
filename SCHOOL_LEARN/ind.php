<!DOCTYPE html>
<html>
<head>
    <style>
        .blok { float: left; width: 23%; margin: 1%; padding: 10px; border: 1px solid #000; box-sizing: border-box; }
    </style>
</head>
<body>

<div class="blok">
    <form method="post">
        <textarea name="tekst" rows="6" cols="30"></textarea><br>
        <input type="submit" name="submit" value="Wyślij">
    </form>
</div>

<?php
$text = $_POST["tekst"] ?? "";
?>

<div class="blok"><?php echo $text; ?></div>
<div class="blok"><?php echo str_replace(" ", "↵", $text); ?></div>
<div class="blok"><?php echo "Liczba znaków: " . strlen($text); ?></div>

</body>
</html>