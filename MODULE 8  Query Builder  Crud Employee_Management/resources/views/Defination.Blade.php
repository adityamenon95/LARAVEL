<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>How to do config database in laravel</title>
</head>

<body>
    <div class="container mt-5">
        
<h1>MODULE 8 (Migration)</h1>   

<h1 class="text-center">How to do config database in laravel</h1>


<p><b>Views are stored in the resources/views directory of the Laravel project. By default, Laravel comes with a set of predefined views, such as welcome.blade.php and errors/404.blade.php
Laravel uses the PDO (PHP Data Objects) extension to connect to databases. To configure your database in Laravel, you will need to update the config/database.php file with your database credentials.</b></p>
<li>
<p>
1.First, ensure you have a database set up and have the credentials (username, password, hostname, etc.) ready. Laravel supports several database systems, including MySQL, PostgreSQL, and SQLite.
</p>
</li>

<li>
<p>
2.Open the config/database.php file and find the connections array. This array contains all of the available connection configurations.
</p>
</li>

<li>
<p>
3.Choose a connection type from the array (e.g., mysql, sqlite, pgsql, etc.) and update the corresponding configuration options with your database credentials. For example, to configure a MySQL database, you might update the Default Database Connection Name:
'default' => env('DB_CONNECTION', 'mysql'),
</p>
</li>

<li>
<p>
4.Open the .env file in the root directory of your Laravel project. Set the DB_CONNECTION variable in this file to match the connection type you chose in the previous step. For example, if you are using a MySQL database, you would set the DB_CONNECTION variable to mysql.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
</p>
</li>

<li>
<p>
5.Set the DB_HOST variable to the hostname of your database server. For example, if you are using a local development server, you might set this to localhost.
</p>
</li>

<li>
<p>
6.Set the DB_DATABASE variable to the name of your database.
</p>
</li>

<li>
<p>
7.Set the DB_USERNAME and DB_PASSWORD variables to the username and password for your database.
</p>
</li>

<li>
<p>
8.If you use a MySQL or PostgreSQL database, you may need to set the DB_PORT variable in your .env file to the correct port number for your database server.
</p>
</li>

<li>
<p>
9.If you use a MySQL database, you may also need to set the DB_SOCKET variable in your .env file if your MySQL server uses a socket other than the default.
Save the .env file and exit.
</p>
</li>
      