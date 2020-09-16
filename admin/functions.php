<?php

  $hn = 'localhost';
  $un = 'bilmaste_bilmaste';
  $pw = 'u43B_Z6tc$z4';
  $db = 'bilmaste_bilmaste';

  $connection = new mysqli($hn, $un, $pw, $db);
  if ($connection->connect_error) die("Fatal Error1 (new mysqli)");

  function createTable($name, $query)
  {
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("<br> $connection->error <br>Fatal Error 2 (queryError)");
    return $result;
  }

  // function destroySession()
  // {
  //   $_SESSION=array();
  //
  //   if (session_id() != "" || isset($_COOKIE[session_name()]))
  //     setcookie(session_name(), '', time()-2592000, '/');
  //
  //   session_destroy();
  // }

  function sanitizeString($var)
  {
    global $connection;
    $var = strip_tags($var);
    $var = htmlentities($var);
    if (get_magic_quotes_gpc())
      $var = stripslashes($var);
    return $connection->real_escape_string($var);
  }

?>
