<?php
        include "sidler.php";
        include "conn.php";
        ?> 
        <div class="p-4">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Categaroy</label><br>
                   <select name="cat">
                     <option disabled>--Select Category--</option>
                     <?php
                     $c_quety="SELECT * FROM `a_cat` WHERE 1";
                     $run=mysqli_query($conn,$c_quety);
                     while($rowss=mysqli_fetch_assoc($run))
                     {
                     ?>

                           <option value="<?=$rowss['id'];?>"><?=$rowss['categaroy'];?></option>


                          <?php }?>
                   </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Discription</label>
                   <textarea name="dis" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" name="dated" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Img</label> <br>
                    <input type="file" name="img" >
                  </div>
                  <div class="form-group"><br>
                    <input type="submit" name="submit" value="Submited" class="btn btn-success">
                  </div>
                </div>
       </form>
                <?php
                if(isset($_POST['submit']))
                {
                  $title=$_POST['title'];
                  $cat=$_POST['cat'];
                  $dis=$_POST['dis'];
                  $timed=date('Y-m-d',strtotime($_POST['dated']));
                  $img=$_FILES['img']['name'];
                  $timg=$_FILES['img']['tmp_name'];
                  $folder="news_img/".$img;
                  move_uploaded_file($timg,$folder);
                  if($title!="" && $cat!=""  && $dis!=""  && $timed!=""  && $folder!="")
                  {
                  $query="INSERT INTO `news`(`n_title`, `n_categaroy`, `n_discription`, `n_date`, `n_images`) VALUES ('$title','$cat','$dis','$timed','$folder')";
                  $data=mysqli_query($conn,$query);
                  if($data)
                  {
                    echo "<script>location.href='news_home.php';</script>";
                  }
                }
                else
                {
                  echo "<script>alert('not insert');</script>";
                }
                }
                
                ?>

                </div>
 <?php
        include "futher.php";
        
        ?>