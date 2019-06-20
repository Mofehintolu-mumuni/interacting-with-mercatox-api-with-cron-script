
<?php
require_once("watcher.php");

$obj = controller::create_watcher();



?>

<!DOCTYPE html>
<html>
<head>
<title>HYDRO WATCHER BY MOFEHINTOLU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cool Under Construction Page Flat Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
<!--js-->
</head>
<body>

<br/>
<br/>
<br/>
<br/>
	<div class="header">

          <h1>
           	<ol>
            <li>
            THE VALUE OF HYDRO/BTC IS: <?php echo $obj->hydro(); ?>
            </li>
            <br/>
             <li>
            THE VALUE OF BTC IN USD IS: $ <?php echo $obj->bitcoin(); ?>
            </li>
            <br/>
            <li>
            <h1>THE VALUE OF 222,222 HYDRO IN NAIRA IS: N <?php $obj->getprice(); ?> </h1>
            </li>
            </ol>
            
            </h1>
	</div>
	<div class="content">

	
		<div class="content2">
	
		</div>
		<div class="content3">
		<h1>
        	<p>Hydro Watcher! Stay Informed!</p>
            		<h1>Monitor the progress of HYDRO!</h1>
        </h1>
		
		</div>
	</div>
<div class="footer">
	<p>Copyright © MOFEHINTOLU MUMUNI. All Rights Reserved | Design by <a href="http://maqualitysystemsltd.com" target="_blank">MOFEHINTOLU MUMUNI</a></p>
</div>
</body>
</html>