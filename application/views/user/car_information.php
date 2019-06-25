


<?php
$CI =& get_instance();
$a=$CI->sessionin(2) ;
if($a==1)
    {

        include('user_header.php');
             if($id) //javasscript resubmisson ozhivakunulla code kodukumbo nammal oru pagilek post vazhi ayacha values refresh chydhaal kitoola... adh kittan vendiyaan
             {

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
            
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Banner -->


    

<!-- Popular-Cities/Towns -->
<section id="popular_cities" class="section-padding">
    <div class="container">

                                                                                 <?php
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
                                                                                        
                                                                                          
                                                                                ?>
        
                            <div class="listview_sidebar show_listing   ">
                                       
                                                <div class="items-list listing_wrap" data-post-id="1">

                                                            
                                                                <div class="listing_img " style="width: 35%">  
                                                                   <a href="#" ><img src="<?php echo base_url('images/carimages/').$cimage;?>"></a>
                                                                </div>


                                                            

                                                    <div class="listing_info">
                                                                        
                                                                        <h4 ><a href="#">  <?php echo $name; ?></a></h4>

                                                                          
                                                                        
                                                                             

                                                                        

                                                                        <p> <b>Seats: <?php echo $seats; ?>     &nbsp; | &nbsp;  Fuel: <?php echo $fuel; ?>    &nbsp; | &nbsp;   Millege: <?php echo $millege; ?>    &nbsp; | &nbsp;   Music System: <?php echo $music; ?>   &nbsp; | &nbsp;   Center Lock: <?php echo $lock; ?>  &nbsp; | &nbsp;   Security Deposit: <?php echo $aprice; ?>   </b></p>
                                                                        
                                                                            <div  >
                                                            <!-- <form class="form"  action="<?php echo site_url('usercontroller/bookingdetailsinsert')?>" method="post" id="bookform">   -->     <!-- a big form which is ending on book now -->
                                                                  <form class="form"  action="<?php echo site_url('usercontroller/paymentpage')?>" method="post" id="bookform">                    
                                                                                    <div class="col-md-6" >
                                                                                        <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar">
                                                                                        <input type="text" id="txtFrom" name="txtFrom"   value="<?php echo $fromdate ?>" readonly ></span>
                                                                                    </div>  
                                                                                     <div   class="col-md-6" >
                                                                                        <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar">
                                                                                        <input type="text" id="txtTo" name="txtTo" value="<?php echo $todate ?>" readonly ></span>
                                                                                    </div>
                                                                                    
                                                                            </div>

                                                                        <div >
                                                                            <p><h6 style="padding-top: 68px;"><div class="post_category">      &nbsp&nbsp&nbsp&nbsp        <b>₹ </b> <?php echo $rprice;  ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    <i class="fa fa-map-marker"></i> <?php echo $place ?>   </div> </h6>
                                                                             
                                                                        </div>





                                                           
                                                             
                                                        <input type="hidden" value="<?php echo $cid ?>" name="cid">
                                                        <input type="hidden" value="<?php echo  $lid ?>" name="lid">
                                                        <input type="hidden" name="fromdate" value="<?php echo $fromdate?>" > 
                                                        <input type="hidden" name="todate" value="<?php echo $todate?>" >
                                                        <input type="hidden" name="place" value="<?php echo $place?>" >
                                                        <input type="hidden" value="<?php echo  $rprice * $no_of_days + $aprice; ?>" name="tamount">

                                                        
                                                        <!-- <button type="submit"   class="btn btn-default" >Book NOw</button> -->
                                                         <button type="submit"   class="btn btn-default" >Continue Reservation</button>
                                                         
                                                         
                                                              
                                                                
                                                                  <!-- <a href="#"><i style="color:blue; margin-left: 40%" class="fa fa-comments" aria-hidden="true" ></i></a>
                                                                  
                                                                  <a style="margin-left:1px"><a href="#" data-toggle="modal" title="View Comments" data-target="#myModalx"><h10>Comments</h10> -->
                                                                  

                                                        </form>
                                                          

                                                                                     

                                                                  
                                                                

                                                          
                                                    </div>
                                                </div>


                                                                <section id="popular_cities" class="section-padding">
                                                                    <div class="container">
                                                                      <div class="listview_sidebar show_listing   ">     
                                                                        
                                                                          <div class="col-md-12">
                                                                            <h4 style="text-align: center;">Your Comments</h4>
                                                                               
                                                                          <textarea  placeholder="Write Your Comments Here.....!" required="" name="commentss" id="commentss" style="background:#efeded;" ></textarea>
                                                                          <input type="hidden" value="<?php echo $cid ?>" name="cid" id="cid">
                                                                          <input type="hidden" value="<?php echo $lid ?>" name="lid" id="lid">
                                                                          <button  class="col-xs-12" style="background:#FF8D1B;color:white;border:none;padding:10px 10px" type="button" value="COMMENT" onclick="return commentval()">COMMENT</button> 
                                                                                             

                                                                                            <section>
                                                                                                <div class="items-list listing_wrap" data-post-id="1"> 
                                                                                                      <div id='commentsview1' name="commentsview1" >     
                                                                                                       
                                                                                                       <?php
                                                                                                               if($dis)
                                                                                                               {
                                                                                                                       foreach ($dis as $row) 
                                                                                                                        $prof_img=$row->prof_img;
                                                                                                                        $name=$row->fname;
                                                                                                                        $comments=$row->comments;
                                                                                                                       {  ?>
                                                                                                                          <div class="col-lg-12 col-md-12"><div class="dashboard-list-box"> <ul> <li class="listing-reviews"> <div class="review_img"> <img src="<?php echo base_url('images/user_profile_pic/').$prof_img ?>" > </div> <div class="review_comments"> <div class="comment-by"><?php echo $name ?> <div class="listing_review_info">  <p><i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star"></i> </p> </div> </div> <span class="date">17-05-2019</span> <div class="star-rating"> </div> <p><?php echo $comments ?> </p> </div> </li></ul></div>                                                                                                       
                                                                                                                        <?php 
                                                                                                                       }  
                                                                                                                }       ?>
                                                                                                       




                                                                                                      </div>
                                                                                                </div>
                                                                                            </section>

                                                                                </div>

                                                                          </div>
                                                                      
                                                                      </div>

                                                                    </div>
                                                                    
                                                                </section>


                                        

                            </div>
            <?php  } ?>

        </div>
  
</section> 















                        
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

<script>
function commentval()
{
 //alert("hio");

  var cid=document.getElementById('cid').value
  var comment=document.getElementById('commentss').value
 // alert(cid);
  // var rate=document.getElementById('ratings-hidden').value
  // alert(rate);
  if(comment=="")
  {
    alert("Please enter your comments");
    return false;
  }
  else
  {
     //alert(comment);
    // data.append('rate',rate);
    $.ajax({
      method:'post',
      url:"<?php echo site_url('usercontroller/commentinsertt'); ?>",
      // processData: false,
      // contentType: false,
      data: {'comment':comment, 'cid':cid},
      success:function(result){
      //alert(result);
      var r=JSON.parse(result);
      $('#commentsview1').html("");
      // $('#ratings').html("");
      // $('#ccount').html("");
      document.getElementById('commentss').value="";

      // $('#ccount').html(r.length);
      for(i=0;i<r.length;i++)
       {
      // //$('#commentsview').append('<div style="padding-left:5px" class="media"><h5>'+r[i].name+'</h5><div class="media-left"><a href="#"><img src="<?php echo base_url('images/profile/')?>'+r[i].profile_pic+'" title="One movies" alt=" " height="50px" width="50px" /></a></div><div class="media-body"><p>'+r[i].Description+'</p><span>Posted on :<a href="#"> '+r[i].date+' </a></span></div></div>')
         // $('#commentsview1').append('<h1>iuytr</h1>');
         $('#commentsview1').append(' <div class="col-lg-12 col-md-12"> <div class="dashboard-list-box"> <ul> <li class="listing-reviews"> <div class="review_img"> <img src="<?php echo base_url('images/user_profile_pic/')?>'+r[i].prof_img+'" > </div> <div class="review_comments"> <div class="comment-by">'+r[i].fname+' <div class="listing_review_info">  <p><i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star"></i> </p> </div> </div> <span class="date">17-05-2019</span> <div class="star-rating"> </div> <p>'+r[i].comments+'</p> </div> </li></ul></div>    ')
        
        }

         }
    });
  }

}

</script>









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

 //post vazhi kodtha values close cheyyan
       }  
       else
       {
        $CI->home();
       }
  //post vazhi kodtha values close cheyyan -----up to this   



    }

else
    {

        $CI->index();


    }

?>