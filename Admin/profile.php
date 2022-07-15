<?php
session_start();
$pn= $_SESSION['pn'];
if($pn)
{

}
else
{
  echo "<script>location.href='login.php'</script>";     
}
include "sidler.php";
include "conn.php";
$query="SELECT * FROM `longin` WHERE `a_email`='$pn'";
$data=mysqli_query($conn,$query);
$rows=mysqli_fetch_assoc($data);
?> 
                 
  <table class="table table-hover">
        <tr>
                <th>Id</th>
                <th>name</th>
                <th>img</th>
                <th>Edit</th>
                
        </tr>
        <tr>
                <?php
        $queryp="SELECT * FROM `profile` WHERE 1";
        $run=mysqli_query($conn,$queryp);
        
        while($row=mysqli_fetch_assoc($run))
        {

        ?>
                <td><?=$row['id'];?></td>
                <td><?=$row['name'];?></td>
                <td><a href="<?=$row['img'];?>"><img src="<?=$row['img'];?>" alt="img"  height="70px" width="100px"></a></td>
                <td><a href="pro_edit.php?id=<?=$row['id'];?>&name=<?=$row['name'];?>&img=<?=$row['img'];?>" class="btn btn-success">Edit_news</a></td>
        </tr>
        <?php }?>
</table>
</div>
 <?php
        include "futher.php";
        
?>