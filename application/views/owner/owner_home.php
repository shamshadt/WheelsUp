


<?php
$CI =& get_instance();
$a=$CI->sessionin(4) ;
if($a==1)
    {

        include('owner_header.php');


        ?> 





<!DOCTYPE HTML>
<html lang="en">

<head>
            
            <!-- date picker -->
 <link rel="stylesheet" href="<?php echo base_url('assets/user/css/http _ajax.googleapis.com_ajax_libs_jqueryui_1.8_themes_base_jquery-ui.css" type="text/css')?>">
 <script src="<?php echo base_url('assets/user/js/http _ajax.googleapis.com_ajax_libs_jquery_1.6_jquery.min.js')?>"></script>
                            
<script src="<?php echo base_url('assets/user/js/http _ajax.googleapis.com_ajax_libs_jqueryui_1.8_jquery-ui.min.js')?>"></script>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/> -->

</head>
<body>

<!-- Header -->


<!-- Banner -->
<section id="banner" class="parallex-bg section-padding">
    <div class="container">
        <div class="intro_text white-text div_zindex">
            <h1>Welcome to WheelsUp</h1>
            <!-- <h5>Search and apply to millions of Listings</h5> --><br>

        

							        <!-- Category-Slider -->
							
								<div class="container">
							    	<div id="category_slider">
							        	<div class="owl-carousel owl-theme">
							            	
							                
							                <div class="item">
							                	<a href="#">
							    	            	<!-- <div class="category_icon"> -->
							                           <!--  <img src="assets/images/category-icon2.png" alt="image"> -->
							                        </div>
								                    <p>Restaurant</p>
							                    </a>
							                </div>
							                
							                
							                
							                <div class="item">
							                	<a href="<?php echo site_url('ownercontroller/owner_addcars')?>">
							    	            	<div class="category_icon">
							                            <img src="<?php echo base_url('assets/owner/images/icon1.png'); ?> " alt="image">

							                        </div>
								                    <p>Add Cars</p>
							                    </a>
							                </div>
							                
							                <div class="item">
							                	<a href="<?php echo site_url('ownercontroller/owner_viewcars');?>">
							    	            	<div class="category_icon">
							                             <img src="<?php echo base_url('assets/owner/images/icon2.png'); ?> " alt="image">                        </div>
								                    <p>View Added Cars</p>
							                    </a>
							                </div>



                                            <div class="item">
                                                <a href="<?php echo site_url('ownercontroller/owner_booking_details');?>">
                                                    <div class="category_icon">
                                                         <img src="<?php echo base_url('assets/owner/images/booking.png'); ?> " alt="image">                        </div>
                                                    <p>Booking Information</p>
                                                </a>
                                            </div>


							            </div>
							        </div>        
							    </div>
							</section>
							<!-- /Category-Slider -->

 		</div>

    </div>

   
    
</section>
<!-- /Banner -->








<!-- About-us -->
<section id="about_info" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7">
                <div class="white_box">
                    <h3>Save time and hassle. Let us find Quick and Easy</h3>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</p>
                    <a href="#" class="btn">Start Now !</a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- /About-us -->

<!-- Popular-Listings -->
<!-- <section id="popular_listings" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Popular Exclusive Listings</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        </div>   
        
        <div id="popular_listing_slider">
            <div class="owl-carousel owl-theme">
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon1.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img1.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Real Estate</a>
                        </div>
                        <h4><a href="#">The Morning Hotel</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
                
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img2.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Restaurant</a>
                        </div>
                        <h4><a href="#">Eating Restaurant</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
                
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon4.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img4.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Beauty & Spas</a>
                        </div>
                        <h4><a href="#">The Morning Hotel</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
                
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img3.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Restaurant</a>
                        </div>
                        <h4><a href="#">Blue Restaurant</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
             
    </div>
</section> -->
<!-- /Popular-Listings -->

<!-- Testimonials -->
<!-- <section id="testimonials" class="section-padding parallex-bg">
    <div class="container">
        <div class="section-header text-center white-text div_zindex">
            <h2>What Our Clients Say</h2>
        </div>
        
        <div id="testimonial_slider" class="div_zindex text-center">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonial_header">
                        <h5>William Steves</h5>
                        <p>CEO of XYZ PVT.</p>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                </div>
                
                <div class="item">
                    <div class="testimonial_header">
                        <h5>William Steves</h5>
                        <p>CEO of XYZ PVT.</p>
                    </div>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section> -->
<!-- /Testimonials -->

<!-- Latest-Blog -->
<!-- <section id="latest_blog" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Latest Articles and Tips</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="post_wrap">
                    <div class="post_img">
                        <a href="#"><img src="assets/images/post_1.jpg" alt="image"></a>
                    </div>
                    <div class="post_info">
                        <div class="post_category">
                            <a href="#">Beauty & Spas</a>
                        </div>
                        <h4><a href="#">The Standard Chunk.</a></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div class="post_meta">
                            <p>By: <a href="#">ElemoListing</a></p>
                            <p>On: <a href="#">22 March, 2017</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="post_wrap">
                    <div class="post_img">
                        <a href="#"><img src="assets/images/post_2.jpg" alt="image"></a>
                    </div>
                    <div class="post_info">
                        <div class="post_category">
                            <a href="#">Restaurant</a>
                        </div>
                        <h4><a href="#">There are many variations.</a></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div class="post_meta">
                            <p>By: <a href="#">ElemoListing</a></p>
                            <p>On: <a href="#">22 March, 2017</a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="post_wrap">
                    <div class="post_img">
                        <a href="#"><img src="assets/images/post_3.jpg" alt="image"></a>
                    </div>
                    <div class="post_info">
                        <div class="post_category">
                            <a href="#">Real Estate</a>
                        </div>
                        <h4><a href="#">All the Lorem Ipsum.</a></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                        <div class="post_meta">
                            <p>By: <a href="#">ElemoListing</a></p>
                            <p>On: <a href="#">22 March, 2017</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="#" class="btn">Read More Articles</a>
        </div>
        
    </div>
</section> -->
<!-- /Latest-Blog -->

<!-- Footer -->
<footer id="footer" class="secondary-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer_widgets">
                    <h5>Connect with Us</h5>
                    <div class="follow_us">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="footer_widgets">
                    <h5>Quick Links</h5>
                    <div class="footer_nav">
                        <ul>
                            <li><a href="#">How it Work</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="footer_widgets">
                    <h5>Our Newsletter</h5>
                    <div class="newsletter_wrap">
                        <form action="#" method="get">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <input type="submit" value="subscribe" class="btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer_bottom">
        <div class="container">
            <p>Copyright &copy; 2017 ElemoListing Private Limited. All Rights Reserved</p>
        </div>
    </div>
</footer>
<!-- /Footer -->









<?php
    
         include('owner_footer.php');

    }

else
    {

        $CI->index();


    }

?>