


<?php
        include('guest_header.php');


        ?> 





<!DOCTYPE HTML>
<html lang="en">


<head>
 
            


 

<!-- Inner-Banner -->
<section id="listing_banner" class="parallex-bg">
    <div class="container">
        
    <div class="dark-overlay"></div>
</section>
<!-- /Inner-Banner -->

<!-- Listings -->
<section id="inner_pages">
    <div class="container">
        <!-- <div class="listing_header">
            
            
            <div class="layout-switcher">
                <a href="#" class="active"><i class="fa fa-th"></i></a>
                <a href="listing-listview.html"><i class="fa fa-align-justify"></i></a>
            </div>
        </div> -->



                                                <?php
                                                    if(!$list)
                                                    {
                                                        echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No Cars availiable in selected place...!!</h1></center>';
                                                   



                                                    }
                                                    else
                                                    {
                                                ?>
        

            

        <div class="row">


                    <?php
                                          foreach($list as $row)
                                          {
                                          $cid=$row->cid;
                                          $lid=$row->lid;
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
                                          // $place=$row->pname;

                                           ?>
                   
                        <div class="col-md-4 grid_view show_listing">
                            <div class="listing_wrap">
                                <div class="listing_img" >
                                                 
                                    <a href="#"><img src="<?php echo base_url('images/carimages/').$cimage;?>"  alt="image"></a>
                                </div>
                                <form class="form"  action="<?php echo site_url('usercontroller/message')?>" enctype="multipart/form-data" method="post" id="carform">
                                <div class="listing_info">
                                    <div class="post_category">
                                        <a > <b>₹ </b> <?php echo $rprice ?> </a>
                                    </div>
                                    <h4><a href="#"><?php echo $name ?> </a></h4>
                                    <!-- <p>5-star hotel with restaurant, Deluxe Rooms.</p> -->
                                    
                                    <div class="listing_review_info">
                                        <p><span class="review_score">4.0/5</span> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                                           (5 Reviews) </p>
                                        <!-- <p class="listing_map_m"><i class="fa fa-map-marker"></i> <?php echo $place ?></p> -->
                                    </div>

                                    <input type="hidden" name="cid" value="<?php echo $cid?>">
                                    <input type="hidden" name="lid" value="<?php echo $lid?>">
                                    <!-- <input type="hidden" name="fromdate" value="<?php echo $fromdate?>" >  -->
                                   <!--  <input type="hidden" name="todate" value="<?php echo $todate?>" > -->
                                   <!--  <input type="hidden" name="palce" value="<?php echo $place?>" >  -->
                                    
                                    <button type="submit"   class="btn btn-default">View Details</button>
                                   </form>
                                </div>
                            </div>
                        </div>   
                    <?php }} ?>
            
    <!--    <nav class="pagination_nav col-md-12   ">
                  <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2 </a></li>
                    <li><a href="#">3 </a></li>
                    <li><a href="#">4 </a></li>
                    <li><a href="#">5 </a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                  </ul>
                </nav>  --> 
    </div>
</section>
<!-- /Listings -->

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
    
         include('guest_footer.php');

?>