## About

LearnMore! is a project about managing courses.

### Admin panel

Admins can login at `/admin/login`.
They can register at `/admin/register`.
There is only one role and it is `admin`. They can execute CRUD operations on the entities(courses, teachers, organizations and settlements)

### Client side

The client side has a homepage with tables about:

- `Course` contains these fields(name of the course, info about the course, date of occurrence, start and end times, teacher id, organization id settlement and file).
- `Teacher` contains these fields(id and name).
- `Oragnization` contains these fields(id and name).
- `Settlement` contains these fields(id and name).

## Project requirements

- php 8 
- composer
- Laravel 9 
- Backpack for Laravel

## Project setup

### Configuration of the `.env` file

You have to modify these variables:

    APP_URL= 

    DB_DATABASE_NAME=

### Commands

Commands that have to run inside of the project folder:

    composer install
    php artisan migrate
    php artisan db:seed --class=UsersSeeder
    php artisan db:seed --class=SettlementsSeeder
    php artisan db:seed --class=TeachersSeeder
    php artisan db:seed --class=OrganizationsSeeder
    php artisan db:seed --class=CoursesSeeder
