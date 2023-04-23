<?php
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "shop");
$con = mysqli_connect("localhost", "root", "", "shop");
if (mysqli_connect_errno())
{
    echo "faild to connect to MYSQL:".mysqli_connect_error();
}
?>

