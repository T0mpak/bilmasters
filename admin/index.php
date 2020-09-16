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
<html>
<head>
  <style>
    .divc {
        vertical-align: middle; text-align: center; height: 100vh; align: center; align-items: center; align-self: center; align-content: center; text-align: center; height: 100%; margin: auto auto;
        margin: 15% auto;
    }
  </style>
  <title>Login to Admin</title>
</head>
<body>
  <?php require_once "header.html"; ?>
  <div class="divc">
  <form action="index.php" method="post">
    <div style="margin: 4px 0px;"><label>Username&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;un&nbsp;)&nbsp;:&nbsp;&nbsp;</label> <input type="text" value="<?= $_POST["un"] ?>" name="un" /></div>
    <br>
    <div style="margin: 4px 0px;"><label>Password&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;pw&nbsp;)&nbsp;&nbsp;:&nbsp;</label> <input type="password" name="pw" /></div>
    <br>
    <br>
    <div><?= $errorMsg ?></div>
    <br>
    <input type="submit" value="Enter" name="submit" />
  </form>
  </div>
</body>
</html>
