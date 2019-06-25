<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {

        include('admin_header.php');


        ?> 



                            

                        <!-- Content -->  
                        <div class="dashboard-content">
                            <br><br><br><br><br><br>


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

                                
                                        <div class="row">
                                            <div class="dashboard-info-box">
                                                <div class="dashboard-info color-1">
                                                     <a href="<?php echo site_url('controller/ownerapproval');?>">    <h4> <?php echo $ownerapprove; ?> </h4> <span>Owner Approval</span> </a>
                                                </div>
                                                
                                                <div class="dashboard-info color-2">
                                                    <a href="<?php echo site_url('controller/driverapproval');?>">   <h4> <?php echo $driverapprove; ?> </h4> <span>Driver  Approval</span> </a>
                                                </div>

                                                 <div class="dashboard-info color-4">
                                                    <a href="<?php echo site_url('controller/admin_userlist');?>"> <h4> <?php echo $userlist; ?> </h4>  <span>Registered Users</span></a>
                                                </div>

                                                <div class="dashboard-info color-1">
                                                    <a href="<?php echo site_url('controller/admin_ownerlist');?>"> <h4> <?php echo $ownerlist; ?> </h4>  <span>Registered Owners</span></a>
                                                </div>
                                                
                                                <div class="dashboard-info color-2">
                                                    <a href="<?php echo site_url('controller/admin_driverlist');?>"> <h4> <?php echo $driverlist; ?> </h4>  <span>Registered Drivers</span></a>
                                                </div>

                                                <div class="dashboard-info color-3">
                                                    <a href="<?php echo site_url('controller/admin_BlockedUsersLists');?>"> <h4> <?php echo $blockeduserlist; ?> </h4>  <span>Blocked Users</span></a>
                                                </div>
                                               
                                                <div class="dashboard-info color-3">
                                                    <a href="<?php echo site_url('controller/admin_BlockedOwnersLists');?>"> <h4> <?php echo $blockedownerlist; ?> </h4>  <span>Blocked Owners</span></a>
                                                </div>
                                                <div class="dashboard-info color-3">
                                                     <a href="<?php echo site_url('controller/admin_BlockedDriversLists');?>"> <h4> <?php echo $blockeddriverlist; ?> </h4> <span>Blocked Drivers</span></a>
                                                </div>
                                            </div>
                                        </div>







                                                                     <!-- Category-Slider -->
                                                                                
                                                                                    <div class="container">
                                                                                        <div id="category_slider">
                                                                                            <div class="owl-carousel owl-theme">
                                                                                             
                                                                                                
                                                                                                <div class="item">
                                                                                                    <a href="<?php echo site_url('controller/admin_addcars');?>">
                                                                                                        <div class="category_icon">
                                                                                                            <img src="<?php echo base_url('assets/adminimages/icon1.png'); ?> " alt="image">

                                                                                                        </div>
                                                                                                        <p>Add Cars</p>
                                                                                                    </a>
                                                                                                </div>
                                                                                                
                                                                                                <div class="item">
                                                                                                    <a href="<?php echo site_url('controller/admin_viewcars');?>">
                                                                                                        <div class="category_icon">
                                                                                                             <img src="<?php echo base_url('assets/adminimages/icon2.png'); ?> " alt="image">                        </div>
                                                                                                        <p>View Added Cars</p>
                                                                                                    </a>
                                                                                                </div>

                                                                                                <div class="item">
                                                                                                    <a href="<?php echo site_url('controller/admin_car_approval');?>">
                                                                                                        <div class="category_icon">
                                                                                                             <img src="<?php echo base_url('assets/adminimages/carreques.png'); ?> " alt="image">                        </div>
                                                                                                        <p>View Car Requests</p>
                                                                                                    </a>
                                                                                                </div>


                                                                                                 <div class="item">
                                                                                                    <a href="<?php echo site_url('controller/admin_booking_details');?>">
                                                                                                        <div class="category_icon">
                                                                                                             <img src="<?php echo base_url('assets/adminimages/booking.png'); ?> " alt="image">                        </div>
                                                                                                        <p>Booking Details</p>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        
                                                                                <!-- /Category-Slider -->



                        </div>








                                                    

                                                            

                                                                                       

                                                        



                            






<?php

        include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>