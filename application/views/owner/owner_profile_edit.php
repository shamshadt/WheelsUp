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
                                                            $oid=$row->oid;
                                                            $name=$row->oname;
                                                            $email=$row->oemail;
                                                            $mobile=$row->omobile;
                                                            $adhar=$row->oadhar;
                                                            $place=$row->pname;
                                                            
                                                            $gender=$row->gender;

                                                            $status=$row->status;
                                                            $profile=$row->oprofile;
                                                            
                                                          
                                                            ?>

                                    <div class="col-md-4">
                                        <div class="profile-img">
                                            <img src="<?php echo base_url('images/owner_profile_pic/').$profile; ?> "   class="avatar" alt="" style=" border: solid black 1px ; border-radius: 10px  " />
                                            <div class="file " style=" font-size: 80% ;">
                                             
                                            <form action="<?php echo site_url('ownercontroller/owner_profile_update') ?>" method="post" enctype="multipart/form-data">  
                                                <input class="file-upload " id="profilepic" accept=".png, .jpg, .jpeg, .JPG" name="profilepic" type="file" style="font-size: 120%; background-color:#ffffff ">
                                            </div>
                                                
                                        </div>
                                    </div> 



                                                            
                                                        
                                    <div class="col-md-8">
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
                                                            <div class="col-md-4">
                                                                <label >Name<font color="red">*</font></label>
                                                            </div>

                                                             <div class="col-md-8">
                                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="name" name="name" value="<?php echo $name ?>" class="form-control" required="" type="text"></div>
                                                             </div>
                                                        </div>  <br>

                                                         <div class="row">
                                                            <div class="col-md-4">
                                                                <label >Email</label>
                                                            </div>

                                                             <div class="col-md-8">
                                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-send"></i></span><input id="email" name="email" value="<?php echo $email ?>" class="form-control" required="" type="text" readonly></div>
                                                             </div>
                                                        </div>  <br>

                                                         <div class="row">
                                                            <div class="col-md-4">
                                                                <label >Mobile <font color="red">*</font></label>
                                                            </div>

                                                             <div class="col-md-8">
                                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span><input id="phone" name="phone" value="<?php echo $mobile ?>" class="form-control" required="" type="text"></div>
                                                             </div>
                                                        </div><br>  

                                                         <div class="row">
                                                            <div class="col-md-4">
                                                                <label >Aadhar No</label>
                                                            </div>

                                                             <div class="col-md-8">
                                                                <div class="input-group"><span class="input-group-addon"><i class="fa fa-location-arrow"></i></span><input id="adhar" name="adhar" value="<?php echo $adhar ?>" class="form-control" required="" type="text" readonly></div>
                                                             </div>
                                                        </div>  <br>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label >Place </label>
                                                            </div>

                                                             <div class="col-md-8">
                                                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span><input id="place" name="place" value="<?php echo $place ?>" class="form-control" required="" type="text" readonly></div>
                                                             </div>
                                                        </div>                                                 





                                                       
                                                       
                                            </div>



                                            <?php  } ?>
                                    












                                    </div><br>
                                   

                              

                                   
                                    <div style="padding-left: 68%">
                                         <input type="hidden" name="oid" value="<?php echo $oid ?>" > 
                                        <input type="submit" class="btn btn-lg btn-primary" name="btnAddMore" value="Update Profile"  />
                                    </div>
                                
                                </div>
                                
        </div>
    </div> 
         
</div>
</form>


                            <script src="<?php echo base_url('assets/user/js/jquery.min.js')?>"></script> 


<script>
  $(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
  });
  </script>


<?php
    
         include('owner_footer.php');

    }

else
    {

        $CI->index();


    }

?>