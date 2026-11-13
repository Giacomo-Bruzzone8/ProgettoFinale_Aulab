# Presto Shop

Web app di annunci di compravendita realizzata in team durante il corso **Aulab Hackademy** come progetto finale.

Gli utenti registrati possono pubblicare prodotti con immagini; un'area **revisore** permette di approvare o rifiutare gli annunci prima che diventino pubblici. Le immagini caricate vengono analizzate con **Google Cloud Vision** (rilevamento contenuti inappropriati, etichette automatiche, oscuramento dei volti).

![Homepage](public/screenshot/homepage_screenshot.PNG)

---

## Funzionalità

- Registrazione e login (Laravel Fortify)
- Creazione annunci con upload di più immagini (Livewire)
- Filtro per categoria e ricerca full-text (Laravel Scout + TNTSearch)
- Area revisore per accettare / rifiutare gli annunci
- Richiesta "Lavora con noi" per diventare revisore
- Analisi immagini con Google Cloud Vision (SafeSearch, etichette, blur dei volti)
- Interfaccia multilingua: italiano, inglese, spagnolo, francese, tedesco, giapponese

## Stack

| Livello  | Tecnologie                                  |
|----------|---------------------------------------------|
| Backend  | PHP 8.2+, Laravel 11, Livewire 3            |
| Frontend | Blade, Bootstrap 5.3, Bootstrap Icons, Vite |
| Database | MySQL 8                                     |
| AI       | Google Cloud Vision API                     |

---

## Requisiti

Prima di iniziare, assicurati di avere installato:

- **PHP 8.2 o superiore**, con le estensioni `pdo_mysql`, `gd`, `fileinfo`, `mbstring`, `sqlite3` (quest'ultima serve a TNTSearch)
- **Composer** 2.x
- **Node.js** 18+ e **npm**
- **MySQL** 8 (o MariaDB), in esecuzione

Per verificare:

```bash
php -v
composer -V
node -v
mysql --version
```

---

## Avvio rapido

### 1. Clona il progetto ed entra nella cartella

```bash
git clone <url-del-repository>
cd ProgettoFinale_Aulab
```

### 2. Installa le dipendenze

```bash
composer install
```

```bash
npm install
```

### 3. Crea il file `.env`

```bash
cp .env.example .env
```

Apri `.env` e controlla la sezione database. I valori di default sono:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quantum_coders_5_lgbta
DB_USERNAME=root
DB_PASSWORD=root
```

Modifica `DB_USERNAME` e `DB_PASSWORD` con le credenziali del tuo MySQL locale. Puoi anche cambiare il nome del database.

### 4. Crea il database

Il database deve esistere **prima** di lanciare i comandi `artisan` (l'app legge le categorie dal database già all'avvio). Da terminale:

```bash
mysql -u root -p -e "CREATE DATABASE quantum_coders_5_lgbta CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
```

In alternativa crealo da phpMyAdmin, MySQL Workbench o DBeaver.

### 5. Prepara l'applicazione

```bash
php artisan migrate --seed
```

```bash
php artisan key:generate
```

```bash
php artisan storage:link
```

- `migrate --seed` crea le tabelle e inserisce le categorie dei prodotti
- `key:generate` genera la chiave di cifratura dell'app
- `storage:link` rende visibili le immagini caricate dagli utenti

### 6. Compila gli asset (CSS/JS)

```bash
npm run build
```

### 7. Avvia il server

```bash
php artisan serve
```

Apri il browser su **http://localhost:8000** 🎉

---

## Sviluppo

Se vuoi modificare stili o script con il ricaricamento automatico, al posto di `npm run build` tieni aperti **due terminali**:

```bash
php artisan serve
```

```bash
npm run dev
```

## Coda dei job (elaborazione immagini)

Quando un utente carica un annuncio, ogni immagine viene subito ritagliata a **571×450** con watermark, così tutte le card hanno la stessa dimensione. Questo passaggio non richiede né la coda né Google.

Le elaborazioni con Google Cloud Vision (oscuramento dei volti, analisi SafeSearch, etichette) girano invece in background. Per eseguirle serve un worker attivo in un terzo terminale:

```bash
php artisan queue:work
```

Il worker è **facoltativo**:

| Situazione | Risultato |
|------------|-----------|
| Nessun worker attivo | Ritaglio 571×450 con watermark |
| Worker attivo, senza credenziali Google | Come sopra (i job Google vengono saltati) |
| Worker attivo, con credenziali Google | Ritaglio con volti oscurati, più etichette e valutazione SafeSearch nell'area revisore |

Se il ritaglio non esiste (ad esempio per immagini copiate a mano in `storage/`), viene mostrata l'immagine originale, adattata via CSS alle stesse proporzioni.

## Google Cloud Vision (opzionale)

1. Crea un progetto su [Google Cloud Console](https://console.cloud.google.com/) e abilita la **Cloud Vision API**
2. Crea un **Service Account** e scarica la chiave in formato JSON
3. Rinomina il file in `google_credential.json` e copialo nella **root del progetto** (accanto ad `artisan`)

Il file è già escluso da git tramite `.gitignore`: **non committarlo mai**.

Se il file non c'è, l'app funziona lo stesso: i job di Google Vision vengono saltati e nell'area revisore compare "No labels".

## Diventare revisore

Dopo esserti registrato dal sito, puoi rendere il tuo utente revisore da terminale:

```bash
php artisan app:make-user-revisor tua@email.it
```

Da quel momento nella navbar comparirà l'area di revisione degli annunci.

## Ricerca prodotti

La ricerca usa TNTSearch, che crea i suoi indici in `storage/`. Se la ricerca non restituisce risultati per prodotti già presenti (ad esempio dopo aver importato un database), ricostruisci l'indice:

```bash
php artisan scout:import "App\Models\Product"
```

---

## Problemi comuni

| Errore | Soluzione |
|--------|-----------|
| `Unknown database 'quantum_coders_5_lgbta'` | Il database non esiste: crealo (passo 4) |
| `Access denied for user 'root'` | Username/password MySQL in `.env` errati |
| `No application encryption key has been specified` | Esegui `php artisan key:generate` |
| `Vite manifest not found` | Esegui `npm run build` (oppure tieni aperto `npm run dev`) |
| Immagini dei prodotti non visibili | Esegui `php artisan storage:link` (crea `public/storage`) |
| Dopo aver modificato `.env` non cambia nulla | Esegui `php artisan config:clear` |

---

## Autori

Progetto realizzato dal team **Quantum Coders** durante il corso Aulab Hackademy.
