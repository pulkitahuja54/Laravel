1. Clone or download this project to local directory or /var/www/html(ec2 instance after LAMP setup).

2. Setup .env file from .env.example.

3. Configure database credentials in .env.

4. Run project installation commands

> composer install

> composer dump-autoload

> npm install

> php artisan key:generate

5. Setup Virtual host on your local machine or ec2 instance.

6. Passport setup

> php artisan passport:install

# save the credentials passport generated

> php artisan passport:client --client

# save the credentials for passport client generated

7. Configure AWS credentials in .env (For s3 only)

AWS_ACCESS_KEY_ID=

AWS_SECRET_ACCESS_KEY=

AWS_DEFAULT_REGION=eu-west-1

AWS_BUCKET=

AWS_SNS_REGION=eu-west-1

8. Configure SES credentials in .env

MAIL_DRIVER=ses

SES_KEY=

SES_SECRET=

SES_REGION=eu-west-1

9. Configure Laravel queue

QUEUE_CONNECTION='database'

10. Setup Google credentials (For G Suite login)

GOOGLE_CLIENT_ID=

GOOGLE_CLIENT_SECRET=

GOOGLE_CLIENT_CALLBACK="app_url/auth/google/callback"

GOOGLE_CLIENT_HD=your gsuite domain

GOOGLE_API_KEY=

11. Setup website credentials (if you have a website component as well)

WEBSITE_URL=''

WOOCOMMERCE_API_KEY=

WOOCOMMERCE_API_SECRET=

WEBSITE_KIOSK_URL=''

WOOCOMMERCE_KIOSK_ATTRIBUTE_ID=

WORDPRESS_DATABASE=''

WORDPRESS_PREFIX=''

WORDPRESS_DB_USER=''

WORDPRESS_DB_PASSWORD=


12. Configure S3

# Make sure the filesystem driver is S3 in .env

FILESYSTEM_DRIVER='s3'

# Create a new S3 bucket and copy the bucket policy from the UAT bucket


13. Setup cronjob

> sudo crontab -e

# Enter the following cronjob. Edit the project directory.

* * * * * cd /path/to/app/directory && php artisan schedule:run >> /dev/null 2>&1

14. Run default organisation seeder

php artisan db:seed

15. Run final project setup commands

> php artisan migrate

> php artisan db:seed

> npm run production

> php artisan config:cache

> sudo php artisan queue:restart

