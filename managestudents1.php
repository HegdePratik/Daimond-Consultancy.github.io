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
			<h2>Manage Student's</h2>
		</div>
	</div>
    
    
    
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest" style="font-size: 2em;
    color: #212121;
    line-height: 1.5em;
    letter-spacing: 1px;
    font-weight: 700;">STUDENTS <span style="color: #efb312;">DETAILS</span></h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>

<div class="flex flex-wrap -m-4">
    <div class="p-4 lg:w-1/2">
<div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
         
        <div class="flex-grow sm:pl-8">
        <h2 class="title-font font-medium text-lg text-gray-900">
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

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
	
    while($row = $result->fetch_assoc())
	{
		echo "<div><br><br>";
        echo ("
		<div>
        <div>
          <div>
            <h2>" . $row["full_name"]. "</h2>
            <h3></h3>
            <div>
			</div>
		  </div>
		</div>
		</div>
		");
		echo "</div>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
		</h2>
        <h3 class="text-gray-500 mb-3"></h3>
        <div class="more click" style="color:black">
        <a href="#" data-toggle="modal" data-target="#myModal2">Get Details<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
		</div>
		<br>
		<a href="delete.php" data-toggle="modal" data-target="#myModal2">Delete<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				
	     
            
        </div>
		</div>
      </div>

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

$sql = "SELECT * FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    for($i=7;$i<=8;$i++){
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["sr_no"]. "  Name: ". $row["full_name"]. "area_of_interest: ". $row["area_of_interest"]. "  Email: ". $row["email"]." Mobile number: ". $row["mobile_number"]. " Passwored: ". $row["password"]." Result: ". $row["result"]. " <br>";
    }
  }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>