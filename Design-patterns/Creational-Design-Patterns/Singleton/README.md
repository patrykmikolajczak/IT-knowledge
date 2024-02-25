# Singleton
Wzorzec projektowy pozwalający na stworzenie klasy, dla której może istnieć tylko jedna instancja.  
Umożliwia to stworzenie, np. klasy dostępu do bazy danych, dzięki czemu będziemy łączyć się z bazą tylko raz.

## Zalety
* Daje pewność istnienia tylko jednej instancji klasy.

* Inicjalizowanie obiektu dopiero przy pierwszej potrzebie jego użycia.

* Globalny dostęp do jedynej instancji klasy.

## Wady
* Potrzeba dodatkowej implementacji przy aplikacjach rozproszonych lub wielowątkowych.

* 

## Przykłady użycia
* Połączenie z bazą danych: Singleton może być użyty do utworzenia jednej instancji obiektu bazy danych, która jest współdzielona przez całą aplikację.

* Klasa logowania: Singleton może być wykorzystany do utworzenia jednej instancji klasy odpowiedzialnej za logowanie, aby kontrolować dostęp do logów w aplikacji.

* Menadżer konfiguracji: Singleton może zarządzać ustawieniami konfiguracyjnymi aplikacji, zapewniając jednolity dostęp do konfiguracji z dowolnego miejsca w kodzie.

* Klasa sesji: Singleton może reprezentować sesję użytkownika w aplikacji internetowej, przechowując dane sesji, takie jak identyfikator sesji, dane użytkownika, itp.

* Bufor danych: Singleton może być używany do utworzenia jednej instancji bufora danych w pamięci, który jest współdzielony przez różne części aplikacji.

* Menadżer połączeń do serwerów: Singleton może kontrolować dostęp do połączeń sieciowych lub serwerowych, zapewniając ograniczenie liczby aktywnych połączeń.

* Klasa cache: Singleton może reprezentować mechanizm buforowania danych w aplikacji, który przechowuje często używane dane w pamięci w celu poprawy wydajności.

* Menadżer plików: Singleton może zarządzać dostępem do plików w aplikacji, kontrolując operacje odczytu, zapisu i modyfikacji plików.

* Menadżer zasobów: Singleton może kontrolować dostęp do współdzielonych zasobów w aplikacji, takich jak pula wątków, pula połączeń, itp.

* Menadżer sesji użytkownika: Singleton może zarządzać sesjami użytkowników w aplikacji internetowej, śledząc stan sesji, autoryzację użytkowników, itp.

## Przykładowe implementacje
* [Express.js](/Design-patterns/Creational-Design-Patterns/Singleton/Example/express.js)
* [PHP](/Design-patterns/Creational-Design-Patterns/Singleton/Example/php)
* [Python](/Design-patterns/Creational-Design-Patterns/Singleton/Example/python)