1.Clone or download this project to local directory or /var/www/html(ec2 instance after LAMP setup).

2.Setup .env file from .env.example.

3.Configure database credentials in .env.

4.Run project installation commands
> composer install

> composer dump-autoload

> npm install

> php artisan key:generate

5.Setup Virtual host on your local machine or ec2 instance.

6.Run final project setup command

> php artisan migrate

> php artisan config:cache
