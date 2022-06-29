<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Consultancy</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">

<link href="css/footer.css" rel="stylesheet">
</head>
<body>
<!-- banner -->
<div class="main_section_agile">
		<div class="agileits_w3layouts_banner_nav">
		   
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="Cdashboard.php"><i class="fa fa-diamond" aria-hidden="true"></i> Consultancy</a></h1>

				</div>
				 <ul class="agile_forms">
					
					
				</ul>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li><a href="Aindex.php" class="effect-3" style="font-size: 125%;">Home</a></li>
							<li><a href="ManageStudents.php" class="effect-3" style="font-size: 125%;">Student's</a></li>
              <li><a href="ManageConsultants.php" class="effect-3" style="font-size: 125%;">Consultant's</a></li>
							<li><a href="ManageFeedback.php" class="effect-3" style="font-size: 125%;">Feedback</a></li>	
									
									<!--<li><a href="typography.html">Typography</a></li>-->
							
						

						</ul>
					</nav>
				</div>
			</nav>	
			<div class="clearfix"> </div> 
		</div>
</div>
<!--/ banner -->
<div class="banner1">
			
		<div class="w3_agileits_service_banner_info">
			<h2>Manage consultant's</h2>
		</div>
	</div>
    
    
    
<section class="text-gray-600 body-font">
  <div class="container mx-auto" style="margin-top: 100px;">
    <div class="flex flex-col text-center w-full ">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest" style="font-size: 2em;
    color: #212121;
    line-height: 1.5em;
    letter-spacing: 1px;
    font-weight: 700;">CONSULTANTS <span style="color: #efb312;">DETAILS</span></h1>
    </div>
  </div>
</section>

      <section id="main-content">
          <section class="wrapper">
          	
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sr_no.</th>
                                  <th class="hidden-phone">Full Name</th>                                  
                                  <th> Email Id</th>                                  
                                  <th> Mobile Number</th>
                                  <th> password</th>
                                  <th> Photo</th>                                  
                                  <th> Id Proof</th>                                  
                                  <th> Certificate</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($conn,"select * from counsellor");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {  $class1   ?>
                              <div class=<?php $class1 ?>>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  
                                  <td><?php echo $row["full_name"];?></td>                                  
                                  <td><?php echo $row['email'];?></td>                             
                                  <td><?php echo $row['mobile_number'];?></td>
                                  <td><?php echo $row['password'];?></td>
                                  <td><?php echo $row["Photo"];?></td>                                  
                                  <td><?php echo $row['Id_proof'];?></td>                             
                                  <td><?php echo $row['Certificate'];?></td>
                                  <td>
                                     
                                     <a href="UpdateCprofile.php?id=<?php echo $row['sr_no'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="Delete.php?id=<?php echo $row['sr_no'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                              </div>
                              </tbody>
                                
                          </table>
                      </div>
                  </div>
              </div>
		   </section>
      </section>
     
      <br><br><br><br><br><br>
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

<?php
$conn->close();
?>

  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>DIAMOND CONSULTANCY </i>is the website where you can make an appointment to see a qualified and professional career guidance practitioner,<br> Here, students get a one to one consultancy session with our hand picked professional career guidance practitionier, which provide students with great opportunity to get help in narrowing down the options so that they can choose a right career opportunity.</p>
          </div>

         <div class="col-xs-6 col-md-3">
            <!--<h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>-->
          </div>

          <div class="col-xs-6 col-md-3" style="text-align:center;">
            <h6>Quick Links</h6>
            <ul class="footer-links">
            <li><a href="Aindex.php" class="effect-3">Home</a></li>
			<li><a href="ManageStudents.php" class="effect-3">Student's</a></li>
            <li><a href="ManageConsultants.php" class="effect-3">Consultant's</a></li>
			<li><a href="" class="effect-3">Feedback</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <!--<div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text"> 
			© 2021 Consultancy. All Rights Reserved | Design by NPJD.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>-->
</footer>

<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>