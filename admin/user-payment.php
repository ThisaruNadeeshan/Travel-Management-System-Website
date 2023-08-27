<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
	// code for cancel
if(isset($_REQUEST['eid']))
	{


$sql = "UPDATE tblenquiry SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();


}





	?>


<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin manage Bookings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="stylesheet" href="../css1/bootstrap.min.css" />
<link rel="stylesheet" href="../css1/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css1/fullcalendar.css" />
<link rel="stylesheet" href="../css1/matrix-style.css" />
<link rel="stylesheet" href="../css1/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css1/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>




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

<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><a href="payment.php"><i class="fa fa-angle-right"></i>Payments</a><i class="fa fa-angle-right"></i>User Payment</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>User Payment</h2><br>
					  <div id="content">

  
  
  <div class="container-fluid" style="margin-top:-38px;">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          
           
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span5">
                <table class="">
                  <tbody>
                  <tr>
                      <td><img src="../images/map1.png" alt="Gym Logo" width="175"></td>
                    </tr>
                    <tr>
                      <td><h4>Guider Lanka</h4></td>
                    </tr>
                    <tr>
                      <td>Dalada Street,Colombo 5</td>
                    </tr>
                    
                    <tr>
                      <td>Tel: +123-456-7890/+111-222-3333</td>
                    </tr>
                    <tr>
                      <td >Email: guiderlanka@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
			  
			  
              <div class="span7">
                <table class="table table-bordered table-invoice">
				
                  <tbody>
				  <form action="userpay.php" method="POST">
                    <tr>
                    <tr>
                      <td class="width30">Member's Fullname:</td>
                      <input type="hidden" name="fullname" value="<?php echo $row['Fullname']; ?>">
                      <td class="width70"><strong><?php echo $row['Fullname']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Service:</td>
                      <input type="hidden" name="services" value="<?php echo $row['services']; ?>">
                      <td><strong><?php echo $row['services']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Amount Per Month:</td>
                      <td><input id="amount" type="number" name="amount" value='<?php if($row['services'] == 'Fitness') { echo '';} elseif ($row['services'] == 'Sauna') { echo '';} else {echo '';} ?>' /></td>
                    </tr>

                    <input type="hidden" name="paid_date" value="<?php echo $row['paid_date']; ?>">
					
                  <td class="width30">Plan:</td>
                    <td class="width70">
					<div class="controls">
                <select name="plan" required="required" id="select">
                  <option value="" selected="selected" >Travel Package</option>
                  <option value="">Guider</option>
                  <option value="">None-Expired</option>

                </select>
              </div>

             
			  
                      </td>
					  
					  <tr>
                     
                    </tr>
                  <td class="width30">Member's Status:</td>
                    <td class="width70">
					<div class="controls">
                <select name="status" required="required" id="select">
                  <option value="Active" selected="selected" >Active</option>
                  <option value="Expired">Expired</option>

                </select>
              </div>
			  

                      </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
			  
			  
            </div> <!-- row-fluid ends here -->
			
			
            <div class="row-fluid">
              <div class="span12">
                
				
				<hr>
                <div class="text-center">
                  <!-- user's ID is hidden here -->

             <input type="hidden" name="id" value="<?php echo $row['user_id'];?>">
      
                  <button class="btn btn-success btn-large" type="SUBMIT" href="">Make Payment</button> 
				</div>
				  
				  </form>
              </div><!-- span12 ends here -->
            </div><!-- row-fluid ends here -->
			
      <?php
}
      ?>
          </div><!-- widget-content ends here -->
		  
		  
        </div><!-- widget-box ends here -->
      </div><!-- span12 ends here -->
    </div> <!-- row-fluid ends here -->
  </div> <!-- container-fluid ends here -->
</div> <!-- div id content ends here -->


</div></div></div>

				
			</div>
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

<script type="text/javascript">  

</body>
</html>
<?php  ?>