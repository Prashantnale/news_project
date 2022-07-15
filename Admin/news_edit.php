<?php
        include "sidler.php";
      include "conn.php";
        $id=$_GET['id'];
        $ti=$_GET['n_title'];
        $cat=$_GET['n_categaroy'];
        $dis=$_GET['n_discription'];
        $date=$_GET['n_date'];
        $img=$_GET['n_img'];
      
?> 
<div class="p-4">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" enctype="multipart/form-data">

                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input type="text" name="idd" value="<?=$id;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" value="<?=$ti;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categaroy</label><br>
                    <select name="cat">
                     <?php
                     $c_quety="SELECT * FROM `a_cat` WHERE 1";
                     $run=mysqli_query($conn,$c_quety);
                     while($rowss=mysqli_fetch_assoc($run))
                     {
                     ?>

                           <option value="<?=$rowss['id'];?>"<?php
                           if($cat==$rowss['id'])
                           {
                             echo "selected";
                           }
                           ?>
                           >
                           <?=$rowss['categaroy'];?></option>
                          <?php }?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Discription</label>
                   <textarea  id="" cols="30" rows="10" name="dis" class="form-control"><?=$dis;?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" name="dated" value="<?=$date;?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group"> <br>
                  <img src="<?=$img;?>" alt="img" height="200px" width="200px">
                  <br>
                    <label for="exampleInputPassword1">Img</label> <br>
                    <input type="file" name="img" value="<?=$img;?>" >
                  </div>
                  <div class="form-group">
                      <br>
                    <input type="submit" name="submitd" value="Save Updated" class="btn btn-success">
                  </div>
                </div>
       </form>
                <!-- /.card-body -->
                <?php
                if(isset($_POST['submitd']))
                {
                  $idd=$_POST['idd'];
                  $title=$_POST['title'];
                  $cat=$_POST['cat'];
                  $dis=$_POST['dis'];
                  $timed=date('Y-m-d',strtotime($_POST['dated']));
                  $img=$_FILES['img']['name'];
                  $timg=$_FILES['img']['tmp_name'];
                  $folder="news_img/".$img;
                  move_uploaded_file($timg,$folder);

                  if($title!="" && $cat!=""  && $dis!=""  && $timed!=""  && $folder!="" && $idd!="")
                  {
                    if(!$timg)
                    {
                  $quuery="UPDATE `news` SET `n_title`='$title',`n_categaroy`='$cat',`n_discription`='$dis',`n_date`='$timed' WHERE `n_id`='$idd'";
                    }
                    else{
                      $quuery="UPDATE `news` SET `n_title`='$title',`n_categaroy`='$cat',`n_discription`='$dis',`n_date`='$timed',`n_images`='$folder' WHERE `n_id`='$idd'";
                    }
                  $data=mysqli_query($conn,$quuery);
                  if($data)
                  {
                    echo "<script>location.href='news_home.php';</script>";
                  }
                  else
                  {
                    echo "<script>alert('not insert');</script>";
                  }
                }
                }
                
                ?>
 </div>


<?php
        include "futher.php";
        
?>