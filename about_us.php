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
      ?>

    <div style="width: 98.90%; align: center; text-align: center; margin-left: 0.35%;">
      <div class="about-section">
        <h1>BIL Masters </h1>
        <p> - это организатор турниров.</p>
        <p>Хочешь к нам !? Пиши на почту >>> admin@bilmasters.ru</p>
      </div>

      <h2 style="text-align:center">Наша Команда</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/1.png" alt="Danik" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">CEO</p>
              <p>Some text that describes me lorem ipsum ipsum lorem. Ну Даник это Даник.</p>
              <p>danial.bakyt@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/2.png" alt="Alih" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem. Ну Алих это Алих.</p>
              <p>alikhan.beka@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/3.png" alt="Alen" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">CEO & Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem. Ну Ален это Ален.</p>
              <p>smailov.alen04@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/4.png" alt="Томпак" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">Донер</p>
              <p>Some text that describes me lorem ipsum ipsum lorem. Ну Ела это Ела.</p>
              <p>musaacuminata@ele.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/5.png" alt="Amir" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">TASHERIZ6A</p>
              <p>Some text that describes me lorem ipsum ipsum lorem. Ну Амир это Амир.</p>
              <p>amir.adil04@example.com</p>
              <p><button class="button">Написать</button></p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="images/6.png" alt="Бойджек" style="max-height: 520px; width: 100%;">
            <div class="container">
              <h2></h2>
              <p class="title">CEO & Founder & Designer</p>
              <p>Some text that describes me lorem lorem. Ну Байжан это Байжан.</p>
              <p>khasneoff@gmail.com</p>
              <p><button class="button">Написать</button></p>
            </div>
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
