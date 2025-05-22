<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz PHP</title>
</head>
<body>
    <h2>Formularz PHP</h2>
    <form action="index.php" method="post">
        <label for="name">Imię:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Wyślij">
    </form>

    <?php
    // Obsługa formularza po jego wysłaniu
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        echo "<h3>Wysłane dane:</h3>";
        echo "Imię: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }
    ?>
</body>
</html>
