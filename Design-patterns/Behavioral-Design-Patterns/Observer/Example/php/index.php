<?php

// Interfejs obserwatora
interface Observer {
    public function update($notification);
}

// Klasa subskrybenta powiadomień
class NotificationCenter {
    private $observers = [];

    // Metoda do dodawania obserwatorów
    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    // Metoda do usuwania obserwatorów
    public function removeObserver(Observer $observer) {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    // Metoda do powiadamiania obserwatorów o nowym powiadomieniu
    public function notifyObservers($notification) {
        foreach ($this->observers as $observer) {
            $observer->update($notification);
        }
    }
}

// Klasa konkretnego obserwatora, np. powiadomienia e-mail
class EmailNotification implements Observer {
    public function update($notification) {
        echo "Wysyłanie powiadomienia e-mailem: $notification\n";
    }
}

// Klasa konkretnego obserwatora, np. powiadomienia pop-up
class PopupNotification implements Observer {
    public function update($notification) {
        echo "Pokazywanie powiadomienia pop-up: $notification\n";
    }
}

// Użycie wzorca Observer
$notificationCenter = new NotificationCenter();

$emailObserver = new EmailNotification();
$popupObserver = new PopupNotification();

$notificationCenter->addObserver($emailObserver);
$notificationCenter->addObserver($popupObserver);

$notificationCenter->notifyObservers("Nowe powiadomienie: Zmiany w aplikacji!");

?>
