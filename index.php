<?php

include 'inc/functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!--  Refresh the page every 16 seconds -->
  <meta http-equiv="refresh" content="16"> 
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
      body {
         background-color: <?php echo randomBackgroundColor(); ?>;
      }
  </style>
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php printQuote($quotes); ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)">Show another quote</button>
  </div>
</body>
</html>
