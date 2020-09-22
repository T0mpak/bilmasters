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
      <br>
      <?php
        require_once 'slider.php';
      ?>
    </div>

    <div class="container1">
      <section class="our-news">
        <br>
        <a href="news.php">
          <h1 style="font-size: 56px;">Новости</h1>
        </a>
        <?php
            $result = queryMysql("SELECT * FROM news ORDER BY `date` DESC");

            for ($j = 0 ; $j < 2 ; ++$j)
            {
              $image   = $title = $text = $date = "";
              $row     = $result->fetch_array(MYSQLI_NUM);

              $news_id = $row[0];
              $image   = $row[1];
              $title   = $row[2];
              $text    = $row[3];
              $date    = $row[4];

            echo <<<_END
              <div class="news">

              <div class="news-img">
                    <img src="admin/uploads/$image" alt="$image">
              </div>

              <h3 class="news-title">
                  $title
              </h3>

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
    <p>
      <a href="news.php" style="font-size: 1.25em; text-decoration: none;">Больше...</a>
    </p>
  </div>

  <?php
    require_once 'footer.html';
  ?>
  </body>
</html>
