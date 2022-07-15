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
                  <div class="row">
                          <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-left display-bolck">
                          <li class="breadcrumb-item"><a href="" class="btn btn-info">Wel-Come <?=$rows['a_name']; ?></a></li>   
                          </ol>
                          </div>
                        <div class="col-sm-6 ">
                            <ol class="breadcrumb float-sm-right display-bolck">
                                <li class="breadcrumb-item"><a href="news_add.php" class="btn btn-success">Add News</a></li>
                            </ol>
                        </div>
                        </div>
  <div class="ml-0 table-responsive">
  <table class="table table-hover">
        <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Categaroy</th>
                <th>Discription</th>
                <th>Date</th>
                <th>Img</th>
                <th>Edit_news</th>
                <th>Deleted_news</th>
                
        </tr>
        <tr>
                <?php
        $queryp="SELECT * FROM `news` WHERE 1";
        $run=mysqli_query($conn,$queryp);
        
        while($row=mysqli_fetch_assoc($run))
        {

        ?>
                <td><?=$i;?></td>
                <td><?=$row['n_id'];?></td>
                <td><?=$row['n_title'];?></td>

                <td><?php 
                 $pp=$row['n_categaroy'];
                 $c_query="SELECT * FROM `a_cat` WHERE `id`='$pp'";
                 $caterg=mysqli_query($conn,$c_query);
                 $rowss=mysqli_fetch_assoc($caterg);
                 echo $rowss['categaroy'];
                
                ?></td>


                <td><?=$row['n_discription'];?></td>
                <td><?=$row['n_date'];?></td>
                <td><a href="<?=$row['n_images'];?>"><img src="<?=$row['n_images'];?>" alt="img"  height="70px" width="100px"></a></td>
                <td><a href="news_edit.php?id=<?=$row['n_id'];?>&n_title=<?=$row['n_title'];?>&n_categaroy=<?=$row['n_categaroy'];?>&n_discription=<?=$row['n_discription'];?>&n_date=<?=$row['n_date'];?>&n_img=<?=$row['n_images'];?> " class="btn btn-success">Edit_news</a></td>


                <td><a href="news_deleted.php?id=<?=$row['n_id'];?>" class="btn btn-danger" onclick="return confirm('do you shor this dedeted????')">Deleted_news</a></td>
        </tr>
        <?php $i++; }?>
</table>
</div>
 <?php
        include "futher.php";
        
?>