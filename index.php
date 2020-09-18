<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" media="all">
    <title>BIL Masters</title>
  </head>
  <body>


  <?php
    require_once 'header.html';
    require_once 'functions.php';
  ?>


    <div class="container2">
<?php
    require_once 'slider.php';
?>
    </div>



    <div class="container1">
      <section class="our-news">
        <a href="news.php"><h1>Новости</h1></a>
<?php
    $result = queryMysql("SELECT * FROM news ORDER BY newsDate DESC");

    for ($j = 0 ; $j < 2 ; ++$j)
    {
      $image = $post = $text = $date = "";
      $row   = $result->fetch_array(MYSQLI_NUM);
      //$new_s_id = $row[0];
      $image = $row[1];
      $post  = $row[2];
      $text  = $row[3];
      $date  = $row[4];

echo <<<_END
<div class="news">


<div class="news-img">
      <img src="admin/uploads/$image" alt="$image">
</div>


<a href="">
  <h3 class="news-title">
      $post
  </h3>
</a>


<p class="news-content">
      $text
</p>


<span class="">
  <i><p>
      $date
  </p></i>
</span>


</div>
_END;

        }
?>
    </section>
    <p><a href="news.php">Больше...</a></p>
  </div>




    <?php
    require_once 'footer.html';
     ?>

  </body>
</html>
