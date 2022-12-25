<?php

declare(strict_types=1);

// Always require autoload when using packages
require(__DIR__ . '/vendor/autoload.php');

// Tell PHP to use this fine package
use Dotenv\Dotenv;

// "Connect" to .env and load it's content into $_ENV
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?= $_ENV['HOTEL_NAME'] ?></title>

     <!-- styles -->
     <link rel="stylesheet" href="styles/main.css">
     <link rel="stylesheet" href="styles/header.css">
     <!-- scripts -->
</head>

<body>
     <header>
          <h1><?= $_ENV['HOTEL_NAME'] ?></h1>
          <p>the staggering hotel located on <?= $_ENV['ISLAND_NAME'] ?></p>
     </header>

     <main>
          <article>
               <h2>Economy</h2>
          </article>

          <article>
               <h2>Standard</h2>
          </article>

          <article>
               <h2>Luxury</h2>
          </article>
     </main>
</body>

</html>
