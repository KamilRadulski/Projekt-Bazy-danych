<?php
// Połącz się z bazą danych
$servername = "localhost";
$username = "nazwa_uzytkownika";
$password = "haslo";
$dbname = "nazwa_bazy_danych";

// Stwórz połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdź połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obsłuż formularz, jeśli dane zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artist_name = $_POST['artist_name'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];

    // SQL query do wstawienia danych do tabeli
    $sql = "INSERT INTO nazwa_tabeli (artist_name, genre, description) VALUES ('$artist_name', '$genre', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Dane zostały pomyślnie zapisane.";
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
}

// Zamknij połączenie
$conn->close();
?>
