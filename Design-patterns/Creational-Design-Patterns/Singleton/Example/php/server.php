<?php
require_once 'vendor/autoload.php'; // Załaduj bibliotekę dotenv

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = Database::getInstance();

// Przykładowe zapytanie SQL
$result = $db->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    // Wyświetlenie wyników zapytania
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . "<br>";
    }
} else {
    echo "Brak wyników zapytania";
}

// Zamknięcie połączenia z bazą danych
$db->close();
?>