<?php
include('dbcon.php');

$id=$_POST['id'];

mysqli_query($conn,"delete from user where user='$id'") or die(mysqli_error());



?>