# Interfejs obserwatora
class Observer:
    def update(self, notification):
        pass

# Klasa subskrybenta powiadomień
class NotificationCenter:
    def __init__(self):
        self.observers = []

    # Metoda do dodawania obserwatorów
    def add_observer(self, observer):
        self.observers.append(observer)

    # Metoda do usuwania obserwatorów
    def remove_observer(self, observer):
        self.observers.remove(observer)

    # Metoda do powiadamiania obserwatorów o nowym powiadomieniu
    def notify_observers(self, notification):
        for observer in self.observers:
            observer.update(notification)

# Klasa konkretnego obserwatora, np. powiadomienia e-mail
class EmailNotification(Observer):
    def update(self, notification):
        print(f"Wysyłanie powiadomienia e-mailem: {notification}")

# Klasa konkretnego obserwatora, np. powiadomienia pop-up
class PopupNotification(Observer):
    def update(self, notification):
        print(f"Pokazywanie powiadomienia pop-up: {notification}")

# Użycie wzorca Observer
notification_center = NotificationCenter()

email_observer = EmailNotification()
popup_observer = PopupNotification()

notification_center.add_observer(email_observer)
notification_center.add_observer(popup_observer)

notification_center.notify_observers("Nowe powiadomienie: Zmiany w aplikacji!")
