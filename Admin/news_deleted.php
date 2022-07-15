<?php
include "conn.php";
$id=$_GET['id'];

$query1="SELECT * FROM `news` WHERE `n_id`='$id'";
$run=mysqli_query($conn,$query1) or die("Query unseefully");
$rows=mysqli_fetch_assoc($run);
unlink($rows['n_images']);

$query="DELETE FROM `news` WHERE `n_id`='$id'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>location.href='news_home.php';</script>";
}

?>