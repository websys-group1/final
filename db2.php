<?php
  session_start();
  
  $db = new mysqli("localhost","root","","final");
  $db->set_charset("utf8");
  if ($db) {
    echo "Connected";
}
  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>