# Birthday-App

This application is for those of us who hardly remeber things. Birthdays are important and should never be forgottten, and that is exactly what this application is for

## Requirements

PHP 5.2+ and Composer are required.

## Installation
After cloning the repository, Run:
* Composer update
* Copy `.env.example` to a new file `.env`
* Edit database configuration in `.env`, change
    ```
        DB_DATABASE=
        DB_USERNAME=
        DB_PASSWORD=
    ```
* Run php artisan migrate

## Usage
Run `php artisan serve` to run on the default port 8000 or `php artisan serve --port=***` to run on your preferred port.

Next,add birthdays of your friends and loved ones 

And it's that simple


## Contributing
All contributions are welcomed and can be made in form of pull requests 

## Security Vulnerabilities

If you discover a security vulnerability within OMS, please send an e-mail to Yusuf Oluwadamiloju at yusufdamiloju@gmail.com.

## License

Birthday-App is an open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
