# larasearch
Implementing search functionality using Laravel Scout and Vue js

## technologies used at the time of development
- PHP 7.1.14
- Laravel 5.6.3
- laravel/scout 4.0
- phpunit 7.0
- mysql 5.7.20

## Commits / Steps to implement

### Initial commit
Repository created with README.md file.

### Laravel installation

```angular2html
laravel new search --force
```
I had to use *--force* since the cloned git repository was found locally.

**Setup .env file with your preferred database configurations.**
```angular2html
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=larasearch
DB_USERNAME=username
DB_PASSWORD=password
```
I use MySQL here.

### Create model and migrations for products table

```angular2html
php artisan make:model Product -m
```
This will create the model and migration at the same time for 'Product'.

Then add the fields to migrations and run following command to see the Products table created without fail.
```angular2html
php artisan migrate
```

### Product Factory created for dummy data creation

```angular2html
php artisan make:factory ProductFactory --model=Product
```
Then in the new factory file we set data to each columns/fields of Products table with auto generated values using Faker class.

### Setup api routing to retrieve data
First we create the controller class and it's method that is to be called by the route.
```angular2html
php artisan make:controller Api/SearchController
```
This will create SearchController class along with folder 'Api' in Controller folder.
Leaving as it is we make changes on api routes.

Now you should run the following to check for any route errors.
```angular2html
php artisan route:list
```

### Installing Laravel Scout - Official Laravel package
```angular2html
composer require laravel/scout
php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
```
Then autoload the provider using configuration files and make Product searchable by adding **Laravel\Scout\Searchable** trait to Product Model.

## Installing Algolia - Search Driver
```apacheconfig
composer require algolia/algoliasearch-client-php
```
SignUp in Algolia and update .env file with following and Add AdminAPIKey
```apacheconfig
ALGOLIA_APP_ID=YourApplicationID
ALGOLIA_SECRET=YourAPIKey
```
Do the manual indexing:
```apacheconfig
php artisan scout:import "App\Product"
```
Now you may find data on Algolia account > Indices
