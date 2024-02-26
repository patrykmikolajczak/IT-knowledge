const express = require('express');
const app = express();

// Komponent bazowy
function baseHandler(req, res) {
    res.send('Strona główna');
}

// Dekorator logowania
function loggingDecorator(handler) {
    return function(req, res) {
        console.log(`Żądanie do: ${req.originalUrl}`);
        handler(req, res);
    }
}

// Użycie dekoratora
app.get('/', loggingDecorator(baseHandler));
app.get('/about', loggingDecorator((req, res) => {
    res.send('O nas');
}));

app.listen(3000, () => {
    console.log('Serwer działa na http://localhost:3000');
});
