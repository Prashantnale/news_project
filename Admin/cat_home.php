<?php
        include "sidler.php";
        include "conn.php";
        $i=1;
?> 

                         <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right display-bolck">
                                <li class="breadcrumb-item"><a href="cat_add.php" class="btn btn-success">Add-categaoy</a></li>
                            </ol>
                        </div>
                        </div>
<div class="ml-0 table-responsive">
  <table class="table table-hover">
        <tr>
                <th>Sr.no</th>
                <th>Id</th>
                <th>Name</th>
                <th>Categaroy</th>
                <th>Edit_news</th>
                <th>Deleted_news</th>
        </tr>
        <?php
        $query="SELECT * FROM `a_cat` WHERE 1";
        $data=mysqli_query($conn,$query);
        $emt=mysqli_num_rows($data);
        if($emt==0)
        {
                echo "<b style='color:red;'>No Categaroy Record Found<b>";

        }
        while($rows=mysqli_fetch_assoc($data))
        {
        ?>
        <tr>
                <td><?=$i;?></td>
                <td><?=$rows['id'];?></td>
                <td><?=$rows['name'];?></td>
                <td><?=$rows['categaroy'];?></td>
                <td><a href="cat_edit.php?id=<?=$rows['id'];?>&name=<?=$rows['name'];?>&categaroy=<?=$rows['categaroy'];?>" class="btn btn-success">Edit_categaoy</a></td>
                <td><a href="cat_deleted.php?id=<?=$rows['id'];?>" class="btn btn-danger" onclick="return confirm('do you shor this dedeted????')">Deleted_categaoy</a></td>
        </tr>
        <?php $i++; }?>
</table>
</div>


<?php
        include "futher.php";
        
?>