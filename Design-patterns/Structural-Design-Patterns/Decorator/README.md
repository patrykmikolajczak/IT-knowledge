# Decorator

Wzorzec projektowy Decorator jest wzorcem strukturalnym, który umożliwia dodawanie nowych funkcjonalności do istniejących obiektów w czasie działania programu, nie zmieniając ich struktury. Dekorator umożliwia elastyczne rozszerzanie funkcjonalności obiektów poprzez opakowywanie ich w inne obiekty, które posiadają dodatkowe zachowania.

### Główne składniki wzorca Decorator:
1. Komponent bazowy (Component):

* Definiuje interfejs dla obiektów, które mają być dekorowane.

* Może być klasą abstrakcyjną lub interfejsem.

2. Konkretny komponent (Concrete Component):

* Implementuje komponent bazowy.

* Jest to podstawowa klasa, której funkcjonalność może być rozszerzana przez dekoratory.

3. Dekorator (Decorator):

* Jest klasą abstrakcyjną lub interfejsem, implementującym ten sam interfejs co komponent bazowy.

* Przechowuje referencję do komponentu bazowego i deleguje do niego wszystkie żądania.

* Może dodawać własną funkcjonalność przed lub po delegacji żądania do komponentu bazowego.

4. Konkretny dekorator (Concrete Decorator):

* Rozszerza funkcjonalność komponentu bazowego przez dodanie nowych zachowań.

* Implementuje metody dekoratora, dodając nową funkcjonalność i/lub modyfikując zachowanie komponentu bazowego.

## Zalety
* Elastyczność: Pozwala dodawać nowe funkcje do istniejących obiektów w czasie działania programu bez zmiany ich struktury.

* Łatwość rozszerzania: Dzięki dekoratorom możemy łatwo dodawać nowe funkcjonalności, tworząc nowe dekoratory.

* Oddzielenie odpowiedzialności: Każdy dekorator jest odpowiedzialny tylko za swoją dodatkową funkcjonalność, co prowadzi do rozdzielenia odpowiedzialności w aplikacji.

## Wady
* Trudność usuwania: zabranie choć jednej "nakładki" ze środka stosu dekoratora jest trudne

* Zależność kolejności: trudno stworzyć dekorator, ktory nie zależałby od koleności "nakładek"

## Przykłady użycia
* Filtrowanie treści: Dekorator może być używany do filtrowania lub modyfikowania treści w różnych kontekstach, na przykład filtrowanie komentarzy na stronie internetowej w celu usuwania spamu lub niepożądanych treści.

* Kodowanie danych: Dekorator może być stosowany do kodowania danych przy wysyłaniu ich przez sieć, na przykład można dodać dekorator szyfrujący, który szyfruje dane przed wysłaniem ich przez sieć.

* Zarządzanie dostępem: Dekorator może być używany do zarządzania dostępem do określonych zasobów w systemie, na przykład można dodać dekorator autoryzacyjny, który sprawdza uprawnienia użytkownika przed udzieleniem dostępu do zasobu.

* Logowanie: Dekorator może być wykorzystany do logowania zdarzeń w systemie, na przykład można dodać dekorator logujący, który rejestruje informacje o wykonanych operacjach.

* Cache: Dekorator może być używany do dodania mechanizmu cache'owania do istniejących operacji, na przykład można dodać dekorator cache'ujący, który przechowuje wyniki operacji, aby przyspieszyć późniejsze wywołania.

* Formatowanie danych: Dekorator może być stosowany do formatowania danych w różnych formatach, na przykład można dodać dekorator formatujący, który zmienia format danych na żądany przez użytkownika.

* Konwersja danych: Dekorator może być używany do konwersji danych z jednego formatu na inny, na przykład można dodać dekorator konwertujący dane XML na JSON lub odwrotnie.

* Walidacja danych: Dekorator może być wykorzystany do dodania mechanizmu walidacji danych, na przykład można dodać dekorator walidujący, który sprawdza poprawność danych przed ich przetworzeniem.

* Generowanie raportów: Dekorator może być stosowany do generowania różnych typów raportów na podstawie tych samych danych źródłowych, na przykład można dodać dekorator generujący raport w formacie PDF do istniejącego systemu raportowania.

* Zmiana wyglądu interfejsu użytkownika: Dekorator może być używany do zmiany wyglądu interfejsu użytkownika w zależności od preferencji użytkownika, na przykład można dodać dekorator zmieniający styl lub kolor elementów interfejsu.

## Przykładowe implementacje
* [Express.js](/Design-patterns/Structural-Design-Patterns/Decorator/Example/express.js)
* [PHP](/Design-patterns/Structural-Design-Patterns/Decorator/Example/php)
* [Python](/Design-patterns/Structural-Design-Patterns/Decorator/Example/python)
