
# Presto Shop - Sito E-commerce di Vendita di Oggetti Usati

## Benvenuto nel progetto Presto Shop!

Questo progetto è stato sviluppato con **Laravel**, **Bootstrap 5.3**, **Bootstrap Icons** e utilizza **Google AI Vision** per migliorare l'esperienza utente.

L'applicazione offre una piattaforma completa per la gestione e la pubblicazione di annunci di vendita, inclusa una sezione dedicata ai revisori e funzionalità avanzate come CRUD completo, autenticazione utenti e supporto multilingua.

### Caratteristiche Principali
- **E-commerce**: Consente la vendita di oggetti usati.
- **CRUD Funzionante**: Gestione completa di annunci, utenti e categorie.
- **Pagina Revisore**: Per accettare o rifiutare gli annunci pubblicati.
- **Google AI Vision**: Implementato per analizzare e classificare le immagini caricate.
- **Login e Registrazione**: Sistema completo di autenticazione utente.
- **Form Avanzato**: Modulo per l'inserimento di annunci.
- **Traduzione Completa**: Supporto per più lingue per migliorare l'accessibilità globale.

### Tecnologie Utilizzate
- **Backend**: PHP 8.3, Laravel 11, Livewire
- **Frontend**: Bootstrap 5.3
- **Icone**: Bootstrap Icons
- **Gestione Pacchetti**: Node.js con npm
- **AI**: Google AI Vision

### Requisiti di Sistema
- **PHP**: >= 8.3
- **Composer**: Installato sul sistema
- **Node.js**: >= 16.x
- **Database**: MySQL o altro compatibile

### Installazione e Configurazione

1. Clona la repository:
   ```bash
   git clone <chiave-ssh-della-repository>
   cd <nome-cartella-repository>
   ```

2. Installa le dipendenze PHP:
   ```bash
   composer install
   ```

3. Crea il file `.env`:
   ```bash
   cp .env.example .env
   ```

4. Genera la chiave dell'applicazione:
   ```bash
   php artisan key:generate
   ```

5. Esegui le migrazioni per creare il database:
   ```bash
   php artisan migrate
   ```

6. Installa le dipendenze JavaScript:
   ```bash
   npm install
   ```

7. Compila i file CSS e JavaScript:
   ```bash
   npm run dev
   ```

8. Avvia il server di sviluppo:
   ```bash
   php artisan serve
   ```

Visita l'applicazione su [http://localhost:8000](http://localhost:8000).

### Pacchetti Utilizzati
- `google/cloud-vision`: ^1.10
- `laravel/fortify`: ^1.25
- `laravel/framework`: ^11.31
- `laravel/scout`: ^10.11
- `laravel/tinker`: ^2.9
- `livewire/livewire`: ^3.5
- `outhebox/blade-flags`: ^1.5
- `spatie/image`: ^3.7
- `teamtnt/laravel-scout-tntsearch-driver`: ^14.0

---

# Presto Shop - E-commerce Platform for Selling Used Items

## Welcome to the Presto Shop Project!

This project is built with **Laravel**, **Bootstrap 5.3**, **Bootstrap Icons**, and integrates **Google AI Vision** to enhance the user experience.

The application provides a complete platform for managing and publishing sales ads, including a dedicated reviewers' section and advanced features such as full CRUD, user authentication, and multilingual support.

### Key Features
- **E-commerce**: Enables the sale of used items.
- **Working CRUD**: Complete management of ads, users, and categories.
- **Reviewer Page**: To approve or reject published ads.
- **Google AI Vision**: Implemented to analyze and classify uploaded images.
- **Login and Registration**: Full user authentication system.
- **Advanced Form**: Ad submission form.
- **Full Translation**: Multilingual support for global accessibility.

### Technologies Used
- **Backend**: PHP 8.3, Laravel 11, Livewire
- **Frontend**: Bootstrap 5.3
- **Icons**: Bootstrap Icons
- **Package Management**: Node.js with npm
- **AI**: Google AI Vision

### System Requirements
- **PHP**: >= 8.3
- **Composer**: Installed on the system
- **Node.js**: >= 16.x
- **Database**: MySQL or compatible

### Installation and Setup

1. Clone the repository:
   ```bash
   git clone <repository-ssh-key>
   cd <repository-folder-name>
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Create the `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations to create the database:
   ```bash
   php artisan migrate
   ```

6. Install JavaScript dependencies:
   ```bash
   npm install
   ```

7. Compile CSS and JavaScript files:
   ```bash
   npm run dev
   ```

8. Start the development server:
   ```bash
   php artisan serve
   ```

Access the application at [http://localhost:8000](http://localhost:8000).

### Packages Used
- `google/cloud-vision`: ^1.10
- `laravel/fortify`: ^1.25
- `laravel/framework`: ^11.31
- `laravel/scout`: ^10.11
- `laravel/tinker`: ^2.9
- `livewire/livewire`: ^3.5
- `outhebox/blade-flags`: ^1.5
- `spatie/image`: ^3.7
- `teamtnt/laravel-scout-tntsearch-driver`: ^14.0

---

Grazie per aver scelto questo progetto! / Thank you for choosing this project!
