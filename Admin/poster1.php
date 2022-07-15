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
                <th>Title</th>
                <th>Categaroy</th>
                <th>Discription</th>
                <th>Date</th>
                <th>Img</th>
                <th>Edit_news</th>
                
        </tr>
        <tr>
                <?php
        $queryp="SELECT * FROM `poster1` WHERE 1";
        $run=mysqli_query($conn,$queryp);
        
        while($row=mysqli_fetch_assoc($run))
        {

        ?>
                <td><?=$row['id'];?></td>
                <td><?=$row['p_title'];?></td>

                <td><?php 
                 $pp=$row['p_category'];
                 $c_query="SELECT * FROM `a_cat` WHERE `id`='$pp'";
                 $caterg=mysqli_query($conn,$c_query);
                 $rowss=mysqli_fetch_assoc($caterg);
                 echo $rowss['categaroy'];
                
                ?></td>
                <td><?=$row['p_description'];?></td>
                <td><?=$row['p_date'];?></td>
                <td><a href="<?=$row['p_img'];?>"><img src="<?=$row['p_img'];?>" alt="img"  height="70px" width="100px"></a></td>
                <td><a href="poster1_edit.php?id=<?=$row['id'];?>&p_title=<?=$row['p_title'];?>&cat=<?=$row['p_category'];?>&dis=<?=$row['p_description'];?>&data=<?=$row['p_date'];?>&img=<?=$row['p_img'];?>" class="btn btn-success">Edit_news</a></td>
        </tr>
        <?php }?>
</table>
</div>
 <?php
        include "futher.php";
        
?>