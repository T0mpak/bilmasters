<?php
  $hn = 'localhost';
  $un = 'bilmaste_bilmaste';
  $pw = 'u43B_Z6tc$z4';
  $db = 'bilmaste_bilmaste';

  $connection = new mysqli($hn, $un, $pw, $db);
  if ($connection->connect_error) die("Fatal Error! (new mysqli)<br> Could not connect to MySQL server!");

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die("<br> $connection->error <br>result is empty, queryMysql()->error");
    return $result;
  }
?>
