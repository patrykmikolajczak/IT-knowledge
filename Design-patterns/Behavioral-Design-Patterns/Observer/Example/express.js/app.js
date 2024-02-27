const express = require('express');
const app = express();

// Klasa subskrybenta powiadomień
class NotificationCenter {
    constructor() {
        this.observers = [];
    }

    // Metoda do dodawania obserwatorów
    addObserver(observer) {
        this.observers.push(observer);
    }

    // Metoda do usuwania obserwatorów
    removeObserver(observer) {
        const index = this.observers.indexOf(observer);
        if (index !== -1) {
            this.observers.splice(index, 1);
        }
    }

    // Metoda do powiadamiania obserwatorów o nowym powiadomieniu
    notifyObservers(notification) {
        this.observers.forEach(observer => observer(notification));
    }
}

// Utworzenie instancji NotificationCenter
const notificationCenter = new NotificationCenter();

// Przykładowe obserwatory
const emailObserver = (notification) => {
    console.log(`Wysyłanie powiadomienia e-mailem: ${notification}`);
};

const popupObserver = (notification) => {
    console.log(`Pokazywanie powiadomienia pop-up: ${notification}`);
};

// Dodanie obserwatorów do NotificationCenter
notificationCenter.addObserver(emailObserver);
notificationCenter.addObserver(popupObserver);

// Endpoint do symulacji nowego powiadomienia
app.get('/notify', (req, res) => {
    const notification = "Nowe powiadomienie: Zmiany w aplikacji!";
    notificationCenter.notifyObservers(notification);
    res.send('Powiadomienia zostały wysłane');
});

// Start serwera
app.listen(3000, () => {
    console.log('Serwer działa na http://localhost:3000');
});
