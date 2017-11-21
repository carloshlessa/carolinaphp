<?php

  $db = new mysqli('localhost', 'root', 'root', 'carolina_spa');
  if($db->connect_error) {
    $error = $db->connect_error;
    echo $error;
  }
