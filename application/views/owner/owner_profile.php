<?php
$CI =& get_instance();
$a=$CI->sessionin(4) ;
if($a==1)
    {

        include('owner_header.php');


        ?> 








<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!--  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/userprofile.css" type="text/css')?>"> -->
<!------ Include the above in your HEAD tag ---------->
<br><br><br><br><br><br><br>
<div class="container emp-profile">
            
    <div class="row">
                                                  

                                                           <?php
                                                      foreach($dis as $row)
                                                            {
                                                            $name=$row->oname;
                                                            $email=$row->oemail;
                                                            $mobile=$row->omobile;
                                                            $adhar=$row->oadhar;
                                                            $place=$row->pname;
                                                            
                                                            $gender=$row->gender;

                                                            $status=$row->status;
                                                            $profile=$row->oprofile;
                                                            
                                                          
                                                            ?>

                                                            <form action="<?php echo site_url('ownercontroller/owner_profile_edit') ?>" method="post">
                                                            
                                    <div class="col-md-4">
                                        <div class="profile-img">
                                            <img src="<?php echo base_url('images/owner_profile_pic/').$profile; ?> "  style=" border: solid black 1px ; border-radius: 10px  " >
                                            <!--  <img src="<?php echo base_url('images/carimages/').$cimage;?>" > -->
                                            <div >  </div>
                                                
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="profile-head">
                                                    <h5>
                                                        <?php echo $name;?>
                                                    </h5>
                                                    <br>
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                </li>
                                               <!--  <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                                </li> -->
                                            </ul>
                                        </div>


                                
                                    <div class="col-md-8">
                                        <div >
                                            <div >
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Name</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $name;?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Email</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $email;?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Mobile</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $mobile;?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Aadhar No</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $adhar;?></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Place</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $place;?></p>
                                                            </div>
                                                        </div>
                                            </div>



                                            <?php  } ?>
                                    












                                    </div>
                                   

                                </div>

                                    <br>
                                    <div style="padding-left: 65%">
                                        <!-- <input type="hidden" name="email" value="<?php echo $email ?>" > -->
                                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                    </div>
                                

                                
        </div>
    </div> 
         
</div>


<?php
    
         include('owner_footer.php');

    }

else
    {

        $CI->index();


    }

?>