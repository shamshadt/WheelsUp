<!DOCTYPE HTML>
                            <html lang="en">

                            <!-- Mirrored from themes.webmasterdriver.net/ElemoListing/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 05:27:36 GMT -->
                            <head>
                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width,initial-scale=1">
                            <meta name="keywords" content="">
                            <meta name="description" content="">
                            <title>WheelsUp</title>


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
                            <!-- 
                            link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
                            <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
                            <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png"> -->


                            <!-- <img src="<?php  echo base_url('assets/adminimages/favicon-icon/apple-touch-icon-144-precomposed.png')?>" sizes="144x144"> 
                            <img src="<?php  echo base_url('assets/adminimages/favicon-icon/apple-touch-icon-72-precomposed.png')?>" sizes="72x72">

                            <img src="<?php  echo base_url('assets/adminimages/favicon-icon/apple-touch-icon-57-precomposed.png')?>"> -->



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
                                            <div class="logo"> <a href="#"><img src="<?php echo base_url('assets/img/wheel.png'); ?>" alt="" title="" /></a> </div>
                                            <div id="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i></div>
                                          </div>
                                            <div class="collapse navbar-collapse" id="navigation">
                                                <div class="user_nav">
                                                    <div class="dropdown " style="margin-right: 20%;" >
                                                      <span id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        
                                                        <img src="<?php  echo base_url('assets/adminimages/happy-client-02.jpg ')?>" alt="image"/>
                                                      </span>
                                                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                        <li><a href="<?php echo site_url('controller/adminhome')?>" ><i class="fa fa-cogs"></i> Dashboard </a></li>
                                                        
                                                        <li><a href="<?php echo site_url('controller/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>                   
                                                      </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                         </div>   
                                    </nav>
                                </header>
                                <!-- /Header -->

                               
                                <!-- Navigation -->
                                <div id="dashboard-nav" class="dashboard-nav">  


                         <!--    count of the approved ,blocked useres -->
                                        <?php

                                        $ownerapprove=$CI->countapprove(4);

                                        $driverapprove=$CI->countapprove(3);

                                        $userlist= $CI->countall(2);

                                        $driverlist= $CI->countall(3);

                                        $ownerlist= $CI->countall(4);

                                        $blockeduserlist= $CI->countblock(2);

                                        $blockeddriverlist= $CI->countblock(3);

                                        $blockedownerlist= $CI->countblock(4);
                                      
                                        ?>

                         <!--    count of the approved ,blocked useres -->


                                    <ul>
                                        <li class="active"><a href="<?php echo site_url('controller/adminhome')?>" ><i class="fa fa-cogs"></i> Dashboard</a></li>
                                    
                                        <li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list"></i> Client Approval</a>
                                            <ul class="dropdown-menu" aria-labelledby="MLabel">
                                                <li><a href="<?php echo site_url('controller/ownerapproval');?>">Car Owners <span class="nav-tag green"> <?php echo $ownerapprove; ?> </span></a></li>
                                                <li><a href="<?php echo site_url('controller/driverapproval');?>">Drivers <span class="nav-tag yellow"> <?php echo $driverapprove; ?> </span></a></li>
                                                <!-- <li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li> -->
                                            </ul>   
                                        </li>

                                         <li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list"></i> User List</a>
                                            <ul class="dropdown-menu" aria-labelledby="MLabel">
                                                <li><a href="<?php echo site_url('controller/admin_userlist');?>">Users List <span class="nav-tag violet"> <?php echo $userlist; ?> </span></a></li>
                                                <li><a href="<?php echo site_url('controller/admin_ownerlist');?>">Owners List  <span class="nav-tag green"> <?php echo $ownerlist; ?> </span></a></li>
                                                <li><a href="<?php echo site_url('controller/admin_driverlist');?>">Driver List  <span class="nav-tag yellow"> <?php echo $driverlist; ?> </span></a></li>
                                                <!-- <li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li> --> 
                                            </ul>   
                                        </li>

                                        <li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list"></i> Blocked Clients</a>
                                            <ul class="dropdown-menu" aria-labelledby="MLabel">
                                                <li><a href="<?php echo site_url('controller/admin_BlockedUsersLists');?>"> Blocked Users  <span class="nav-tag red"> <?php echo $blockeduserlist; ?> </span></a></li>
                                                <li><a href="<?php echo site_url('controller/admin_BlockedOwnersLists');?>">Blocked Owners   <span class="nav-tag red"> <?php echo $blockedownerlist; ?> </span></a></li>
                                                <li><a href="<?php echo site_url('controller/admin_BlockedDriversLists');?>">Blocked Drivers  <span class="nav-tag red"> <?php echo $blockeddriverlist; ?> </span></a></li>
                                                
                                            </ul>   
                                        </li>


                                        <li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list"></i> Brands</a>
                                            <ul class="dropdown-menu" aria-labelledby="MLabel">
                                                <li><a href="<?php echo site_url('controller/admin_addmodels');?>">Create Brands </a></li>
                                                <li><a href="<?php echo site_url('controller/admin_listandmanage_brands');?>">Manage Brands </a></li>

                                                <!-- <li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li> -->
                                            </ul>   
                                        </li>



                                        <li><a id="MLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus"></i>  Vehicle Managment</a>
                                            <ul class="dropdown-menu" aria-labelledby="MLabel">
                                                <li><a href="<?php echo site_url('controller/admin_addcars');?>"><i class=""></i> Add Cars</a></li>
                                                <li><a href="<?php echo site_url('controller/admin_viewcars');?>"><i class=""></i> View Cars</a></li>
                                                <li><a href="<?php echo site_url('controller/admin_car_approval');?>">View Car Requests</a></li>

                                            </ul>




                                       

                                       <!--  <li><a href="#"><i class="fa fa-star-o"></i> Reviews</a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o"></i> Bookmarks</a></li>
                                        <li><a href="#"><i class="fa fa-plus"></i> Add Listing</a></li> -->

                                        
                                        <li><a href="<?php echo site_url('controller/logout')?>"><i class="fa fa-power-off"></i> Logout</a></li>

                                    </ul>   
                                </div>
                                <!-- Navigation / End -->



                        </body>
                        </html>