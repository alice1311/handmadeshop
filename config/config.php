<?php
$conn=mysqli_connect("localhost","root","") or die ("Không thể kết nối đến server");
$csdl=mysqli_select_db($conn,"handmadeshop") or die ("Không thể chọn được được csdl". mysqli_error($conn));
mysqli_query($conn, "SET NAMES 'utf8'");
?>

 