<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Train your map pool!</title>
    <script type="text/javascript" src="OSC.js"></script>
    <style>
    #mycanvas{
        display: flex;
        background: #def;
        background-size: cover;
        background-repeat:   no-repeat;
        background-size: cover;
        background-position: center;
        align-items: center;
        align-self: center;
        align-content: center;
        border: 2px solid black;
        cursor: crosshair;
        margin: auto;
      }

    .mybody {
      padding-bottom: 350px;
      background-image: url(wallp2.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .maps_options {
      color: red;
      font-weight: bold;
      font-size: 1.04em;
      text-decoration: underline overline #FF3028;
      margin-right: 20px;
      text-shadow: 1px 1px blue;
    }
    </style>

  </head>
  <body>
    <?php require_once 'header.html' ?>

    <div class="mybody">
    <form action="index.php" method="post" style="display: flex; align: center; align-items: center; align-content: center; padding-top: 100px; justify-content: center;">
      <input type="radio" name="maps" value="de_dust2" checked>&nbsp;  <span class="maps_options"> de_dust2 </span>
      <input type="radio" name="maps" value="de_mirage">&nbsp;  <span class="maps_options">&nbsp;de_mirage </span>
      <input type="radio" name="maps" value="de_inferno">&nbsp; <span class="maps_options">&nbsp;de_inferno </span>
      <input type="radio" name="maps" value="de_overpass">&nbsp;<span class="maps_options">&nbsp;de_overpass </span>
      <input type="radio" name="maps" value="de_train">&nbsp;   <span class="maps_options">&nbsp;de_train </span>
      <input type="radio" name="maps" value="de_nuke">&nbsp;    <span class="maps_options">&nbsp;de_nuke </span>
      <input type="radio" name="maps" value="de_vertigo">&nbsp; <span class="maps_options">&nbsp;de_vertigo </span>
      <input type="submit" name="submit" value="Выбрать карту">
    </form>

    <br>

    <form class="canvas-attrs" action="index.php" method="post" style="display: flex; align: center; align-items: center; align-content: center; padding-top: 20px; justify-content: center;">
      <select name="strokeStyle">
        <option value="grey" selected>Grey</option>
        <option value="red">Red</option>
        <option value="gold">Gold</option>
      </select>
      <select name="lineWidth">
        <option value="2" selected>Small</option>
        <option value="5">Medium</option>
        <option value="18">Big</option>
      </select>
      <input type="submit" name="clearMyc" value="Очистить">
    </form>
   <br>
      <canvas id="mycanvas" width="960" height="910" style="margin: 4% auto auto auto;">
      If your browser does not support JS or out-dated, you are seeing this message.
      </canvas>
  </div>


    <script>
      function init() {
        var ctx = mycanvas.getContext('2d');
        var paint = false;

        mycanvas.addEventListener("mousedown", Down);
        mycanvas.addEventListener("mouseup", Up);
        mycanvas.addEventListener("mousemove", Move);

        function Down(e) {
          paint = true;
          ctx.beginPath();
          ctx.moveTo(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
        }

        function Up(e) {
          paint = false;
          ctx.closePath();
        }

        function Move(e) {
          if (paint == true) {
            ctx.lineTo(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
            ctx.stroke();
          }
        }

        document.querySelector('form.canvas-attrs').addEventListener('change', setStyle);
        function setStyle() {
          ctx.strokeStyle = this.strokeStyle.value;
          ctx.lineWidth = this.lineWidth.value;
        }
      }
      init();
    </script>

      <?php
        if (isset($_POST['maps'])) $map = $_POST['maps'];

        if (isset($_POST['submit'])) {
          switch ($_POST['maps']) {
            case 'de_dust2':
              $map = 'dust.jpg';
              break;
            case 'de_mirage':
              $map = 'mirage.jpg';
              break;
            case 'de_inferno':
              $map = 'inferno.jpg';
              break;
            case 'de_overpass':
              $map = 'overpass.jpg';
              break;
            case 'de_train':
              $map = 'train.jpg';
              break;
            case 'de_nuke':
              $map = 'nuke.jpg';
              break;
            case 'de_vertigo':
              $map = 'vertigo.jpg';
              break;
            default:
              $map = 'dust.jpg';
              break;
          }
        }

        echo "<script>
                O('mycanvas').style.backgroundImage = 'url(csmaps/$map)';
              </script>";
       ?>
  </body>
</html>
