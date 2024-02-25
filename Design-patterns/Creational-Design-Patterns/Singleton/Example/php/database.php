<?php
class Database {
    private static $instance;
    private $connection;

    private $host;
    private $username;
    private $password;
    private $database;

    // Prywatny konstruktor zapobiegający bezpośredniemu tworzeniu instancji
    private function __construct() {
        $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->database = $_ENV['DB_DATABASE'];

        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->connection->connect_error) {
            die("Błąd połączenia z bazą danych: " . $this->connection->connect_error);
        }
        echo "Połączono z bazą danych MySQL<br>";
    }

    // Metoda do uzyskania instancji singletona
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Metoda do wykonania zapytania SQL
    public function query($sql) {
        $result = $this->connection->query($sql);
        if (!$result) {
            echo "Błąd zapytania: " . $this->connection->error;
        }
        return $result;
    }

    // Metoda do zamykania połączenia z bazą danych
    public function close() {
        $this->connection->close();
        echo "Połączenie z bazą danych MySQL zostało zakończone<br>";
    }
}
?>