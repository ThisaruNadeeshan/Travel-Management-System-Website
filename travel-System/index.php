<?php session_start();
 include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title> System Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-style.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/fontawesome.css" rel="stylesheet" />
        <link href="font-awesome/css/all.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    
    <body>
        
        <center> <img src="../travel-System/img/3558308.jpg"> </center> 
    
        <div id="loginbox">            
            <form id="loginform" method="POST" class="form-vertical" action="#">
            <div class="control-group normal_text"> <a href="../index.php"><h3><img src="img/logo7.png" alt="Logo" /></h3> </a> </div>
       <div class="control-group normal_text"> 
       <!-- <a href="../tourist/index.php"><h3>TOURIST LOGIN</h3></a>-->
       </div>
            <div class="pull-left">
            <a href="../admin/index.php"><h4>ADMIN LOGIN</h4></a>
            </div>

            <div class="pull-right">
            <a href="../guider/index.php"><h4>GUIDER LOGIN</h4></a>
            </div>    
            </form>
            
            
            
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
        <script src="js/bootstrap.min.js"></script> 
<script src="js/matrix.js"></script>
    </body>

</html>
