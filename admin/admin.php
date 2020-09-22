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

  ///////////////////////////////////////////////slider1-FUTURE
  if (isset($_POST['slider-submit1'])) {
    $image = sanitizeString($_FILES['slider-image']['name']);
    $title = sanitizeString($_POST['slider-post']);
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
      echo "File already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slider-image"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif" ) {
      echo "Sorry, only JPG, JPEG, PNG, JFIF & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk == 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["slider-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["slider-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    echo "<br>Updating in database...<br>";
    queryMysql("UPDATE sliders SET `image` = '$image', `title` = '$title', `text` = '$text' WHERE id=1");
    echo "<br>'$title' were successfully UPDATED<br>";
  }

  /////////////////////////////////////////////slider2-CURRENT
  if (isset($_POST['slider-submit2'])) {
    $image = sanitizeString($_FILES['slider-image']['name']);
    $title = sanitizeString($_POST['slider-post']);
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
      echo "File already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slider-image"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif" ) {
      echo "Sorry, only JPG, JPEG, PNG, JFIF & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk == 0)";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["slider-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["slider-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    echo "<br>Updating in database...<br>";
    queryMysql("UPDATE sliders SET `image` = '$image', `title` = '$title', `text` = '$text' WHERE id=2");
    echo "<br>'$title' were successfully UPDATED<br>";
  }

  //////////////////////////////////////////////slider3-PAST
  if (isset($_POST['slider-submit3'])) {
    $image = sanitizeString($_FILES['slider-image']['name']);
    $title = sanitizeString($_POST['slider-post']);
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
      echo "File already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["slider-image"]["size"] > 5000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "jfif" ) {
      echo "Sorry, only JPG, JPEG, PNG, JFIF & GIF files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded. (upLoadOk == 0)<br>Default image was set. ";
      $image = 'sad_smiley.png';
      echo "$image is set.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["slider-image"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["slider-image"]["name"]). " has been uploaded (OK).";
      } else {
        echo "Sorry, there was an error uploading your file. (Next step is adding to MYSQL DB)";
      }
    }
    //Ending of saving images

    echo "<br>Updating in database...<br>";
    queryMysql("UPDATE sliders SET `image` = '$image', `title` = '$title', `text` = '$text' WHERE id=3");
    echo "<br>'$title' were successfully UPDATED<br>";
  }

  //////////////////////////////////////////////////////news
  if (isset($_POST['news-submit'])) {
    $image = sanitizeString($_FILES['news-image']['name']);
    $title = sanitizeString($_POST['news-title']);
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
    if ($_FILES["news-image"]["size"] > 5000000) {
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
      echo "Sorry, your file was not uploaded. (upLoadOk == 0)";
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

    echo "<br>Adding to database...<br>";
    queryMysql("INSERT INTO news VALUES(NULL, '$image', '$title', '$text', '$date')");
    echo "<br>'$title' was successfully added.<br>";
  }

  /////////////////////////////////////////////////tournaments
  if (isset($_POST['tournament-submit'])) {
    $image = sanitizeString($_FILES['tours-image']['name']);
    $title = sanitizeString($_POST['tours-title']);
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
      echo "Sorry, your file was not uploaded. (upLoadOk == 0)";
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

    echo "<br>Adding to database...<br>";
    queryMysql("INSERT INTO tournaments VALUES(NULL, '$image', '$title', '$text', '$date')");
    echo "<br>'$title' was successfully added.<br>";
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

      textarea {
      	min-height: 5em;
      	max-height: 50vh;
      	width: 100%;
      }

      h3 {
        text-align: center;
      }

      form {
        -webkit-box-shadow: 0px 0px 15px 3px rgba(156,151,156,1);
        -moz-box-shadow: 0px 0px 15px 3px rgba(156,151,156,1);
        box-shadow: 0px 0px 15px 3px rgba(156,151,156,1);
        padding: 1%;
        margin: 10px 1% 13px;
      }

      .admin-form {
      }
    </style>

    <script>
    // Anonymouys function -> autoExpand
    var autoExpand = function (field) {
    	// Востанавливает дефолтную высоту
    	field.style.height = 'inherit';
    	// Обьект - переданный обьект функцией getComputedStyle(переданный аргумент), имеющий информацию о высоте и отступах
    	var computed = window.getComputedStyle(field);

    	// Переменная height, Вычесляет финальную высоту textarea
    	var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
    	             + parseInt(computed.getPropertyValue('padding-top'), 10)
    	             + field.scrollHeight
    	             + parseInt(computed.getPropertyValue('padding-bottom'), 10)
    	             + parseInt(computed.getPropertyValue('border-bottom-width'), 10);
      // Field -> textarea -> textarea.style.height ======= VAR height + str('px').
    	field.style.height = height + 'px';
    };

    // evenListener-> обработчик событий, (3 аргумента)
    document.addEventListener('input', function (event) {
    	if (event.target.tagName.toLowerCase() !== 'textarea') return;
    	autoExpand(event.target);
    }, false);
    </script>
  </head>
  <body>

    <br>
    <h3><b>Изменить "ПРИБЛИЖАЮЩИЕСЯ МЕРОПРИЯТИЕ" id=1</b></h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <span>Title</span><br>
    <input type="text" size="100" name="slider-post" value="Пока ничего не намечается :("><br><br>
    <span>Text</span><br>
    <textarea type="text" name="slider-text" value="slider-text"></textarea><br><br>
    <span>Image (DEFAULT = 'sad_smiley.png')</span><br>
    <input type="file" name="slider-image"><br><br>

    <input type="submit" name="slider-submit1" value="Update FUTURE Slider" style="float: right; margin-right: 1%;"><br>
  </form><br><br>

    <h3><b>Изменить "ТЕКУЩЕЕ МЕРОПРИЯТИЕ" id=2</b></h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <span>Title</span><br>
    <input type="text" size="100" name="slider-post" value="На данный момент ничего нет :("><br><br>
    <span>Text</span><br>
    <textarea type="text" name="slider-text" value="slider-text"></textarea><br><br>
    <span>Image (DEFAULT = 'sad_smiley.png')</span><br>
    <input type="file" name="slider-image"><br><br>

    <input type="submit" name="slider-submit2" value="Update CURRENT Slider" style="float: right; margin-right: 1%;"><br>
  </form><br><br>

    <h3><b>Изменить "ПРОШЕДШЕЕ МЕРОПРИЯТИЕ" id=3</b></h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <span>Title</span><br>
    <input type="text" size="100" name="slider-post" value="Пока ничего не проводилось :("><br><br>
    <span>Text</span><br>
    <textarea type="text" name="slider-text" value="slider-text"></textarea><br><br>
    <span>Image (DEFAULT = 'sad_smiley.png')</span><br>
    <input type="file" name="slider-image"><br><br>

    <input type="submit" name="slider-submit3" value="Update PAST Slider" style="float: right; margin-right: 1%;"><br>
  </form><br>

<hr><br>
    <h3><b>Добавить новую НОВОСТНУЮ запись</b></h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <span>Title</span><br>
    <input type="text" name="news-title" value="news-title"><br><br>
    <span>Text</span><br>
    <textarea type="text" name="news-text" value="news-text"></textarea><br><br>
    <label for="news-date">Date:</label> <input type="date" id="news-date" name="news-date"><br><br>
    <span>Image (DEFAULT = 'sad_smiley.png')</span><br>
    <input type="file" name="news-image"><br><br>

    <input type="submit" name="news-submit" value="Submit News" style="float: right; margin-right: 1%;"><br>
  </form><br>

<hr><br>
    <h3><b>Добавить новую ТУРНИРНУЮ запись</b></h3><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
    <span>Title</span><br>
    <input type="text" name="tours-title" value="tournaments-title"><br><br>
    <span>Text</span><br>
    <textarea type="text" name="tours-text" value="Tournament's text"></textarea><br><br>
    <label for="tours-date">Date:</label> <input type="date" id="tours-date" name="tours-date"><br><br>
    <span>Image (DEFAULT = 'sad_smiley.png')</span><br>
    <input type="file" name="tours-image"><br><br>

    <input type="submit" name="tournament-submit" value="Submit Tournament" style="float: right; margin-right: 1%;"><br>
    </form>
  </body>
</html>
