# Real Estate: Laravel & Vue.js project
Project to learn Vue.js, Inertia & Tailwind CSS

## Environment setup for Windows
- download PHP 8.2
  - https://windows.php.net/download/
  - place in ```C:\php8```
  - add this to PATH variables
  - verify installation with: ```php -v```
- inside ```C:\php8``` duplicate ```php.ini-development``` file and name it ```php.ini```
- enable extensions: ```pdo_mysql```, ```pdo_sqlite```, ```openssl```, ```curl```, ```fileinfo```, ```zip```, ```mbstring```
  - in newly created ```php.ini``` uncomment ```extension=pdo_mysql```, ```extension=pdo_sqlite```, ```extension=openssl```, ```extension=curl```, ```extension=fileinfo```, ```extension=zip```, ```extension=mbstring```
  - uncomment line 768: ```extension_dir = "ext"```
  - restart any opened terminals so changes can take effect
- download & install composer
  - https://getcomposer.org/download/
  - verify installation with ```composer -v```
- download & install Node.js
  - https://nodejs.org/en
  - verify installation with ```node -v```
- download & install Docker Desktop
  - https://www.docker.com/

## Project setup
- clone this repository
  - ```gh repo clone igorjoz/real-estate-laravel```
- run ```composer install```
  - in case of problems, delete ```composer.lock``` and then run ```composer install``` again
- run ```npm install```
- run ```docker compose up```
- run ```php artisan serve```
- run ```npm run dev```
- run ```php artisan migrate```
- run ```php artisan migrate:refresh --seed```
- open ```http://127.0.0.1:8000/``` and you should be all set up
