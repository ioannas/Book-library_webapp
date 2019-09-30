<?php
include("config.php");
session_start();
	mysqli_connect("localhost", "root", "", "signlogin") or die("Error connecting to database: ".mysql_error());
	
   
     
   //mysql_select_db("signlogin") or die(mysql_error());
	
	if(isset($_GET['query'])){
    $query = $_GET['query']; 
	// gets value sent over search form
	
	if(isset($_POST['min_length'])){ 
		$min_length = $_POST [' min_length '];
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT * FROM courses
            WHERE (`titlos` LIKE '%".$query."%') OR (`siggrafeas` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['titlos']."</h3>".$results['siggrafeas']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
	}
}
	
}
?>



<!DOCTYPE html>
<html lang="el"  ng-app = "myApp">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<head>
	<title>OnLine-Πρότυπο Εκπαίδευσης</title>
	<meta charset="UTF-8">
	<meta name="description" content="OnLine-Πρότυπο Εκπαίδευσης">
	<meta name="keywords" content="OnLine, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<!--<div class="site-logo">
						<img src="img/logo.png" alt="">
					</div>-->
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="" class="site-btn header-btn">Σύνδεση</a>
					<nav class="main-menu">
						<ul>
							<li><a href="index.html">Αρχική</a></li>
							<li><a href="sxetikameemas.html">Σχετικά με εμάς</a></li>
							<li><a href="courses.html">Κύκλος μαθημάτων</a></li>
							<li><a href="contact.html">Επικοινωνία</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="#">Αρχική</a>
				<span>Ιστορικό</span>
			</div>
		</div>
	</div>

       
	   <h2> Τα μαθήματα μου </h2>
	   <form action="lesson.php" method="POST"> 

		Book Name:<br>
		<input type="text" name="name"><br>

		Author:<br>
		<input type="text" name="author"><br>

		<button type="submit" href="lesson.php">Αναζήτση</button>

	   </form>
	   

<br />
<br />
<br />
<br />
<br />
<br />
<br />








	<!-- banner section --
	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Εγραφείτε τώρα!</h2>
				
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">Κάνε εγγραφή τώρα!</a>
			</div>
		</div>
	</section>
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Επικοινωνία</h4>
						<ul class="contact-list">
							<li>Σελεύκου 9 <br>Καβάλα, Ελλάδα</li>
							<li>+12 123 1234 12334</li>
							<li>yourmail@gmail.com</li>
						</ul>
					</div>
					
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*Δε σπαμάρουμε</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Όροι και Προϋποθέσεις</a></li>
					<li><a href="#">Εγγραφή</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</html>