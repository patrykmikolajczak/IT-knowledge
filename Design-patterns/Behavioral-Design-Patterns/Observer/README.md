# Observer
Wzorzec Observer jest wzorcem projektowym behawioralnym, który pozwala na zdefiniowanie mechanizmu subskrybcji. Dzięki czamu może informować zainteresowane obiekty o zmianie stanu obserwowanego obiektu.

### Główne składniki wzorca Observer:
1. Publisher:

* Jest obiektem, który utrzymuje listę subskrybentów oraz zarządza nimi.

* Implementuje metody do dodawania, usuwania i powiadamiania subskrybentów o zmianach stanu.

2. Subskrybent:

* Jest obiektem, który subskrybuje zmiany stanu subskrybenta.

* Implementuje metodę lub metody, które zostaną wywołane, gdy stan subskrybenta się zmieni.

## Zalety
* Oddzielenie obiektu od innych obiektów, które chcą być poinformowane o jego zmianach stanu.

* Elastyczność w dodawaniu i usuwaniu subskrybentów bez wpływu na subskrybenta.

## Wady
* Subskrybenci powiadamiani są w przypadkowej kolejności.

## Przykłady użycia
* System powiadomień w aplikacji mobilnej: Gdy stan aplikacji zmienia się, na przykład nowe wiadomości, nowe aktualizacje, użytkownicy mogą subskrybować te zdarzenia, a system powiadamia ich o zmianach.

* Monitorowanie cen akcji na giełdzie: Inwestorzy mogą subskrybować konkretne akcje lub indeksy, a system powiadamia ich o zmianach cen akcji w czasie rzeczywistym.

* System czujników w IoT: Czujniki w systemach Internetu rzeczy (IoT) mogą generować zdarzenia w odpowiedzi na zmiany w otoczeniu, a inne urządzenia lub systemy mogą subskrybować te zdarzenia i reagować na nie.

* Przetwarzanie danych w czasie rzeczywistym: W systemach przetwarzania danych w czasie rzeczywistym, takich jak systemy analizy strumieniowej, obserwatorzy mogą subskrybować dane wejściowe i reagować na zmiany w strumieniu danych.

* System publikowania i subskrybowania w architekturze mikroserwisów: Mikroserwisy mogą publikować zdarzenia, takie jak aktualizacje danych, a inne mikroserwisy mogą subskrybować te zdarzenia i reagować na nie w zależności od swoich potrzeb.

* System notyfikacji w grach komputerowych: W grach komputerowych, gracze mogą subskrybować różne zdarzenia, takie jak zdobycie nagrody, awans na wyższy poziom, a system powiadamia ich o tych zdarzeniach.

* System powiadamiania o aktualizacjach w aplikacji: W aplikacjach desktopowych lub internetowych, użytkownicy mogą subskrybować aktualizacje aplikacji, a system powiadamia ich o dostępnych aktualizacjach.

* Monitorowanie stanu zdrowia w systemach medycznych: W systemach medycznych, opiekunowie lub personel medyczny mogą subskrybować dane o stanie zdrowia pacjentów, a system powiadamia ich o zmianach stanu zdrowia.

* Systemy monitorowania sieci i infrastruktury: W systemach monitorowania sieci lub infrastruktury IT, administratorzy mogą subskrybować zdarzenia dotyczące awarii, obciążenia lub innych problemów, a system powiadamia ich o tych zdarzeniach.

* Systemy śledzenia zamówień i dostaw: W systemach handlu elektronicznego, klienci mogą subskrybować aktualizacje dotyczące statusu swoich zamówień i dostaw, a system powiadamia ich o zmianach statusu.

## Przykładowe implementacje
* [Express.js](/Design-patterns/Behavioral-Design-Patterns/Observer/Example/express.js)
* [PHP](/Design-patterns/Behavioral-Design-Patterns/Observer/Example/php)
* [Python](/Design-patterns/Behavioral-Design-Patterns/Observer/Example/python)