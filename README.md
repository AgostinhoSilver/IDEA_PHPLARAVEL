# Getting Started
This project was made with PHP Laravel. to start you will have to install composer  in your local machine. You can install composer by following the instruction in this link [Composer](https://getcomposer.org/)



### Running the project
Open the project and in your terminal move to the  Beneficiary_Management folder.
```
cd Beneficiary_Management
```

Run composer Update

```
composer update

```

Run migrations, to create tables
```
php artisan migrate:refresh

```
Run the seed for the beneficiaries
```
php artisan db:seed --class=Beneficiaries
```

Run start the server
```
php artisan serve
```
