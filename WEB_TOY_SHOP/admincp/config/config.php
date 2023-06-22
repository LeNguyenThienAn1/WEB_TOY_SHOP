<?php
$mysqli = new mysqli("localhost","root","","WEB_TOY_SHOP");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mysqli lỗi " . $mysqli->connect_error;
  exit();
}
?>