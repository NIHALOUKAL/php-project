<?php

$connection = mysqli_connect("localhost","root","user-db");
$del = $_GET["del"];
$sql = "update user set name='$name',`email`='$email' where id = $edit";

$sql="delete * from user where id = $del";
$result = mysqli_query($connection, $sql);

  if (mysqli_query($connection,$sql) ) {
    header("Location: admin_manage.php?msg=Data deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
  