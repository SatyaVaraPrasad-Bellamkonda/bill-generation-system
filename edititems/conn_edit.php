<?php
$conn = mysqli_connect("localhost","root","","myproject");

if (mysqli_connect_errno())
  {
  echo "Unable to connect";
  }