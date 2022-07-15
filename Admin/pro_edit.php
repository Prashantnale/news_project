<?php
        include "sidler.php";
      include "conn.php";
        $id=$_GET['id'];
        $ti=$_GET['name'];
        $img=$_GET['img'];
      
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
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="title" value="<?=$ti;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
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
                  $img=$_FILES['img']['name'];
                  $timg=$_FILES['img']['tmp_name'];
                  $folder="news_img/".$img;
                  move_uploaded_file($timg,$folder);

                  if($title!="" && $folder!="" && $idd!="")
                  {
                    if(!$timg)
                    {
                  $quuery="UPDATE `profile` SET `name`='$title' WHERE `id`='$idd'";
                    }
                    else{
                      $quuery="UPDATE `profile` SET `name`='$title',`img`='$folder' WHERE `id`='$idd'";
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