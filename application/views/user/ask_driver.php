  





<?php
$CI =& get_instance();
$a=$CI->sessionin(2) ;
if($a==1)
    {

        include('user_header.php');
             // if($id) //javasscript resubmisson ozhivakunulla code kodukumbo nammal oru pagilek post vazhi ayacha values refresh chydhaal kitoola... adh kittan vendiyaan
             // {

        ?> 





<!DOCTYPE HTML>
<html lang="en">

<head>
                                        <!-- modal -->

                            <script src="<?php echo base_url('assets/user/js/jquery.min.js')?>"></script> 
                            <!-- <script src="<?php echo base_url('assets/user/js/bootstrap.min.js')?>"></script> --> 



</head>

<body>

<!-- Header -->


<!-- Banner -->
<section id="banner" class="parallex-bg section-padding">
    <div class="container">
        <div class="intro_text white-text div_zindex">
            <h1>WheelsUp</h1>
            <h5>Search and apply to millions of Listings</h5>
    		 <h1>   <b><font color="green"><?php echo $this->session->flashdata('usersuccess');  ?> </font></h3> </b>
            
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Banner -->




<section id="about_info" class="section-padding" >
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-2    ">
                <div class="white_box" >
                  <div class="col-md-4"></div> 
                   <h3 style=" background-color: #38ccff ;"><b>Need a Driver!</h3> <br><br>
                   
                   <div class="col-md-3"></div>
                  	<form   action="<?php echo site_url('usercontroller/driver_listing')?>" method="post" >
                  		<div class="post_category" style="font-size: 150%"><button><a> YES  </a></button> 
                  	</form>

                   <div class="col-md-4">
                   <div class="col-md-2">

                 <form   action="<?php echo site_url('usercontroller/return_home')?>" method="post" >
                   <input type="hidden" name="lid" value="<?php echo $lid?>" >
                    <input type="hidden" name="place" value="<?php echo $place?>" >
                     <input type="hidden" name="fromdate" value="<?php echo $fromdate?>" >
                      <input type="hidden" name="todate" value="<?php echo $todate?>" >

                  <div class="post_category"><button><a> NO  </a></button>  </div></div>
              	 </form>




                  
                </div>
            </div>
        </div>
        
    </div>
</section>




    



    	

                                                                                <!--  <?php
                                                                                    foreach($id as $row)
                                                                                    {
                                                                                    $cid=$row->cid;
                                                                                    //$lid=$row->lid;
                                                                                    $model=$row->model;
                                                                                    $name=$row->name;
                                                                                    $millege=$row->millege;
                                                                                    $seats=$row->seats;
                                                                                    $aprice=$row->aprice;

                                                                                    $rprice=$row->rprice;
                                                                                    $fuel=$row->fuel;
                                                                                    $ac=$row->ac;
                                                                                    $music=$row->music;
                                                                                    $steering=$row->steering;
                                                                                    $lock=$row->centerlock  ;


                                                                                    $regno=$row->regno;
                                                                                    $cimage=$row->cimage;
                                                                                    $regimage=$row->regimage;
                                                                                    $date=$row->date;
                                                                                    $cstatus=$row->cstatus;
                                                                                    $place=$row->pname;





                                                                                    $lid = $this -> session -> userdata('id');
                                                                                        
                                                                                          
                                                                                ?> -->
        
                            
          <!--   <?php  } ?> -->

   







<!-- <div class="container">
 -->  
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

  <!-- Modal -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
   <div class="modal-dialog" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="mymodal">&times;</button>
          <h4 class="modal-title">Your Comments</h4>
        </div>
        
         <section>
                <div class="modal-body">
                  <div class="w3_login_module">
                    <div class="module form-module">


                  <div style="margin-top:10px" class="well">
                    <div class="agile-info-wthree-box">
                      <form>
                       <!--  <input id="ratings-hidden" name="rating" type="hidden" value="1">
                        <input type="hidden" name="mid" id="mid" value="<?php echo $fid ?>"> -->
                                        <textarea  placeholder="Comment" required="" name="comment" id="comment" style="background:white" ></textarea>
                    <!-- <?php if($rating!=1)
                          { ?> -->
                      <div class="text-left" id="ratings"><h4>Rating :</h4>
                          <div class="stars starrr" data-rating="1"></div>
                      </div>
                    <!-- <?php } ?> -->
                                        <button  class="col-xs-12" style="background:#FF8D1B;color:white;border:none;padding:10px 10px" type="button" value="COMMENT" onclick="return commentval()">COMMENT</button>
                                        <div class="clearfix"> </div>
                                    </form>

                                </div>
                  </div>
                  <div id='commentsview' name="commentsview" class="media-grids">
                    <!-- <?php
                    foreach ($comments as $key)
                    {
                     ?> -->
                  <div class="media">
                                    <h5><!-- <?php echo $key->name ?> --></h5>
                                    <div class="media-left">
                                        <a href="#">
                                            <!-- <img src="<?php echo base_url('images/profile/').$key->profile_pic;?>" title="One movies" alt=" " height="50px" width="50px"/> -->
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <p><!-- <?php echo $key->Description ?> --></p>
                                        <span>Posted on :<a href="#"> <!-- <?php echo $key->date ?> --></a></span>
                                    </div>
                                </div>
                <!-- <?php } ?> -->
                    </div>

                  </div>
                </div>
          </section>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="mymodal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>







<!-- /Popular Cities/Towns -->




<!-- About-us -->
<!-- <section id="about_info" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7">
                <div class="white_box">
                     <h3>Own the Car without buying It!</h3>
                    <h5> What’s WheelsUp Subscribe?</h5>
                       <p> Owning a car is a huge commitment and WheelsUp Subscribe
                        offers you an option to drive your dream car for a tenure of
                        6, 12, 24 or 36 months at a monthly subscription cost with
                        Zero Downpayment, Zero Insurance Cost, Zero Service &
                        Maintenance Cost & 24x7 roadside assistance. </p>
                    <a href="#" class="btn">Start Now !</a>
                </div>
            </div>
        </div>
        
    </div>
</section> -->
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











<!-- Scripts --> 
<!-- <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> --> 
<!--Carousel-JS--> 
<!-- <script src="assets/js/owl.carousel.min.js"></script> -->    
 <!--Switcher-->
<!-- <script src="assets/switcher/js/switcher.js"></script> -->
</body>

<!-- Mirrored from themes.webmasterdriver.net/ElemoListing/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2019 05:26:18 GMT -->
</html>


<?php
 include('user_footer.php');

 // //post vazhi kodtha values close cheyyan
 //       }  
 //       else
 //       {
 //        $CI->home();
 //       }
 //  //post vazhi kodtha values close cheyyan -----up to this   



    }

else
    {

        $CI->index();


    }

?>