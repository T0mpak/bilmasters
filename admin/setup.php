<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database(DN_name=bilmaste_bilmaste)</title>
  </head>
  <body>

    <h3>Setting up (4 TABLES)...</h3>

<?php

  require_once 'functions.php';
  echo "require<br>";

  createTable('slider',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              imageName VARCHAR(128),
              postName VARCHAR(255),
              text TEXT,
              INDEX(postName(16))');
  echo "slider<br>";

  createTable('news',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              imageName VARCHAR(128),
              newsTitle VARCHAR(255),
              newsContent TEXT,
              newsDate DATE,
              INDEX(newsTitle(16))');
  echo "news<br>";

  createTable('tournaments',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              imageName VARCHAR(128),
              toursTitle VARCHAR(255),
              toursText TEXT,
              toursDate DATE,
              INDEX(toursTitle(16))');
  echo "tournaments<br>";

  createTable('ourTeam',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              imageName VARCHAR(128),
              role VARCHAR(128),
              detailRole TEXT,
              emailAdress VARCHAR(128),
              INDEX(detailRole(12))');
  echo "team<br>";
?>

    <br>...done.
  </body>
</html>
