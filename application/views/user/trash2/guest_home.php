


<?php
        include('user_header.php');


        ?> 





<!DOCTYPE HTML>
<html lang="en">

<head>
            
            <!-- date picker -->
 <link rel="stylesheet" href="<?php echo base_url('assets/user/css/http _ajax.googleapis.com_ajax_libs_jqueryui_1.8_themes_base_jquery-ui.css" type="text/css')?>">
  <script src="<?php echo base_url('assets/user/js/date_jquery.min.js')?>"></script>
                            
<script src="<?php echo base_url('assets/user/js/date_jquery-ui.js')?>"></script> 

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/> -->


<script>
  $(function () {
    $("#txtFrom").datepicker({
        // numberOfMonths: 1,
        changeYear:true,
        changeMonth:true,
        minDate:'0',
        maxDate:'1m',
        onSelect: function (selected) {
            var minday = new Date(selected);
            var maxday = new Date(selected);
            minday.setDate(minday.getDate() );
            maxday.setDate(maxday.getDate() + 30);
            // alert(maxday);
            $("#txtTo").datepicker("option", "minDate", minday);
            $("#txtTo").datepicker("option", "maxDate", maxday);
        }
    });
    $("#txtTo").datepicker({
        // numberOfMonths: 1,
        changeYear:true,
        changeMonth:true,
        minDate:'0',
        maxDate:'1m',
        onSelect: function (selected) {
            var minday = new Date(selected);
            minday.setDate(minday.getDate() - 1);
        }
        
    });
});
</script>

</head>
<body>

<!-- Header -->


<!-- Banner -->
<section id="banner" class="parallex-bg section-padding">
    <div class="container">
        <div class="intro_text white-text div_zindex">
            <h3>   <font color="red"><?php echo $this->session->flashdata('usersuccess');  ?> </font></h3>
            <h1>Welcome to WheelsUp</h1>
            <h5>Search and apply to millions of Listings</h5><br>
            
                <form   action="<?php echo site_url('usercontroller/searchcars')?>" method="post" id="searchform" onSubmit="return" class="oh-autoval-form">
                                             <i><h1 style="color: #03aee9;"><b>BOOK YOUR CAR TODAY!</h1></b></i>
                    <div class="form-group">
                                <div class="col-xs-6">

                                    <input type="text" id="txtFrom" name="txtFrom"  class="form-control" placeholder="From date" required readonly>
                                </div>
                    

                                 <div class="form-group">
                                     <div class="col-xs-6">
                                        <input type="text" id="txtTo" name="txtTo" class="form-control" placeholder="To date" required readonly>
                                    </div>
                                </div><br><br><br>
                     </div>  


                                        <div class="form-group">
                                         
                                              <div id="a" class="col-xs-4" >
                                                 
                                                  <select class=" form-control" name="states" id="states"  onchange="return dist()" required>
                                                    <option value="0">Select State</option>
                                                     <?php
                                                              foreach($diss as $row)
                                                                {
                                                                  $id=$row->id;
                                                                  $name=$row->sname;
                                                    ?>  
                                                    <option value="<?php echo $id;?> "> <?php echo $name ?> </option>
                                                         <?php
                                                        }
                                                        ?> 
                                                  </select>
                                                    
                                              </div>
                                        </div>



                                        <div class="form-group">

                                          <div id="a" class="col-xs-4" >
                                                    <select  class=" form-control"  name="district" id="district"  onchange="return plac()"  required>
                                                      <option value="0">Select District</option>
                                                    </select>
                                          </div>
                                        </div>




                                        <div class="form-group">
                                          <div id="a" class="col-xs-4" >
                                            

                                                    <select  class=" form-control"  name="place" id="place"  >
                                                      <option value="0">Select Place</option>
                                                    </select>
                                                    <br>
                                          </div> 
                                        </div>



                        
                        <div class="form-group"> 
                            <div class="col-xs-12">
                            

                            
                              <select class=" form-control" name="model" id="model"  required>
                                                                      

                              <option value="">--Select Your Car Model--</option>
                              <option value="Any">Any</option>
                              <?php
                              foreach($model as $row)
                              {
                              $model_name=$row->m_name; 
                              $mid=$row->mid;
                              ?>
                              <option value="<?php echo $model_name;?>"><?php echo $model_name;?></option> 
                             
                               <?php }    ?>
                              </select><br>
                            </div> 
                              
                                                                 
          
                        </div>
                   
                   
                    <div class="form-group search_btn">
                         <div class="col-xs-12">
                        <input type="submit" value="Search Cars" class="btn btn-block" >
                    </div>
                    </div>
                </form>
           
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Banner -->
<!-- 
<section class="section-padding">
    <div class="container">
