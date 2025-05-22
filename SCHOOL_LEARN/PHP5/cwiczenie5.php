<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Znajomość języków obcych</title>
</head>
<body>

<h2>Moja znajomość języków obcych</h2>

<form method="post">
    <label><input type="checkbox" name="languages[]" value="angielski"> Angielski</label><br>
    <label><input type="checkbox" name="languages[]" value="niemiecki"> Niemiecki</label><br>
    <label><input type="checkbox" name="languages[]" value="rosyjski"> Rosyjski</label><br><br>
    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["languages"])) {
        $selected_languages = $_POST["languages"];
        $language_list = implode(", ", $selected_languages);
        echo "<p>Doskonale znam: $language_list.</p>";
    } else {
        echo "<p>Nie zaznaczono żadnego języka.</p>";
    }
}
?>

</body>
</html>
