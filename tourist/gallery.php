<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
    ?>



<!DOCTYPE HTML>
<html>
<head>

<link href="css3/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css3/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css3/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js3/jquery-1.12.0.min.js"></script>
<script src="js3/bootstrap.min.js"></script>
<!--animate-->
<link href="css3/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js3/wow.min.js"></script>








<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
        .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
        </style>
        <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>








    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
   
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">







</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
       <div class="mother-grid-inner">
            <!--header start here-->
                <?php include('includes/header.php');?>
                     <div class="clearfix"> </div>  
                </div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Gallery</li>

            </ol>
<div class="agile-grids">   
                <!-- tables -->
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <div class="agile-tables">
                    <div class="w3l-table-info">
                      <h2>Gallery</h2>
                       <div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"></h3>




<div class="gallery-area">
        <div class="container-fluid ">
            <div class="row">

 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-sandra-mack-2365974.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Religions</h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/sande.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Amazing</h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-龔-月強-5024574.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>livelihoods </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-nadeesha-kalhara-jayasundara-12296788.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Foods </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-alex-azabache-3723035.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Nature </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/adam-vandermeer-Dw9dWTzzsUE-unsplash.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Transpotation </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-alex-azabache-3757141.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>enjoy </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-kavindra-yasas-3073033.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Animals</h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-chathura-anuradha-subasinghe-12781427.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Places </h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/pexels-ram-iyengar-6416960.jpg);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Cultures</h3>
                                <a href="gallery.html"><i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








<script>
        $(document).ready(function() {
             var navoffeset=$(".header-main").offset().top;
             $(window).scroll(function(){
                var scrollpos=$(window).scrollTop(); 
                if(scrollpos >=navoffeset){
                    $(".header-main").addClass("fixed");
                }else{
                    $(".header-main").removeClass("fixed");
                }
             });
             
        });
        </script>
        <!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
        <!--/sidebar-menu-->
                        <?php include('includes/sidebarmenu.php');?>
                              <div class="clearfix"></div>      
                            </div>
                            <script>
                            var toggle = true;
                                        
                            $(".sidebar-icon").click(function() {                
                              if (toggle)
                              {
                                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                                $("#menu span").css({"position":"absolute"});
                              }
                              else
                              {
                                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                                setTimeout(function() {
                                  $("#menu span").css({"position":"relative"});
                                }, 400);
                              }
                                            
                                            toggle = !toggle;
                                        });
                            </script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->     



<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->    
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>








</body>
</html>
<?php } ?>