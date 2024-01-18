First run the 
composer install

In your terminal, install the ‘simple-peer’ and ‘pusher-js’ by running the following command:

npm install simple-peer --save-dev
npm install pusher-js --save-dev

Then, let’s add PHP library to interact with Pusher as a requirement of our project using Composer.

composer require pusher/pusher-php-server

copy .env.example to .env
then modify the databases

php artisan migrate 
php artisan key:generate

after doing above things

npm run dev

php artisan serve

after registration and login

http://127.0.0.1:8000/video_chat