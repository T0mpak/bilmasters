<?php
session_start();
$errorMsg = "";
$login = true;
$validUser = $_SESSION["login"] === $login;

if(isset($_POST["submit"])) {
  $validUser = $_POST["un"] == "admin" && $_POST["pw"] == "admin1";
  if(!$validUser) $errorMsg = "Неправильный логин или пароль";
  else $_SESSION["login"] = $login;
}

if($validUser) {
   header("Location: /admin/admin.php"); die();
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
  <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
     $(function() {
        $( "#button-2" ).button();
     });
  </script>
  <style>
    .divc {
        vertical-align: middle; text-align: center; height: 100vh; align: center; align-items: center; align-self: center; align-content: center; text-align: center; height: 100%; margin: auto auto;
        margin: 15% auto;
    }
  </style>
  <title>Login to Admin's panel</title>
</head>
<body>
  <?php require_once "header.html"; ?>
  <div class="divc">
  <form action="index.php" method="post">
    <div style="margin: 4px 0px;"><label><b><i>USERNAME</i></b>&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;<b>admin</b>&nbsp;&nbsp;)&nbsp;&nbsp;:&nbsp;</label> <input type="text" value="<?= $_POST["un"] ?>" name="un" /></div>
    <br>
    <div style="margin: 4px 0px;"><label><b><i>PASSWORD</i></b>&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;<i>admin1</i>&nbsp;)&nbsp;&nbsp;:&nbsp;</label> <input type="password" name="pw" /></div>
    <br>
    <br>
    <div><?= $errorMsg ?></div>
    <br>
    <div class="widget">
      <input id = "button-2" type = "submit" value = "ENTER" name = "submit">
    </div>
  </form>
  </div>
</body>
</html>
