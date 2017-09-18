# Setup

## Check out from Github

### Clone the project

Project link: [https://github.com/co0lsky/photo-management-with-laravel](https://github.com/co0lsky/photo-management-with-laravel)

Clone the project from Github
~~~
// Terminal
git clone -b '#2_validation' https://github.com/co0lsky/photo-management-with-laravel.git photo-management
cd photo-management
composer install
~~~

## Configure application environment file

Duplicate the .env.example to be .env
## Generate Application Key

Next, you should generate an application key. The application key helps to secure your application’s user sessions and other encrypted data.
~~~
// Terminal
php artisan key:generate
Application key [base64:uJwG9Kge1xwH7O0/sckwN96pENJJy8cr5i+WbwQ7dYw=] set successfully.
~~~

## Test

Launch your application. 


![Upload form](http://iteachyouhowtocode.com/wp-content/uploads/2017/09/validation-1.png)
