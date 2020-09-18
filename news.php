<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" media="all">
    <title>News</title>
  </head>
  <body>

    <?php
    require_once 'header.html';
    require_once 'functions.php';
      ?>

      <div class="container1">
        <section class="our-news">
          <a href="news.php"><h1>Новости</h1></a>

        <?php
        $result = queryMysql("SELECT * FROM news ORDER BY newsDate DESC");
        $num    = $result->num_rows;

        for ($j = 0 ; $j < $num ; ++$j)
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

          <!-- <div class="news">
            <div class="news-img"><img src="images/dota2-roster.jpg" alt="dota2"></div>
            <a href="">
            <h3 class="news-title">Обьявление о предстоящем турнире по DOTA2</h3>
            </a>
            <p class="news-content">Киберспортивный турнир по DOTA2 будет проведен в 2021 году в Турции. Финалисты квалификации пройдут прямиком в плей-офф! Ждите подробных новостей на <a href="/tournaments.php">нашем сайте</a>.</p>
            <span class="">
              <i><p>18.08.2020</p></i>
            </span>
          </div>
          <div class="news">
            <div class="news-img"><img src="images/cs-roster.jpg" alt="csgo"></div>
            <a href="">
            <h3 class="news-title">ZZ5 eSports - победители BIL Major 2020!</h3>
            </a>
            <p class="news-content">Киберспортивный клуб ZZ5 eSports (zykzykspat) по CSGO основанный в 2017 году. Четвертьфиналисты квалификации Cybermatch 2019, топ-74 республиканского турнира AltelCyberGames 2018, участники AlamanCup.
            Пройдя достаточно легко групповой этап, zzs в упорной борьбе в финале против Шымкентского состава одержала победу 2:1 по картам, и тем самым становятся чемпионами BIL Major 2020.</p>
            <span class="">
              <i><p>17.07.2020</p></i>
            </span>
          </div>
          <div class="news">
            <div class="news-img"><img src="images/logo.png" alt="zykzykspat"></div>
            <a href="">
            <h3 class="news-title">BIL Masters</h3>
            </a>
            <p class="news-content">BIL Masters - это организатор турниров. Ожидайте в скором времени информацию о первом турнире от нас.</p>
            <span class="">
              <i><p>16.06.2020</p></i>
            </span>
          </div> -->
      </section>
    </div>

     <?php
     require_once 'footer.html';
      ?>
   </body>
 </html>
