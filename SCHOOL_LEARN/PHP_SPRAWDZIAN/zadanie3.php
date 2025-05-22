<?php
function sprawdzLogin($login) {
    $regex = '/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d_]{6,}$/';
    return preg_match($regex, $login);
}

// Przykład:
$login = "user_1";
echo sprawdzLogin($login) ? "Login poprawny" : "Login niepoprawny";
?>

<?php
// Regex do walidacji adresu email
$regexEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

// Regex do walidacji polskiego numeru telefonu (opcjonalny kod +48, 9 cyfr, spacje/myślniki dopuszczone)
$regexTelefon = '/^(\+48)?[\s-]?(\d{3})[\s-]?(\d{3})[\s-]?(\d{3})$/';

// Regex do walidacji numeru PESEL (11 cyfr)
$regexPesel = '/^\d{11}$/';

// Regex do walidacji imienia (wielka litera + 1-20 małych liter, dopuszcza polskie znaki i myślnik)
$regexImie = '/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż\-]{1,20}$/u';

// Regex do walidacji nazwiska (analogicznie do imienia, ale może być dłuższe, np. 1-40 znaków)
$regexNazwisko = '/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż\-]{1,40}$/u';

// Przykładowe użycie funkcji sprawdzających:
function sprawdzRegex($tekst, $regex) {
    return preg_match($regex, $tekst) === 1;
}

// Przykład testów
$email = "test@example.com";
$telefon = "+48 123-456-789";
$pesel = "44051401359";
$imie = "Łukasz";
$nazwisko = "Kowalski";

echo "Email: " . (sprawdzRegex($email, $regexEmail) ? "OK\n" : "Błąd\n");
echo "Telefon: " . (sprawdzRegex($telefon, $regexTelefon) ? "OK\n" : "Błąd\n");
echo "PESEL: " . (sprawdzRegex($pesel, $regexPesel) ? "OK\n" : "Błąd\n");
echo "Imię: " . (sprawdzRegex($imie, $regexImie) ? "OK\n" : "Błąd\n");
echo "Nazwisko: " . (sprawdzRegex($nazwisko, $regexNazwisko) ? "OK\n" : "Błąd\n");
?>
