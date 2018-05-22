<?php
session_start();

function connect(){
  $database = "agenda";
  $db_user = "root";
  $password = "senha";
  $host="db";

  $connection = new mysqli($host, $db_user, $password, $database);

  if ($connection->connect_errno) {
    return false;
  }
  return $connection;
}
