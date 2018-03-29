<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$res = $client->request('GET', 'http://localhost/php7-matthieu/Challenges/6_alphaseries/');

$B1ingesup = new \B1ingesup(27, "B1ingesup");
$B2ingesup = new \B2ingesup(27, "B2ingesup");
 ?>

 <!doctype html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Jumbotron Template for Bootstrap</title>

     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </head>
 <body>
     <main role="main">
         <div class="jumbotron">
             <div class="container">
                 <h1 class="display-3">Jumbotron</h1>
                 <pre>
                    <h2>B1ingesup</h2>
                    <p><?php print $B1ingesup; ?></p>
                    <p><?php print $B1ingesup->moinsFort(); ?></p>
                    <h2>B2ingesup</h2>
                    <p><?php print $B2ingesup; ?></p>
                    <p><?php print $B2ingesup->plusFort(); ?></p>

                 </pre>
             </div>
         </div>
     </main>

     <footer class="container">
         <p>&copy; Bootstrap 2018</p>
     </footer>
 </body>
 </html>
