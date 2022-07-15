<?php
        include "sidler.php";
        include "conn.php";
?> 
<div class="p-4">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post">
                <div class="card-body"> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="Name" class="form-control" id="exampleInputEmail2" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">categaroy</label>
                    <input type="text" name="categaroy" class="form-control" id="exampleInputEmail3">
                  </div>
                  <div class="form-group">
                      <br>
                    <input type="submit" name="submit" value="Save Updated" class="btn btn-success">
                  </div>
                </div>
       </form>
       <?php
                if(isset($_POST['submit']))
                {
                  $Name=$_POST['Name'];
                  $categaroy=$_POST['categaroy'];
                  if($Name!="" && $categaroy!="")
                  {
                  $query="INSERT INTO `a_cat`(`name`, `categaroy`) VALUES ('$Name','$categaroy')";
                  $data=mysqli_query($conn,$query);
                  if($data)
                  {
                    echo "<script>location.href='cat_home.php';</script>";
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