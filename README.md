# Laravel Student Project

This project integrates with a Django API to display student records using Laravel and Django together.

## Installation

### Prerequisites

- PHP (>= 7.4)
- Composer (for Laravel dependencies)
- Python (for Django)
- Django

### Clone the Repository

Clone the repository from GitHub:

```bash
git clone https://github.com/AnjanaPK95/Student-laravel.git
cd Student-laravel
```
### Install Dependencies
Install Laravel dependencies using Composer:
```bash
composer install
```
### Running Servers
To run both Django and Laravel servers simultaneously:

1. Start Django Server:

    -> Navigate to your Django project directory.
    -> Start Django server:
           ```bash
           python manage.py runserver 8000
           ```
2. Start Laravel Server:

    -> Navigate to your Laravel project directory.
    -> Start Laravel server on a different port (e.g., 8001)
           ```bash
           php artisan serve --port=8001
           ```
### Accessing the Application

Laravel Application: Access your Laravel application at http://localhost:8001

Django API: The Django API endpoint is available at http://localhost:8000/api/students/

