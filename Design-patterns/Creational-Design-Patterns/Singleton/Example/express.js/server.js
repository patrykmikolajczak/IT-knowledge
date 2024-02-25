const express = require('express');
const database = require('./database');

const app = express();

app.get('/', (req, res) => {
    database.query('SELECT * FROM users', (err, results) => {
        if (err) {
            res.status(500).send('Błąd pobierania danych z bazy danych');
            return;
        }
        res.json(results);
    });
});

// Zamknięcie połączenia z bazą danych przy zatrzymaniu serwera
process.on('SIGINT', () => {
    database.close();
    console.log('Aplikacja została zatrzymana, połączenie z bazą danych zostało zakończone');
    process.exit();
});

app.listen(3000, () => {
    console.log('Serwer działa na http://localhost:3000');
});