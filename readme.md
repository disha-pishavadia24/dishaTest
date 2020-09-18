<h1 align="center">Items Management API</h1>

## Requirements
1. PHP >= 7.2.5
2. BCMath PHP Extension
3. Ctype PHP Extension
4. Fileinfo PHP extension
5. JSON PHP Extension
6. Mbstring PHP Extension
7. OpenSSL PHP Extension
8. PDO PHP Extension
9. Tokenizer PHP Extension
10. XML PHP Extension
11. MySQL
12. Web Server (Apache or NGINX)

## Installation

## 1 Download the Code
Clone the Repositry to your web root folder

## 2 Install Vendor Packages
```sh
$ composer install
```

## 3 Setup Environment
create .env file copied from .env.example and configure environment variables in it and replace it with your database creadentials.


## 4 Setup Database
```sh
$ php artisan migrate
```

## 5 Start Server
```sh
$ php artisan serve
```
    
## General Note

I have used jquery UI for drad and drop items from left to right and right to left side, By default I have added items to the left side.