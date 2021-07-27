<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'upload_img');

if (!$koneksi) {
  die(mysqli_connect_error());
}
?>