
## Welcome to the Presto Shop Project!

This project leverages Laravel, Bootstrap 5.3, Bootstrap Icons, and incorporates Google AI Vision to improve the user experience.

It offers a comprehensive platform for creating and managing sales ads, featuring a dedicated reviewers' section and advanced functionalities like complete CRUD operations, user authentication, and multilingual support.

### Key Features
- **E-commerce**: Enables the sale of items.
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

### Screenshots

Here are some screenshots of the application in action:

1. **Homepage**: ![Homepage Screenshot](public/screenshot/homepage_screenshot.PNG)
   
2. **Ad Submission Form**: ![Ad Submission Form](public/screenshot/login_screenshot.PNG)
   


---

Thank you for choosing this project!
