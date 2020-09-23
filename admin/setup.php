<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup DB</title>
  </head>

  <body>
    <h3>Setting up (3 TABLES)...</h3>
  <?php

  require_once 'functions.php';
  echo "require<br>";

  createTable('sliders',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              image VARCHAR(128),
              title VARCHAR(255),
              text TEXT');
  echo "sliders OK<br>";

  $result = queryMysql('SELECT * FROM sliders');
  if (!$result->num_rows) {
    for ($i=0; $i < 3; $i++) {
      queryMysql('INSERT INTO sliders VALUES(NULL, NULL, NULL, NULL);');
    }
    echo "INSERT INTO sliders OK<br>";
  } else {
    echo "DATA in 'sliders' already exists<br>";
  }


  createTable('news',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              image VARCHAR(128),
              title VARCHAR(255),
              text TEXT,
              date DATE,
              INDEX(title(16))');
  echo "news OK<br>";

  createTable('tournaments',
              'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
              image VARCHAR(128),
              title VARCHAR(255),
              text TEXT,
              date DATE,
              INDEX(title(16))');
  echo "tournaments OK<br>";

?>

    <br>...done.
  </body>
</html>
