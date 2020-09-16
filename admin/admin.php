<?php
  session_start();
  if ($_SESSION['login'] !== true) {
    die("SESSION ERROR");
  } else {
    $ses_status = 'ok';
    $_SESSION['ses_status'] = $ses_status;
  }


  require_once 'header.html';
  require_once 'functions.php';

  echo "<br>";
//slider////////////////////////////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['slider-submit'])) {
    $image = sanitizeString($_FILES['slider-image']['name']);
    $post  = sanitizeString($_POST['slider-post']);
    $text  = sanitizeString($_POST['slider-text']);

    //Saving images
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["slider-image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["slider-image"])) {
      $check = getimagesize($_FILES["slider-image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slider-image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk is 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["slider-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["slider-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    echo "<br>Adding...<br>";
    queryMysql("INSERT INTO slider VALUES(NULL, '$image', '$post', '$text')");
    echo "<br>'PK', '$image', '$post', '$text' were successfully added.<br>";
  }

//news////////////////////////////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['news-submit'])) {
    $image = sanitizeString($_FILES['news-image']['name']);
    $post  = sanitizeString($_POST['news-title']);
    $text  = sanitizeString($_POST['news-text']);

    //Saving images
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["news-image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["news-image"])) {
      $check = getimagesize($_FILES["news-image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["news-image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk is 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["news-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["news-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    $initial_date = sanitizeString($_POST['news-date']);
    $date = date("Y-m-d", strtotime($initial_date));

    echo "<br>Adding...<br>";
    queryMysql("INSERT INTO news VALUES(NULL, '$image', '$post', '$text', '$date')");
    echo "<br>'PK', '$image', '$post', '$text', '$date' were successfully added.<br>";
  }

//tournaments////////////////////////////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['tournament-submit'])) {
    $image = sanitizeString($_FILES['tours-image']['name']);
    $post  = sanitizeString($_POST['tours-title']);
    $text  = sanitizeString($_POST['tours-text']);

    //Saving images
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["tours-image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["tours-image"])) {
      $check = getimagesize($_FILES["tours-image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["tours-image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk is 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["tours-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["tours-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    $initial_date = sanitizeString($_POST['tours-date']);
    $date = date("Y-m-d", strtotime($initial_date));

    echo "<br>Adding...<br>";
    queryMysql("INSERT INTO tournaments VALUES(NULL, '$image', '$post', '$text', '$date')");
    echo "<br>'PK', '$image', '$post', '$text', '$date' were successfully added.<br>";
  }

//members////////////////////////////////////////////////////////////////////////////////////////////////////
  if (isset($_POST['member-submit'])) {
    $image = sanitizeString($_FILES['members-image']['name']);
    $post  = sanitizeString($_POST['role']);
    $text  = sanitizeString($_POST['detail-role']);
    $email = sanitizeString($_POST['email-adress']);

    //Saving images
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["members-image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["members-image"])) {
      $check = getimagesize($_FILES["members-image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["members-image"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk is 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["members-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["members-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    echo "<br>Adding...<br>";
    queryMysql("INSERT INTO ourteam VALUES(NULL, '$image', '$post', '$text', '$email')");
    echo "<br>'PK', '$image', '$post', '$text', '$email' were successfully added.<br>";
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin's Panel</title>
    <style>
      hr {
        color: aquamarine;
        border-color: blue;
      }

      .admin-form {
      }
    </style>
  </head>
  <body>

    <h3>Add new record to DB >>> Table>"slider"</h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <input type="text" name="slider-post" value="slider-post"><span>&nbsp;Slider's title</span><br><br>
    <textarea type="text" name="slider-text" value="slider-text"></textarea><span>&nbsp;Slider's main text</span><br><br>
    <input type="file" name="slider-image"><span>Slider's image</span><br><br>

    <input type="submit" name="slider-submit" value="Submit Slider"><br>
    </form>

<hr><br>
    <h3>Add new record to DB >>> Table>"news"</h3>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <input type="text" name="news-title" value="news-title"><span>&nbsp;News' title</span><br><br>
    <textarea type="text" name="news-text" value="news-text"></textarea><span>&nbsp;News' text</span><br><br>
    <label for="news-date">Date:</label> <input type="date" id="news-date" name="news-date"><span>&nbsp;News' date</span><br><br>
    <input type="file" name="news-image"><span>News' image</span><br><br>

    <input type="submit" name="news-submit" value="Submit News"><br>
    </form>

<hr><br>
    <h3>Add new record to DB >>> Table>"tournaments"</h3>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <input type="text" name="tours-title" value="tournaments-title"><span>&nbsp;Tournament's title</span><br><br>
    <textarea type="text" name="tours-text" value="Tournament's text"></textarea><span>&nbsp;Tournament's main text</span><br><br>
    <label for="tours-date">Date:</label> <input type="date" id="tours-date" name="tours-date"><span>&nbsp;Tournament's date</span><br><br>
    <input type="file" name="tours-image"><span>Tournament's image</span><br><br>

    <input type="submit" name="tournament-submit" value="Submit Tournament"><br>
    </form>
<hr><br>

    <h3>Add new record to DB >>> Table>"ourteam"</h3>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <input type="text" name="role" value="role"><span>&nbsp;Member's role</span><br><br>
    <textarea type="text" name="detail-role" value="Details"></textarea><span>&nbsp;Role's details</span><br><br>
    <input type="file" name="members-image"><span>Member's image</span><br><br>
    <input type="text" name="email-adress" value="email-adress"><span>&nbsp;Email Adress</span><br><br>

    <input type="submit" name="member-submit" value="Submit Member"><br>
    </form>
<hr><br>

  </body>
</html>
