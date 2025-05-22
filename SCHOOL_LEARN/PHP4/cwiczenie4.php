<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Analiza tekstu</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        textarea {
            width: 100%;
            height: 150px;
            background-color: #222;
            color: white;
            border: 1px solid #555;
            padding: 10px;
            font-size: 16px;
        }
        button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #444;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h2>Analiza tekstu</h2>

<form method="post">
    <textarea name="content" placeholder="Wprowadź swój tekst tutaj..."><?php echo isset($_POST['content']) ? htmlspecialchars($_POST['content']) : ''; ?></textarea><br>
    <button type="submit">Analizuj</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['content'])) {
    $text = trim($_POST['content']);

    // Liczenie słów – przyjmujemy, że słowa oddzielone są spacją
    $words = array_filter(explode(' ', $text), fn($word) => $word !== '');
    $wordCount = count($words);

    // Liczenie samogłosek (polskich i angielskich)
    $vowels = mb_str_split(preg_replace('/[^aeiouyąęóAEIOUYĄĘÓ]/u', '', $text));
    $vowelCount = count($vowels);

    echo "<div class='result'>";
    echo "<p><strong>Liczba słów:</strong> $wordCount</p>";
    echo "<p><strong>Liczba samogłosek:</strong> $vowelCount</p>";
    echo "</div>";
}
?>

</body>
</html>
