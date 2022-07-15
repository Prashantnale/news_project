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
    <!-- CSS only -->


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
                    <a class="navbar-brand" href="tech-index.html"><img src="https://image.shutterstock.com/image-vector/retro-80s-style-banner-10-260nw-777381181.jpg" alt="" width="100px"></a>
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
                        <form class="d-flex" method="get">
                            <a type="submit" href="search.php" name="search" class="btn btn-outline-success">Search</a>
                          </form>
                          <?php
                          
                          ?>
                         
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <?php
                    include "conn.php";
                $que="SELECT * FROM `poster1` WHERE 1";
                               $run=mysqli_query($conn,$que);
        
                               while($ro=mysqli_fetch_assoc($run))                       
                               {
                               ?>

                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="../../Admin/<?=$ro['p_img'];?>" alt="" style="background-size: cover; background-repeat: no-repeat; height: 400px;">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title=""><?=$ro['p_title'];?></a></h4>
                                        <small><a href="tech-single.html" title=""><?=$ro['p_date'];?></a></small>
                                        <small><a href="tech-author.html" title="">Admin</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->
                    <?php }?>

                    <?php
                    include "conn.php";
                $que="SELECT * FROM `news` WHERE 1 LIMIT 1,2";
                               $run=mysqli_query($conn,$que);
        
                               while($rop=mysqli_fetch_assoc($run))                       
                               {
                               ?>

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="../../Admin/<?php echo $rop['n_images'];?>" alt="" height="400px">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title=""><?=$rop['n_title'];?></a></h4>
                                        <small><a href="tech-single.html" title=""><?=$rop['n_date'];?></a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                  <?php } ?>
                </div><!-- end masonry -->
            </div>
        </section>
        <!-- catgary+++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <section class="mt-md-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="btn-group " role="group" aria-label="Basic example">
                    <?php
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
</section>   
<!-- news++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <section class="mt-md-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Recent News <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->

                            <div class="blog-list clearfix">
                            <?php
                             
                            include "conn.php";
                            // pagenetion queryt pan code aahe

$limit=8;
if(isset($_GET['page']))
{
   $page=$_GET['page'];
}
else{
        $page=1;
}

$offset=($page-1)*$limit;
//end
@$s=$_POST['spp'];
   
                               $queryp="SELECT * FROM `news` WHERE 1 LIMIT {$offset},{$limit}";
                               $run=mysqli_query($conn,$queryp);
        
                               while($row=mysqli_fetch_assoc($run))                       
                               {
                               ?>
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.php?id=<?=$row['n_id'];?>&c_id=<?=$row['n_categaroy'];?>" title="">
                                                <img src="../../Admin/<?php echo $row['n_images'];?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4 style="background:rgba(255, 255, 255, 0.2); box-shadow: 0 5px 15px rgba(0,0,0,0.5);">
                                        
                                        <a href="tech-single.php?id=<?=$row['n_id'];?>&c_id=<?=$row['n_categaroy'];?>">
                                        <?=$row['n_title'];?></a></h4>
                                        <p><?=substr($row['n_discription'],0,120)."...";?></p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category.php" title="">
                                        <!-- cattery     -->
                                        <?php  
                                        $num=$row['n_categaroy'];
                                        $qq="SELECT * FROM `a_cat` WHERE `id`='$num'";
                                        $runnn=mysqli_query($conn,$qq);
                                        $roo=mysqli_fetch_assoc($runnn);
                                        
                                        ?>
                                        <?=$roo['categaroy'];?></a></small>
                                        <small><a href="tech-single.php?id=<?=$row['n_id'];?>&c_id=<?=$row['n_categaroy'];?>" title=""><?=$row['n_date'];?></a></small>
                                        <small><a href="tech-author.php?id=<?=$row['n_id'];?>&c_id=<?=$row['n_categaroy'];?>" title="">Admin</a></small>
                                        <small><a href="tech-single.php?id=<?=$row['n_id'];?>&c_id=<?=$row['n_categaroy'];?>" title=""><i class="fa fa-eye"></i> 1114</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                
                                <hr class="invis">
                                <?php }?>

                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="https://image.shutterstock.com/image-vector/retro-80s-style-banner-10-260nw-777381181.jpg" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                            <nav aria-label="Page navigation example">
<ul class='pagination justify-content-center'>

        <?php
        $query1="SELECT * FROM `news` WHERE 1";
        $run1=mysqli_query($conn,$query1);
        if(mysqli_num_rows($run1)>0)
        {
                $total1=mysqli_num_rows($run1);
               
                $total_page=ceil($total1/$limit);
                if($page>1)
                {
                        echo '<li><a class="page-link" href="tech-index.php?page='.($page-1).'">prev</a></li>';
                }
                for($j=1;$j<=$total_page;$j++)
                {
                        if($j==$page)
                        {
                          $active="active";
                        }
                        else
                        {
                        $active="";
                        }
                        ?>
                            <li class="page-item <?=$active;?>"><a class="page-link" href="tech-index.php?page=<?=$j;?>"><?=$j;?></a></li>
                        <?php
                }
                if($total_page > $page)
                {
                    echo '<li><a class="page-link" href="tech-index.php?page='.($page+1).'">next</a></li>';
                }
        }
        ?>
       
        </ul>
</nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="data:image/jpeg;base64,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" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Trend Videos</h2>
                                <div class="trend-videos">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">
                                                <img src="https://english.cdn.zeenews.com/sites/default/files/styles/zm_700x400/public/2022/05/09/00000003_3.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">
                                                <img src="https://english.cdn.zeenews.com/sites/default/files/styles/zm_700x400/public/2022/05/09/00000003_3.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->

                                    <hr class="invis">

                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">
                                                <img src="https://english.cdn.zeenews.com/sites/default/files/styles/zm_700x400/public/2022/05/09/00000003_3.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class="videohover"></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="https://www.youtube.com/channel/UCuzS3rPQAYqHcLWqOFuY0pw" title="">Both blood pressure monitor and intelligent clock</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end videos -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_08.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                                <small>12 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Let's make an introduction for..</h5>
                                                <small>11 Jan, 2016</small>
                                            </div>
                                        </a>

                                        <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 last-item justify-content-between">
                                                <img src="upload/tech_blog_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">Did you see the most beautiful..</h5>
                                                <small>07 Jan, 2016</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->


                            <div class="widget">
                                <h2 class="widget-title">Follow Us</h2>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button facebook-button">
                                            <i class="fa fa-facebook"></i>
                                            <p>27k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button twitter-button">
                                            <i class="fa fa-twitter"></i>
                                            <p>98k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button google-button">
                                            <i class="fa fa-google-plus"></i>
                                            <p>17k</p>
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <a href="#" class="social-button youtube-button">
                                            <i class="fa fa-youtube"></i>
                                            <p>22k</p>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end widget -->

                            <div class="widget">
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
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