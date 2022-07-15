

<?php
        include "sidler.php";
        include "conn.php";
        $id=$_GET['id'];
        $ti=$_GET['name'];
        $cat=$_GET['categaroy'];
        
?> 
<div class="p-4">
              <form method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id</label>
                    <input type="text" name="idd" value="<?=$id;?>" class="form-control" id="exampleInputEmail1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="title" value="<?=$ti;?>" class="form-control" id="exampleInputEmail2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">categaroy</label>
                    <input type="text" name="cat" value="<?=$cat;?>" class="form-control" id="exampleInputEmail3">
                  </div>
                  <div class="form-group">
                      <br>
                    <input type="submit" name="submit" class="btn btn-success" value="Save Updated">
                  </div>
                </div>
       </form>
 </div>
 <?php
                if(isset($_POST['submit']))
                {
                  $idd=$_POST['idd'];
                  $title=$_POST['title'];
                  $cat=$_POST['cat'];
                  if($title!="" && $cat!="" && $idd!="")
                  {
                  $quuery="UPDATE `a_cat` SET `name`='$title',`categaroy`='$cat' WHERE `id`='$idd'";
                  $data=mysqli_query($conn,$quuery);
                  if($data)
                  {
                    echo "<script>location.href='cat_home.php';</script>";
                  }
                  else
                  {
                    echo "<script>alert('not insert');</script>";
                  }
                }
                }
                
                ?>

<?php
        include "futher.php";
        
?>