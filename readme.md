<h1 align="center">Items Management with Sequence Drag & Drop</h1>

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

## Output
![output screen](https://github.com/disha-pishavadia24/dishaTest/blob/master/screenview.png)


## Installation

## 1 Download the Code
Clone the Repositry to your web root folder

## 2 Install Packages
```sh
$ composer install
```

## 3 Setup Environment
rename .env.example to .env file and configure environment variables in it and replace it with your database credentials.


## 4 Setup Database
```sh
$ php artisan migrate
```

## 5 Start Server
```sh
$ php artisan serve
```
    
## General Note

Laravel version 6 with blade template and I have used jquery UI for drag and drop items from left to right and right to left side, By default I have added items to the left side.