<div id="car" name="car" style="">


</div>
  </div>
</section> -->


<!-- About-us -->
<section id="about_info" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-7    ">
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
</section>
<!-- /About-us -->

<!-- Popular-Listings -->
<!-- <section id="popular_listings" class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Popular Exclusive Listings</h2>
           
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
<section id="testimonials" class="section-padding parallex-bg">
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
</section>
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



<script type="text/javascript">
$(function () {
    $("#txtFrom").datepicker({
        numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() + 1);
            $("#txtTo").datepicker("option", "minDate", dt);
        }
    });
    $("#txtTo").datepicker({
        numberOfMonths: 2,
        onSelect: function (selected) {
            var dt = new Date(selected);
            dt.setDate(dt.getDate() - 1);
            $("#txtFrom").datepicker("option", "maxDate", dt);
        }
    });
});
</script>


<script>

    function search()
{
  var fromdate=document.getElementById('txtFrom').value;
  var todate=document.getElementById('txtTo').value;
  var data=new FormData();
  data.append('txtFrom',txtFrom);    //first 'txt from' is name and  second is id 
  data.append('txtTo',txtTo);
    $.ajax({
    method:'post',
    url:"<?php echo site_url("usercontroller/searchcars"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
        alert(result);
              var r=JSON.parse(result);
             $("#car").html("");
            for(var i=0;i<r.length;i++)
             {
             $("#car").append('<div class="col-md-4 grid_view show_listing"><div class="listing_wrap"><div class="listing_img" ><span class="like_post"><i class="fa fa-bookmark-o"></i></span><div class="listing_cate"><span class="cate_icon"><a href="#"><img src="assets/images/category-icon5.png" alt="icon-img"></a></span> <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span></div><a href="#"><img src="<?php echo base_url("images/carimages/'+r[i].cimage+'")?>"  alt="image"></a></div><form class="form"  action="" enctype="multipart/form-data" method="post" id="carform"><div class="listing_info"><div class="post_category"><a > <b>₹ </b> <?php  $rprice ?> </a></div><h4><a href="#">'+r[i].name+'</a></h4><p>5-star hotel with restaurant, Deluxe Rooms.</p><div class="listing_review_info"><p><span class="review_score">4.0/5</span> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star"></i> (5 Reviews) </p><p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p></div><input type="hidden" name="cid" value=""><button type="submit"   class="btn btn-default">Book Now</button></form></div></div></div>');
         }  
     }
  });
}
</script>


<!--  district  -->
<script>

function dist()
{
  var states=document.getElementById('states').value;
  //alert(states);
  var data=new FormData();
  data.append('sid',states);
  $.ajax({
    method:'get',
    url:"<?php echo site_url("usercontroller/districtselect"); ?>",

    data: {sid:states},
    success:function(result){
      //console.log(result);

    // alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#district').html("<option value=0>"+"Select District"+"</option>");

       for(i=0;i<r.length;i++){
         $('#district').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}

function plac()
{

 
  var district=document.getElementById('district').value;
  // alert(district);
  var data=new FormData();
  data.append('did',district);
  $.ajax({
    method:'get',
    url:"<?php echo site_url("usercontroller/placeselect"); ?>",
    
    data: {did:district},
    success:function(result){
    //alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#place').html("<option value=0>"+"Select Place"+"</option>");

       for(i=0;i<r.length;i++){
         $('#place').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}
  </script> 





<?php
    
         include('user_footer.php');

?>