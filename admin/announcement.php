<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{

$amsg = $_POST["message1"];    
$adate= $_POST["date1"];

$sql="INSERT INTO  announcements(message,date) VALUES(:amsg,:adate)";
$query = $dbh->prepare($sql);
$query->bindParam(':amsg',$fname,PDO::PARAM_STR);
$query->bindParam(':adate',$mnumber,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Announcement Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Member Entry Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

<link rel="stylesheet" href="../css1/bootstrap.min.css" />
<link rel="stylesheet" href="../css1/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css1/fullcalendar.css" />
<link rel="stylesheet" href="../css1/matrix-style.css" />
<link rel="stylesheet" href="../css1/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css1/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Announcement </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Announcement Form</h3>
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
						<div class="container-fluid">
  <hr>
  <a href="manage-announcement.php"><button class="btn btn-danger" type="button">Manage Your Announcements</button></a>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class=""></i> </span>
        <h5>Make Announcements</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          
            <div class="controls">
              <textarea class="span12" name="message1" rows="10" placeholder="Enter your text ..."></textarea>
            </div>
            <div class="controls">
                <h5><label for="Announce Date">Applied Date: 
              <input type="date" name="date1"></h5> </label>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-info btn-large">Publish Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div></div>		



	
						
					
						
						
						
					</div>
					
					</form>

     
      

      
      <div class="panel-footer">
		
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
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

<script src="../js1/excanvas.min.js"></script> 
<script src="../js1/jquery.min.js"></script> 
<script src="../js1/jquery.ui.custom.js"></script> 
<script src="../js1/bootstrap.min.js"></script> 
<script src="../js1/jquery.flot.min.js"></script> 
<script src="../js1/jquery.flot.resize.min.js"></script> 
<script src="../js1/jquery.peity.min.js"></script>  
<script src="../js1/matrix.js"></script> 
<script src="../js1/matrix.dashboard.js"></script> 
<script src="../js1/jquery.gritter.min.js"></script> 
<script src="../js1/matrix.interface.js"></script> 
<script src="../js1/matrix.chat.js"></script> 
<script src="../js1/jquery.validate.js"></script>  
<script src="../js1/select2.min.js"></script> 
<script src="../js1/matrix.popover.js"></script> 
<script src="../js1/jquery.dataTables.min.js"></script> 
<script src="../js1/matrix.tables.js"></script>
<script src="../js1/wysihtml5-0.3.0.js"></script> 
<script src="../js1/bootstrap-wysihtml5.js"></script>	   

</body>
</html>
<?php } ?>