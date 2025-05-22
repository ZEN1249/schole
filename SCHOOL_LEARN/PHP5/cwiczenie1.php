<?php
// Funkcja do określenia płci na podstawie imienia (bardzo uproszczona)
function czyKobieta($imie) {
    // Przykładowa lista imion żeńskich (możesz rozszerzyć)
    $imionaKobiece = ['Anna', 'Maria', 'Katarzyna', 'Ewa', 'Magdalena', 'Agnieszka'];
    return in_array(ucfirst(strtolower($imie)), $imionaKobiece);
}

// Zmienna do przechowywania danych użytkownika
$dane = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = trim($_POST['imie'] ?? '');
    $nazwisko = trim($_POST['nazwisko'] ?? '');
    $miasto = trim($_POST['miasto'] ?? '');
    if ($imie && $nazwisko && $miasto) {
        $dane = [
            'imie' => $imie,
            'nazwisko' => $nazwisko,
            'miasto' => $miasto,
            'czy_kobieta' => czyKobieta($imie),
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <title>Trzy bloki z formularzem</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            height: 100vh;
            box-sizing: border-box;
            padding: 20px;
        }
        .blok {
            width: 30%;
            min-height: 300px;
            padding: 15px;
            box-sizing: border-box;
            color: white;
        }
        #lewy {
            background-color: #ff6666; /* czerwony */
        }
        #srodkowy {
            background-color: #66b3ff; /* niebieski */
            color: black;
        }
        #prawy {
            background-color: #66cc66; /* zielony */
        }
        label, input {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            font-size: 1rem;
        }
        input[type="text"] {
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #004080;
            color: white;
            border: none;
            padding: 10px;
            font-size: 1rem;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #002040;
        }
    </style>
</head>
<body>
    <div id="lewy" class="blok">
        <?php if ($dane && $dane['czy_kobieta']): ?>
            <h2>Dane kobiety:</h2>
            <p>Imię: <?= htmlspecialchars($dane['imie']) ?></p>
            <p>Nazwisko: <?= htmlspecialchars($dane['nazwisko']) ?></p>
            <p>Miasto: <?= htmlspecialchars($dane['miasto']) ?></p>
        <?php else: ?>
            <h2>Panel lewy</h2>
            <p>Tu wyświetlą się dane kobiet.</p>
        <?php endif; ?>
    </div>

    <div id="srodkowy" class="blok">
        <h2>Formularz</h2>
        <form method="post" action="">
            <label for="imie">Imię:</label>
            <input type="text" id="imie" name="imie" required>

            <label for="nazwisko">Nazwisko:</label>
            <input type="text" id="nazwisko" name="nazwisko" required>

            <label for="miasto">Miasto:</label>
            <input type="text" id="miasto" name="miasto" required>

            <input type="submit" value="Wyślij">
        </form>
    </div>

    <div id="prawy" class="blok">
        <?php if ($dane && !$dane['czy_kobieta']): ?>
            <h2>Dane mężczyzny:</h2>
            <p>Imię: <?= htmlspecialchars($dane['imie']) ?></p>
            <p>Nazwisko: <?= htmlspecialchars($dane['nazwisko']) ?></p>
            <p>Miasto: <?= htmlspecialchars($dane['miasto']) ?></p>
        <?php else: ?>
            <h2>Panel prawy</h2>
            <p>Tu wyświetlą się dane mężczyzn.</p>
        <?php endif; ?>
    </div>
</body>
</html>
