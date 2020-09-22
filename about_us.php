<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" media="all">
    <title>About Us</title>

    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          margin: 0;
        }

        html {
          box-sizing: border-box;
        }

        *, *:before, *:after {
          box-sizing: inherit;
        }

        .column {
          float: left;
          width: 33.3%;
          margin-bottom: 16px;
          padding: 0 8px;
        }

        .card {
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
          margin: 8px;
        }

        .about-section {
          padding: 50px;
          text-align: center;
          background-color: #474e5d;
          color: white;
        }

        .container {
          padding: 0 16px;
        }

        .container::after, .row::after {
          content: "";
          clear: both;
          display: table;
        }

        .title {
          color: grey;
        }

        .button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
        }

        .button:hover {
          background-color: #555;
        }

        @media screen and (max-width: 650px) {
          .column {
            width: 100%;
            display: block;
          }
        }
    </style>
  </head>

  <body>
    <?php
      require_once 'header.html';
      require_once 'functions.php';
    ?>

    <div style="width: 98.90%; align: center; text-align: center; margin-left: 0.35%;">
      <div class="about-section">
        <h1>BIL Masters </h1>
        <p> - это организатор турниров.</p>
        <p>Хочешь к нам !? Пиши на почту >>> <a href="gmail.com" style="text-decoration: none; color: white;">admin@bilmasters.ru</a></p>
      </div>
      <br>
      <br>
      <h1 style="text-align:center">НАША КОМАНДА</h1>
      <br>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/4.png" alt="Томпак" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">Backend Web Developer</p>
              <p>Бэкенд-веб-разработчик – это, по сути, человек, разрабатывающий серверную логику и осознающий, в каком контексте она будет исполняться – в контексте веб-приложений.</p>
              <p>yelamanserikovyelaman@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="images/2.png" alt="Alih" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">Frontend Web Developer</p>
              <p>Frontend — это разработка пользовательского интерфейса и функций, которые работают на клиентской стороне веб-сайта или приложения. Это всё, что видит пользователь и с чем он взаимодействует.</p>
              <p>bekvolatov.alikhan@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="images/3.png" alt="Alen" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">Web Designer</p>
              <p>Веб-дизайн (от англ. web design) — отрасль веб-разработки и разновидность дизайна, в задачи которой входит проектирование пользовательских веб-интерфейсов для сайтов или веб-приложений.</p>
              <p>alen.smailov04@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>
      </div>
      <div style="margin-top: 280px;">
       <?php
          require_once 'footer.html';
        ?>
      </div>
   </body>
 </html>
