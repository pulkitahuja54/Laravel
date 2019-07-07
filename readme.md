clone or download this project to local directory or /var/www/html(ec2 instance after LAMP setup).
Setup .env file from .env.example.
Configure database credentials in .env.
Run project installation commands
> composer install
> composer dump-autoload
> npm install
> php artisan key:generate
Setup Virtual host on your local machine or ec2 instance.
Run final project setup command
> php artisan migrate
> npm run production(for ec2 instance only)
> php artisan config:cache
