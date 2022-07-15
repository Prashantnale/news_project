<?php
include "conn.php";
$id=$_GET['id'];
$query="DELETE FROM `a_cat` WHERE `id`='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>location.href='cat_home.php';</script>";
}

?>