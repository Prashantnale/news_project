<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Tech Blog - Stylish Magazine Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="css/version/tech.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

   <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.html"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="tech-index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category.php">Galary</a>
                            </li>                   
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mr-2">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
<!-- catgary+++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <section class="section first-section">
            <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="btn-group " role="group" aria-label="Basic example">
                    <?php
                    // pagenetion queryt pan code aahe
           
                    include "conn.php";
                       $query="SELECT * FROM `a_cat` WHERE 1";
                       $data=mysqli_query($conn,$query);
                       $emt=mysqli_num_rows($data);
                       while($rows=mysqli_fetch_assoc($data))
                       {
                       ?>
                    <a type="button" href="tech-category.php?ppid=<?=$rows['id'];?>" class="btn btn-primary"><?=$rows['categaroy'];?></a>

                    <?php }?>
                     </div>                   
                    </div>
                </div>
            </div>
            </div>
        </section>   
<!-- news++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <section class="mt-md-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            <?php
                            include "conn.php";
                            if(isset($_GET['ppid'])) //ctegari pathavali
                             {
                                $cidd=$_GET['ppid'];
                            $queryp="SELECT * FROM `news` WHERE `n_categaroy`='$cidd'";
                               $rung=mysqli_query($conn,$queryp);
                               $pgg=mysqli_num_rows($rung);
                               if($pgg==0)
                               {
                                echo "<h1 style='color:red;text-align: center;'>NO Record</h1>";
                               }
                               while($rowq=mysqli_fetch_assoc($rung))                       
                               {
        
                               ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.php?id=<?=$rowq['n_id'];?>&c_id=<?=$rowq['n_categaroy'];?>" title="">
                                                <img src="../../Admin/<?php echo $rowq['n_images'];?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4 style="background:rgba(255, 255, 255, 0.2); box-shadow: 0 5px 15px rgba(0,0,0,0.5);">
                                        
                                        <a href="tech-single.php?id=<?=$rowq['n_id'];?>&c_id=<?=$rowq['n_categaroy'];?>">
                                        <?=$rowq['n_title'];?></a></h4>
                                        <p><?=substr($rowq['n_discription'],0,120)."...";?></p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category.php" title="">
                                        <!-- cattery     -->
                                        <?php  
                                        $num=$rowq['n_categaroy'];
                                        $qq="SELECT * FROM `a_cat` WHERE `id`='$num'";
                                        $runnn=mysqli_query($conn,$qq);
                                        $roo=mysqli_fetch_assoc($runnn);
                                        
                                        ?>
                                        <?=$roo['categaroy'];?></a></small>
                                        <small><a href="tech-single.php?id=<?=$rowq['n_id'];?>&c_id=<?=$rowq['n_categaroy'];?>" title=""><?=$rowq['n_date'];?></a></small>
                                        <small><a href="tech-author.php?id=<?=$rowq['n_id'];?>&c_id=<?=$rowq['n_categaroy'];?>" title="">by Matilda</a></small>
                                        <small><a href="tech-single.php?id=<?=$rowq['n_id'];?>&c_id=<?=$rowq['n_categaroy'];?>" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                
                                <hr class="invis">
                                <?php }}?>

                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="upload/banner_02.jpg" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <hr class="invis">
                                </div><!-- end blog-box -->
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget">
                            <div class="footer-text text-left">
                                <a href="index.html"><img src="images/version/tech-footer-logo.png" alt="" class="img-fluid"></a>
                                <p>Tech Blog is a technology blog, we sharing marketing, news and gadget articles.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-left">
                                    <form class="form-inline">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Copyrights</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Advertising</a></li>
                                    <li><a href="#">Write for us</a></li>
                                    <li><a href="#">Trademark</a></li>
                                    <li><a href="#">License & Help</a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Tech Blog. Design: <a href="http://html.design">HTML Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>