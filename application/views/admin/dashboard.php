<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/ElemoListing/dashboard-my-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 05:27:40 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>ElemoListing - Directory & Listings HTML Template</title>



<!--Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/bootstrap.min.css" type="text/css')?>">
<!--Custome Style -->
<!-- <link rel="stylesheet" href="assets/css/style.css" type="text/css"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/style.css" type="text/css')?>">
<!-- <link rel="stylesheet" href="assets/css/dashboard.css" type="text/css">
 --><link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/dashboard.css" type="text/css')?>">
<!--OWL Carousel slider-->
<!-- <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/owl.carousel.css" type="text/css')?>">
<!--FontAwesome Font Style -->
<!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/font-awesome.min.css" type="text/css')?>">



<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>
<div class="dashboard_container">
	<!-- Header -->
	<header id="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
               <div class="navbar-header">
                <div class="logo"> <a href="index.html"><img src="assets/images/logo.png" alt="image"/></a> </div>
                <div id="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i></div>
              </div>
                <div class="collapse navbar-collapse" id="navigation">
                    <div class="user_nav">
                        <div class="dropdown">
                          <span id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/happy-client-01.jpg" alt="img"> 
                          </span>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="dashboard.html"><i class="fa fa-cogs"></i> Dashboard</a></li>
                            <li><a href="dashboard-my-profile.html"><i class="fa fa-user-o"></i> My Profile</a></li>
                            <li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a></li>                   
                          </ul>
                        </div>
                    </div>
                    <div class="submit_listing">
                        <a href="dashboard-add-listing.html" class="btn outline-btn"><i class="fa  fa-plus-circle"></i> Submit Listing</a>
                     </div>
                </div>
             </div>   
        </nav>
    </header>
	<!-- /Header -->

	<div id="dashboard">
	<!-- Navigation -->
	<div id="dashboard-nav" class="dashboard-nav">	
		<ul>
        	<li class="active"><a href="<?php echo site_url('controller/adminhome')?>" ><i class="fa fa-cogs"></i> Dashboard</a></li>
        	<li><a href="<?php echo site_url('controller/expand')?>"><i class="fa fa-power-off"></i> Expand(Insert)</a></li>
			<li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list"></i> My Listings</a>
				<ul class="dropdown-menu" aria-labelledby="MLabel">
					<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
					<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
					<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
				</ul>	
			</li>
			<li><a href="dashboard-reviews.html"><i class="fa fa-star-o"></i> Reviews</a></li>
			<li><a href="dashboard-bookmarks.html"><i class="fa fa-bookmark-o"></i> Bookmarks</a></li>
			<li><a href="dashboard-add-listing.html"><i class="fa fa-plus"></i> Add Listing</a></li>
            <li><a href="dashboard-my-profile.html"><i class="fa fa-user-o"></i> My Profile</a></li>
			<li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a></li>
		</ul>	
	</div>
	<!-- Navigation / End -->

	<!-- Content -->
	<div class="dashboard-content">
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>My Listings</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>My Listings</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
        
        <div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box">
					<h4>Active Listings</h4>
					<ul>
						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>
						
						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>

						<li>
							<div class="list-box-listing">
								<div class="list-box-listing-img"><a href="#"><img src="assets/images/listing_img1.jpg" alt=""></a></div>
								<div class="list-box-listing-content">
									<div class="inner">
										<h3><a href="#">Tom's Restaurant</a></h3>
										<span>964 School Street, New York</span>
										<div class="star-rating">
											<div class="rating-counter">(12 reviews)</div>
										</div>
									</div>
								</div>
							</div>
							<div class="buttons-to-right">
								<a href="#" class="button gray"><i class="fa fa-pencil"></i> Edit</a>
								<a href="#" class="button red"><i class="fa fa-trash-o"></i> Delete</a>
							</div>
						</li>
					</ul>
				</div>
			</div>


			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy; 2017 ElemoListing Private Limited. All Rights Reserved</div>
			</div>
		</div>
        
	</div>
	<!-- Content / End -->
</div>
</div>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Carousel-JS--> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/ElemoListing/dashboard-my-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 05:27:40 GMT -->
</html>