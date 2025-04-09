
# Notes Project

## Opis projektu

Aplikacja "Notes" umożliwia zarządzanie notatkami poprzez dodawanie, edycję oraz usuwanie. Oferuje również funkcje rejestracji, logowania i wylogowania użytkownika. Dostęp do notatek jest zabezpieczony, co oznacza, że tylko zalogowani użytkownicy mogą przeglądać i modyfikować swoje notatki. Dodatkowo, aplikacja zapewnia ochronę przed nieautoryzowanym dostępem, uniemożliwiając wejście na stronę notatek, jeśli użytkownik nie jest zalogowany, oraz blokując dostęp do rejestracji dla już zalogowanych użytkowników.

## Struktura projektu

```
notes/
│── Core/
│── Http/
│── database/
│── public/
│── tests/
│── views/
├── .gitignore
├── Dockerfile
├── README.md
├── bootstrap.php
├── composer.json
├── composer.lock
├── config.php
├── docker-compose.yaml
├── phpunit.xml
└── routes.php
```

- `Core/`: Zawiera główną logikę aplikacji.
- `Http/`: Odpowiada za obsługę żądań HTTP.
- `database/`: Zawiera plik `dump.sql` używany do inicjalizacji bazy danych.
- `public/`: Katalog dostępny publicznie, zawierający pliki, które są bezpośrednio dostępne dla użytkownika.
- `tests/`: Zawiera testy aplikacji.
- `views/`: Zawiera pliki widoków aplikacji.

## Wymagania

- [Composer](https://getcomposer.org/) do zarządzania zależnościami PHP.
- [Docker](https://www.docker.com/) do uruchomienia aplikacji w kontenerze.

## Instalacja

1. **Klonowanie repozytorium:**

   ```bash
   git clone https://github.com/PKoralewski/notes.git
   cd notes
   ```

2. **Instalacja zależności:**

   Upewnij się, że masz zainstalowanego Composera. Następnie uruchom:

   ```bash
   composer install
   ```

3. **Uruchomienie aplikacji:**

   Upewnij się, że masz zainstalowanego Dockera. Następnie uruchom:

   ```bash
   docker-compose up --build -d
   ```

   Aplikacja będzie dostępna pod adresem `http://localhost:8000`.

## Technologie

- **Tailwind CSS**: Użyty do stylizacji aplikacji.
- **Tailwind UI**: Wykorzystano komponenty do szybszego tworzenia interfejsu użytkownika.
- **PestPHP**: Zainstalowany w celu ułatwienia pisania testów.

## Testowanie

Testy aplikacji są zrealizowane przy użyciu PestPHP. Aby uruchomić testy, wykonaj:

```bash
./vendor/bin/pest
```

## Licencja

Projekt jest dostępny na licencji MIT.