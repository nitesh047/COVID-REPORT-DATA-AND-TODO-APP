<?php
session_start();
$con = mysqli_connect("localhost","root","123456","demo") or
die (mysqli_error($con));

$email = $_POST['email'];

$reg= "insert into email(email) value('$email')";
  mysqli_query($con, $reg);
  echo" <script>alert('Entry Successfull');</script>";
  header('location:index.php')
  ?>
