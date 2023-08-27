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
$eid=intval($_GET['eid']);
$status=1;

$sql = "UPDATE tblenquiry SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Enquiry  successfully read";
}





	?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin manage Issues</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />

<link rel="stylesheet" href="../css1/bootstrap.min.css" />
<link rel="stylesheet" href="../css1/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css1/fullcalendar.css" />
<link rel="stylesheet" href="../css1/matrix-style.css" />
<link rel="stylesheet" href="../css1/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css1/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Payment Report</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Payment Report</h2>
<table>
					   <div class="container-fluid print-container">
    <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">
   <?php
 $id=$_GET['id'];
 $sql = "select * from tblusers where id='$id'";
 
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
      
     <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                  <tbody>

                    <tr>
                      <td><h4>Guider Lanka Tourism</h4></td>
                    </tr>
                    <tr>
                      <td>Dalada Street,Colombo 5</td>
                    </tr>
                    
                    <tr>
                      <td>Tel: +111-222-3333</td>
                    </tr>
                    <tr>
                      <td >Email:  guiderlanka@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="span8">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Membership ID</th>
<th class="head0">Membership Name</th>
                      <th class="head0 right">Mobile No.</th>
                      <th class="head1">Services Taken</th>
                      
                      <th class="head1 right">Email Id</th>
                      <th class="head0 right">Charge</th>
                    
                    </tr>
                  </thead>
                  <tbody>


<?php 
$id=$_GET['id'];
$qry= "select * from tblusers where id='$id'";

$query = $dbh -> prepare($qry);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
 //$result=mysqli_query($conn,$qry);
 //while($row=mysqli_fetch_array($result)){

//$sql = "SELECT tblbooking.BookingId as bookid,tblusers.FullName as fname,tblusers.MobileNumber as mnumber,tblusers.services as services,tblusers.EmailId as email,tblusers.RegDate as regdate,tbltourpackages.PackageName as pckname,tblbooking.PackageId as pid,tblbooking.FromDate as fdate,tblbooking.ToDate as tdate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblusers join  tblbooking on  tblbooking.UserEmail=tblusers.EmailId join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId";
//$query = $dbh -> prepare($sql);
//$query->execute();
//$results=$query->fetchAll(PDO::FETCH_OBJ);

//if($query->rowCount() > 0)
//{
//foreach($results as $result)
//{				?>
		    <tr>
<!--<td><div class="text-center">PGC-SS-<?php echo $row['id']; ?></div></td>-->
                      <!--  <td><div class="text-center"><?php echo $row['FullName']; ?></div></td>-->
                       <!-- <td><div class="text-center"><?php echo $row['MobileNumber']; ?></div></td>-->
                      <!--  <td><div class="text-center"><?php echo $row['services']; ?></div></td>-->
                       <!-- <td><div class="text-center"><?php echo $row['EmailId']; ?></div></td>-->
                       <!-- <td><div class="text-center"><?php echo $row['EmailId']; ?></div></td>-->
                       <!-- <td><div class="text-center"><?php echo 'Rs.'.$row['amount']; ?></div></td>-->
                      


                    <td><div class="text-center">#00<?php echo htmlentities($result->id);?></div></td> 
                  <td><div class="text-center"><?php echo ($result->FullName);?></div></td> 
                     <td><div class="text-center"><?php echo ($result->MobileNumber);?></div></td> 
                    <td><div class="text-center"><?php echo ($result->services);?></div></td> 
                    
                   <td><div class="text-center"><?php echo ($result->EmailId);?></div></td> 
                      <td><div class="text-center"><?php echo '$.'.($result->amount); ?></div></td>
                    
                    </tr>

						 <?php } }?>
						</tbody>
   </table>

                </table>



 <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h4>Last Payment Done:  $.<?php echo ($result->amount); ?>/-</h4>
                        <em><a href="#" class="tip-bottom" title="Registration Date" style="font-size:15px;">Member Since: <?php echo ($result->RegDate); ?> </a></em> </td>
                        </div>
                    </tr>
                  </tbody>
                </table>
<table class="table table-bordered table-invoice-full">
                     <div class="row-fluid">
                <div class="pull-left">
                <h4>Member <?php echo ($result->FullName); ?>,<br/> <br/> Membership is currently <?php echo ($result->status); ?>! <br/></h4><p>Thank you for choosing our services.</p>
                </div>
                <div class="pull-right">
                  <h4><span>Approved By:</h4>
                  <img src="../tms/travel-System/img/reportstamp-sample.png" width="124px;" alt=""><p class="text-center">GL Tourism</p> </div>
                  
            </div>
          </div>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>
  <div class="text-center">
    <button class="btn btn-danger" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
  </div>

       
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>


</div>
				
					</div>
				 
</table>
				
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
<script src="../js1/fullcalendar.min.js"></script> 
<script src="../js1/matrix.js"></script> 
<script src="../js1/matrix.dashboard.js"></script> 
<script src="../js1/jquery.gritter.min.js"></script> 
<script src="../js1/matrix.interface.js"></script> 
<script src="../js1/matrix.chat.js"></script> 
<script src="../js1/jquery.validate.js"></script> 
<script src="../js1/matrix.form_validation.js"></script> 
<script src="../js1/jquery.wizard.js"></script> 
<script src="../js1/jquery.uniform.js"></script> 
<script src="../js1/select2.min.js"></script> 
<script src="../js1/matrix.popover.js"></script> 
<script src="../js1/jquery.dataTables.min.js"></script> 
<script src="../js1/matrix.tables.js"></script> 
</body>
</html>
<?php }}?>