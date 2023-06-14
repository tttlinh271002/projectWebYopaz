<?php
$mysqli = new mysqli("localhost","root","","project_yopaz");
// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi kết nối MySQL" . $mysqli->connect_error;
  exit();
}
?>