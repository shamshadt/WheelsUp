<?php
$CI =& get_instance();
$a=$CI->sessionin(3) ;
if($a==1)
    {

        include('driver_header.php');
          // if($dis) //javasscript resubmisson ozhivakunulla code kodukumbo nammal oru pagilek post vazhi ayacha values refresh chydhaal kitoola... adh kittan vendiyaan
          //    {


        ?> 








<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!--  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/userprofile.css" type="text/css')?>"> -->
<!------ Include the above in your HEAD tag ---------->
<br><br><br><br><br><br><br>
<div class="container emp-profile">

                                                  

                                                            <?php
                                                            foreach($dis as $row)
                                                            {


                                                          $name=$row->dname;
                                                          $email=$row->demail;
                                                          $phone=$row->dmobile;
                                                          $adhar=$row->imglicence;
                                                         
                                                          $gender=$row->dgender;
                                                          $status=$row->status;
                                                          $place=$row->dplace;
                                                          $pname=$row->pname;
                                                          $profile=$row->dprofile_img;
                                                          $age=$row->age;
                                                          $amount=$row->amount;
                                                            ?>

    <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
            <form action="<?php echo site_url('drivercontroller/status_change')?>" method="post" name="userlist">


                <input type="hidden" value="<?php echo $status ?>" id="status" name="status">

                                         <?php
                                            if($status==1)
                                            {
                                            echo '<input type="submit" value="Availiable" class="btn btn-danger">';
                                            }
                                            else
                                            {
                                            echo '<input type="submit" value="Unavailiable" class="btn btn-success">';
                                            }
                                            ?>
                                            </td>
                                            </tr></form>
                                         <?php
                                         
                                         ?>

                

            </form>
        </div>   
    </div>   
    <div class="row">

                                                            <form action="<?php echo site_url('drivercontroller/driver_profile_edit') ?>" method="post">
                                                            
                                    <div class="col-md-4">

                                        <div class="profile-img">
                                            <img src="<?php echo base_url('images/driver_profile_pic/').$profile; ?> "  style=" border: solid black 1px ; border-radius: 10px  " >
                                            <!-- <img src="<?php echo base_url('images/carimages/').$cimage;?>" > --> 
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
                                                                <p><?php echo $phone;?></p>
                                                            </div>
                                                        </div>
                                                       <!--  <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Lisence No</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $adhar;?></p>
                                                            </div>
                                                        </div> -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Place</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><?php echo $pname;?></p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Age</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p> &nbsp<?php echo $age;?> </p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Amount(per day)</label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p> <?php echo $amount;?> </p>
                                                            </div>
                                                        </div>
                                            </div>



                                            <?php  } ?>
                                    












                                    </div>
                                   

                                </div>

                                    <br><br>
                                    
                                    <div style="padding-left: 0%" class="col-md-8   ">
                                        <!-- <input type="hidden" name="email" value="<?php echo $email ?>" > -->
                                        <input type="submit" class="btn btn-lg btn-primary" name="btnAddMore" value="Edit Profile"/>
                                        
                                    </div>
                                

                                
        </div>
    </form>
    </div> 
         
</div>


<?php
    
         include('driver_footer.php');


    //post vazhi kodtha values close cheyyan
       // }  
       // else
       // {
       //  $CI->home();
       // }
  //post vazhi kodtha values close cheyyan -----up to this   


    }

else
    {

        $CI->index();


    }

?>