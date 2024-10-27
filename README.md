## Installation

Follow these steps to set up the Event Management System on your local machine:

1. **Clone the repository**:
   git clone (https://github.com/Subitskya/Event-Management.git)
   cd event-management-system

2. **Install dependencies**:
    composer install

3. **Set up the environment**:
    cp .env.example .env

4. **Generate the application key**:
    php artisan key:generate

5. **Run migrations**:
    php artisan migrate

6. **Seed the database**:
    php artisan db:seed

7. **Start the development server**:
    php artisan serve

Now you should be able to use the Event Management System!