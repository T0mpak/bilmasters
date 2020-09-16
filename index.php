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
  require_once 'header.html'
  ?>


    <div class="container2">
      <?php require_once 'slider.php' ?>
    </div>



    <div class="container1">
      <section class="our-news">
        <a href="news.php"><h1>Новости</h1></a>
        <div class="news">
          <div class="news-img"><img src="https://scontent-waw1-1.cdninstagram.com/v/t51.2885-19/s150x150/117899888_352594029068455_4962978409311692556_n.jpg?_nc_ht=scontent-waw1-1.cdninstagram.com&_nc_ohc=Aj0oniXpxdsAX_-byfo&oh=4c74ead30b3e7508e50f3d7e784a1466&oe=5F7B4F1B" alt="dota2"></div>
          <a href="">
          <h3 class="news-title">birgemiz_cup</h3>
          </a>
          <p class="news-content">Birgemiz Charity Debate Cup. Хочешь развить умение мыслить логически, расширить кругозор и сделать доброе дело? Мы объявляем о старте благотворительно-дебатного турнира «Birgemiz» для школьников 9-12 классов (не только Казахстан)</a>.</p>
          <span class="">
            <i><p>25.09.2020</p></i>
          </span>
        </div>
        <div class="news">
          <div class="news-img"><img src="images/dota2-roster.jpg" alt="dota2"></div>
          <a href="">
          <h3 class="news-title">Обьявление о предстоящем турнире по DOTA2</h3>
          </a>
          <p class="news-content">Киберспортивный турнир по DOTA2 будет проведен в 2021 году в Турции. Финалисты квалификации пройдут прямиком в плей-офф! Ждите подробных новостей на <a href="/tournaments.php">нашем сайте</a>.</p>
          <span class="">
            <i><p>18.08.2020</p></i>
          </span>
        </div>
    </section>
    <p><a href="news.php">Больше...</a></p>
  </div>




    <?php
    require_once 'footer.html';
     ?>

  </body>
</html>
