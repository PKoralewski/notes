
# Notes Project

Notes to aplikacja webowa pozwalająca użytkownikowi na tworzenie i wyświetlanie notatek. Projekt używa PHP, MySQL oraz TailwindCSS, a całość jest zintegrowana z Dockerem, by łatwo uruchomić aplikację w kontenerach.

## Funkcje

- **Wyświetlanie notatek**: Aplikacja łączy się z bazą danych i wyciąga notatki danego użytkownika w tym przypadku o ID 1.
- **Tworzenie notatki**: Możliwość dodania nowej notatki, która zawiera pole `body` z walidacją.
- **TailwindCSS**: Użyto TailwindCSS do stylizacji, niektóre fragmenty HTML pochodzą z [TailwindUI](https://tailwindui.com/).
- **Zintegrowana baza danych**: Projekt zawiera inicjalizację bazy danych w Dockerze.

## Wymagania

Aby uruchomić projekt, musisz mieć zainstalowanego Dockera na swoim systemie.

- **Docker**: Zainstaluj Dockera na swoim systemie. Instrukcje znajdziesz na [stronie oficjalnej Dockera](https://www.docker.com/get-started).

## Uruchamianie projektu

1. **Sklonuj repozytorium**:
   ```bash
   git clone https://github.com/PKoralewski/notes.git
   cd notes
   ```

2. **Utwórz i uruchom kontenery Docker**:
   Użyj poniższych komend, aby uruchomić projekt za pomocą Docker Compose:
   
   ```bash
   docker-compose up --build -d
   ```

   Komenda ta zbuduje obrazy Docker i uruchomi kontenery zgodnie z konfiguracją w pliku `docker-compose.yaml`.

3. **Dostęp do aplikacji**:
   Uruchom serwer PHP za pomocą poniższej komendy:
   
   ```bash
   php -S localhost:8000
   ```

   Aplikacja będzie dostępna pod adresem `http://localhost:8000`.

## Struktura projektu

Projekt składa się z następującej struktury:

```
notes/
├── controllers/            # Logika aplikacji
├── database/               # Baza danych oraz inicjalizacja
├── views/                  # Widoki aplikacji, w tym folder 'partials'
├── config/                 # Konfiguracja aplikacji
├── docker-compose.yaml     # Konfiguracja Docker Compose
├── Dockerfile              # Plik konfiguracyjny Dockera
├── functions/              # Funkcje pomocnicze
├── index.php               # Punkt wejścia aplikacji
├── Response.php            # Klasa odpowiedzi HTTP
├── router.php              # Routing aplikacji
├── routes.php              # Definicja tras
└── Validator.php           # Klasa walidatora
```

## Trasy (Routes)

W projekcie zdefiniowane są następujące trasy:

```php
return [
    '/' => 'controllers/index.php',                // Strona główna
    '/about' => 'controllers/about.php',            // Strona "O nas"
    '/notes' => 'controllers/notes.php',            // Lista notatek użytkownika (ID = 1)
    '/note' => 'controllers/note.php',              // Strona pojedynczej notatki
    '/notes/create' => 'controllers/note-create.php', // Formularz dodawania nowej notatki
    '/contact' => 'controllers/contact.php'         // Formularz kontaktowy
];
```

### Szczegóły tras:

- **`/notes`**: Wyświetla listę notatek danego użytkownika w tym przypadku o `ID = 1` z bazy danych.
- **`/note`**: Pozwala wyświetlić szczegóły jednej notatki.
- **`/notes/create`**: Formularz do tworzenia nowej notatki, zawiera pole `body` z walidacją.

### Kontrolery i widoki:
- Dla każdej z powyższych tras istnieje odpowiedni kontroler i widok, który obsługuje logikę i wyświetlanie danych.

## Inicjalizacja bazy danych

Projekt zawiera bazę danych, która jest inicjowana w Dockerze. Używa pliku `docker-compose.yaml`, który uruchamia odpowiednie kontenery oraz tworzy bazę danych na potrzeby aplikacji.

---

## Technologie

- **PHP**: Backend aplikacji
- **MySQL**: Baza danych przechowująca notatki
- **TailwindCSS**: Stylizacja aplikacji
- **Docker**: Konteneryzacja aplikacji i bazy danych
- **Docker Compose**: Łatwe zarządzanie wieloma kontenerami

---

## Licencja

Projekt jest dostępny na licencji [MIT](LICENSE).