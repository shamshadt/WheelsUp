<!DOCTYPE html>
<html lang="zxx" class="no-js">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Car Rentals</title>

        <link rel="stylesheet" href="<?php echo base_url('assets/css/https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700.css') ?>" > 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" >
            <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" >
            <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css'); ?>" >                   
            <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>" >
            <link rel="stylesheet" href="<?php echo base_url('assets/https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'); ?>" >           
            <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
            <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">


            <!-- modal -->

            <link href="<?php echo base_url('assets/css/http _maxcdn.bootstrapcdn.com_bootstrap_4.1.1_css_bootstrap.min.css') ?>"  rel="stylesheet" id="bootstrap-css">
            <script src="<?php echo base_url('assets/css/http _maxcdn.bootstrapcdn.com_bootstrap_4.1.1_js_bootstrap.min.css') ?>"></script>
            <script src="<?php echo base_url('assets/css/https _cdnjs.cloudflare.com_ajax_libs_jquery_3.2.1_jquery.min') ?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css'); ?>">

                    <!-- VALIDATION SCRIPT -->
            <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/oh-autoval-script.js');?>"></script>
            <link href="<?php echo base_url('assets/css/oh-autoval-style.css') ?>"  rel="stylesheet" id="bootstrap-css">

<script type="text/javascript">
function usercpass() 
{
    document.getElementById('vpass1').innerHTML="";   //inner.html il kodtha password missmatch poovan vendi ,fieldil data enter chydhaal poovan vendiyaan

    var a=document.getElementById('pass').value;
    var b=document.getElementById('cpass').value;
    
    if(a!=b)
    {
       
     
      document.getElementById('vpass1').innerHTML="Password Mismatch";

        document.getElementById('cpass').focus();
        document.getElementById('cpass').value='';


    }

}

function ownercpass() 
{
    document.getElementById('vpass2').innerHTML="";   //inner.html il kodtha password missmatch poovan vendi ,fieldil data enter chydhaal poovan vendiyaan

    var a=document.getElementById('opass').value;
    var b=document.getElementById('ocpass').value;
    
    if(a!=b)
    {
       
     
     document.getElementById('vpass3').innerHTML="Password Mismatch";


        document.getElementById('ocpass').focus();
        document.getElementById('ocpass').value='';


    }

}

function drivercpass() 
{
    document.getElementById('vpass1').innerHTML="";   //inner.html il kodtha password missmatch poovan vendi ,fieldil data enter chydhaal poovan vendiyaan

    var a=document.getElementById('dpass').value;
    var b=document.getElementById('dcpass').value;
    
    if(a!=b)
    {
       
     
      document.getElementById('vpass2').innerHTML="Password Mismatch";

        document.getElementById('dcpass').focus();
        document.getElementById('dcpass').value='';


    }

}
</script>
    <!-- district ajax -->
<script>

function dist()
{
  var state=document.getElementById('state').value;
  var data=new FormData();
  data.append('sid',state);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("controller/userdistrictselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    //alert(result);
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


function ownerdist()
{
  var state=document.getElementById('ownerstate').value;
  var data=new FormData();
  data.append('sid',state);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("controller/ownerdistrictselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    //alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#ownerdistrict').html("<option value=0>"+"Select District"+"</option>");

       for(i=0;i<r.length;i++){
         $('#ownerdistrict').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}



function ownerplac()
{
  //alert("hghjb");
  var district=document.getElementById('ownerdistrict').value;
  var data=new FormData();
  data.append('did',district);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("controller/ownerplaceselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    //alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#ownerplace').html("<option value=0>"+"Select Place"+"</option>");

       for(i=0;i<r.length;i++){
         $('#ownerplace').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}


function driverdistt()
{
  var state=document.getElementById('driverstate').value;
  var data=new FormData();
  data.append('sid',state);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("controller/driverdistrictselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    //alert(result);
       var r=JSON.parse(result);
       // alert(r[0].value);
       $('#driverdistrict').html("<option value=0>"+"Select District"+"</option>");

       for(i=0;i<r.length;i++){
         $('#driverdistrict').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}


function driverplac()
{
  //alert("hghjb");
  var district=document.getElementById('driverdistrict').value;
  var data=new FormData();
  data.append('did',district);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("controller/driverplaceselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    //alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#driverplace').html("<option value=0>"+"Select Place"+"</option>");

       for(i=0;i<r.length;i++){
         $('#driverplace').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
         //$('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}


  </script>
     <!-- Validation  weather value is in dropdownbox or not -->
  <script >

    function  signup1()
    {
        document.getElementById("vuserstate").innerHTML="";
          var state=document.getElementById('state').value;
        if(state == 0)
        {
          document.getElementById("vuserstate").innerHTML="Please select your state";
          return false;
        }


        document.getElementById("vuserdist").innerHTML="";
        var dist=document.getElementById('district').value;
        if(dist == 0)
        {
          document.getElementById("vuserdist").innerHTML="Please select your district";
          return false;
        }


       
  
    }


     function  signupowner()
    {
        document.getElementById("vownerstate").innerHTML="";
          var state=document.getElementById('ownerstate').value;
        if(state == 0)
        {
          document.getElementById("vownerstate").innerHTML="Please select your state";
          return false;
        }


        document.getElementById("vownerdist").innerHTML="";
        var dist=document.getElementById('ownerdistrict').value;
        if(dist == 0)
        {
          document.getElementById("vownerdist").innerHTML="Please select your district";
          return false;
        }

        document.getElementById("vownerplace").innerHTML="";
        var dist=document.getElementById('ownerplace').value;
        if(dist == 0)
        {
          document.getElementById("vownerplace").innerHTML="Please select your place";
          return false;
        }


       
  
    }

    function  signupdriver()
    {
        document.getElementById("vdriverstate").innerHTML="";
          var state=document.getElementById('driverstate').value;
        if(state == 0)
        {
          document.getElementById("vdriverstate").innerHTML="Please select your state";
          return false;
        }


        document.getElementById("vdriverdist").innerHTML="";
        var dist=document.getElementById('driverdistrict').value;
        if(dist == 0)
        {
          document.getElementById("vdriverdist").innerHTML="Please select your district";
          return false;
        }

        document.getElementById("vdriverplace").innerHTML="";
        var dist=document.getElementById('driverplace').value;
        if(dist == 0)
        {
          document.getElementById("vdriverplace").innerHTML="Please select your place";
          return false;
        }


       
  
    }
  </script>

            

        </head>
        <body>

             <!--  <header id="header" id="home">
                <div class="container">
                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="index.html"><img src="<?php echo base_url('assets/img/wheel.png'); ?>" alt="" title="" /></a>
                      </div>
                      <nav id="nav-menu-container">
                        <ul class="nav-menu">
                          <li class="menu-active"><a href="<?php echo site_url('controller/index')?>" >Home</a></li> -->
                         <!--  <li><a href="<?php echo site_url('controller/about')?>" >About</a></li>
                          <li><a href="<?php echo site_url('controller/cars')?>" >Cars</a></li>
                          <li><a href="<?php echo site_url('controller/dashboard')?>" >Service</a></li>
                          <li><a href="<?php echo site_url('controller/dashboard')?>" >Team</a></li>    
                          <li><a href="<?php echo site_url('controller/blog-home')?>" >Blog</a></li>    
                          <li><a href="<?php echo site_url('controller/register')?>" >Contacts</a></li>
                          <li><a href="<?php echo site_url('controller/test')?>" >Test</a></li> -->
                          <!--  <li><a href="#" >About</a></li>
                          <li><a href="#" >Cars</a></li>
                          <li><a href="#" >Service</a></li>
                          <li><a href="#" >Team</a></li>    
                          <li><a href="#" >Blog</a></li>    
                          <li><a href="#" >Contacts</a></li>
                          <li><a href="#" >Test</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#myModal"     >Register</a></li> -->
                         <!--  <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                              <li><a href="<?php echo site_url('controller/blog-single')?>" >Blog Single</a></li>
                              <li><<a href="<?php echo site_url('controller/elements')?>" >Elements</a></li>
                            </ul>
                          </li>  -->                  
                        </ul>
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->


        
<section>           
<divv>
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
            
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <body bgcolor="#E6E6FA">
                <div class="container register">
                    <div class="row">
                                    <div class="col-md-3 register-left">
                                        <img src="<?php echo base_url('assets/img/registerlogo.png') ?>" alt=""/>
                                        <h3>Welcome</h3>
                                        <p><h6>Time flies,Its up to you to be the navigator!</h6></p>
                                       <a href="<?php echo site_url('controller/index')?>" > <input type="submit" name="" value="Login"/> </a>  <br/>

                                    </div>





                                            


                                        
                        <div class="col-md-9 register-right">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></br>
                                                         

                                                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#user" role="tab" aria-controls="home" aria-selected="true">User</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#driver" role="tab" aria-controls="profile" aria-selected="false">Driver</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#carowner" role="tab" aria-controls="profile" aria-selected="false">CarOwner</a>
                                                            </li>
                                                        </ul></br></br></br> 
                                                          <!-- <ul class="nav nav-tabs">
                                                            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                                                            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                                                         
                                                          </ul> -->

                            <div class="tab-content" id="myTabContent">
                                                                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
                                                                        <!-- <div class="tab-content">
                                                                            <div id="home" class="tab-pane fade in active">  -->


                                                
                                                                            <h3 class="register-heading">User Registration</h3>
                                                            

                                                                            

                                                                    


                                                            
                                                                                <div class="row register-form">
                                                                                


                                                                                        
                                                                                            <div class="col-md-12">
                                                                                                <form action="<?php echo site_url('controller/insertuser')?>" method="post" name="userreg" onSubmit="return" class="oh-autoval-form">
                                                                                                
                                                                                                    <div class="form-group">
                                                                                                        <input type="text" name="fname" id="fname"  placeholder="Name *" value=""  class="av-name form-control" av-message="Invalid Input" onkeyup="this.value = this.value.toUpperCase();"/>
                                                                                                    </div>

                                                                                                    <!-- <div class="form-group">
                                                                                                        <input type="text" name="lname" id="lname" class="av-name form-control" av-message="Invalid Input" placeholder="Last Name *" value="" />
                                                                                                    </div> -->
                                                                                                     <div class="form-group" >
                                                                                                            <input type="email" name="email" class="av-email form-control" av-message="Invalid Email" placeholder="Your Email *" value="" />
                                                                                                    </div>

                                                                                                      



                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="pass" id="pass" class="av-password form-control" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars" placeholder="Password *" value="" />
                                                                                                    </div>


                                                                                                    <p id="vpass1" style="color:red;"></P>
                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="cpass" id="cpass" class="av-required form-control" av-message="Field should not be null"  placeholder="Confirm Password *" value=""     onChange=" usercpass();"/>
                                                                                                    </div>

                                                                                                     
                                                                                                                                          
                                                                                            
                                                                                            
                                                                                                       
                                                                                                        <div class="form-group">
                                                                                                            <input type="text" minlength="10"  name="mobile" class="av-mobile form-control" av-message="Invalid Mobile" placeholder="Your Phone *" value="" />
                                                                                                        </div>

                                                                                                        <div class="form-group">
                                                                                                            <input type="text" name="adhar" class="av-aadhaar form-control" av-message="Invalid Aadhaar" placeholder="Adhar No *" value="" />
                                                                                                        </div>
                                                                                                        

                                                                                                        

                                                                                                        <div class="form-group">
                                                                                                            <div class="maxl">
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="gender" value="male" checked>
                                                                                                                    <span> Male </span> 
                                                                                                                </label> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="gender" value="female">
                                                                                                                    <span>Female </span> 
                                                                                                                </label> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="gender" value="others">
                                                                                                                    <span>Others </span>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                                                                                                  </label>
                                                                                                                  

                                                                                                                  
                                                                                                              </div>
                                                                                                          </div>

            <p id="vuserstate" style="color:red;"></P>
           <div class="form-group">
           <select class=" form-control" name="state" id="state" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" onchange="return dist()" >
                  <option value="0">Select State</option>
                  <?php
                  foreach($dis as $row)
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
                  <p id="vuserdist" style="color:red;"></P>
            <div class="form-group">
                  <select  class=" form-control"  name="district" id="district" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" >
                    <option value="0">Select District</option>
                  </select>
            </div>

             
                 

                                                                                                    <div class="form-group">
                                                                                                        <input type="text" name="place" id="place"  placeholder="Place *" value=""  class="av-name form-control" av-message="Invalid Input"   />
                                                                                                    </div>


                                                         
                                                                                               



                                                                                                         <a href="#"><input type="submit" name="submit" class="btnRegister"  value="Register" onclick="signup1()" /> </a>
                                                                                                          
                                                                                                </form>
                                                                                            </div>
                                                                                    
                                                                                </div>
                                                                </div>
                                                                

                                                







                                                 <div class="tab-pane fade show" id="driver" role="tabpanel" aria-labelledby="profile-tab">
                                                            <h3 class="register-heading">Driver Registration</h3>
                                                            <div class="row register-form">
                                                                
                                                                
                                                                            
                                                                           

                                                                            
                                                                            
                                                                            
                                                                                         <div class="col-md-12">
                                                                                            
                                                                                            <form action="<?php echo site_url('controller/insertdriver')?>" method="post" name="driverreg" onSubmit="return" class="oh-autoval-form" enctype="multipart/form-data">
                                                                                                    <div class="form-group">
                                                                                                        <input type="text" name="dname" id="dname"  placeholder="Name *" value=""  class="av-name form-control" av-message="Invalid Input"  onkeyup="this.value = this.value.toUpperCase();" />
                                                                                                    </div>

                                                                                                 

                                                                                                    <div class="form-group">
                                                                                                            <input type="email" name="demail" class="av-email form-control" av-message="Invalid Email" placeholder="Your Email *" value="" />
                                                                                                    </div>

                                                                                                    

                                                                                                    <div class="form-group">
                                                                                                            <input type="text" minlength=""  name="dmobile" class="av-mobile form-control" av-message="Invalid Mobile" placeholder="Mobile *" value="" />
                                                                                                    </div> 

                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="dpass" id="dpass" class="av-password form-control" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars" placeholder="Password *" value="" />
                                                                                                    </div>

                                                                                                    <p id="vpass2" style="color:red;"></P>
                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="dcpass" id="dcpass" class="av-required form-control" av-message="Field should not be null"  placeholder="Confirm Password *" value=""  onChange="drivercpass()" />
                                                                                                    </div>
                                                                                                                                          
                                                                                        
                                                                                        
                                                                                                        
                                                                                                        

                                                                                                    

                                                                                                        <div class="">
                                                                                                        <label>Upload verified Lisence  </label>
                                                                                                        <input type="file" name="imglicence" id="imglicence" class="av-image " av-message="Invalid Format"  placeholder=""  />
                                                                                                        </div>  </br>






            <p id="vdriverstate" style="color:red;"></P>
           <div class="form-group">
           <select class=" form-control" name="driverstate" id="driverstate" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" onchange="return driverdistt()" >
                  <option value="0">Select State</option>
                  <?php
                  foreach($dis as $row)
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
                  <p id="vdriverdist" style="color:red;"></P>
            <div class="form-group">
                  <select  class=" form-control"  name="driverdistrict" id="driverdistrict" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" onchange="return driverplac()" >
                    <option value="0">Select District</option>
                  </select>
            </div>

            <p id="vdriverplace" style="color:red;"></P>
            <div class="form-group">
              <div id="a" class="col-xs-4" >
                

                        <select  class=" form-control"  name="driverplace" id="driverplace"  >
                          <option value="0">Select Place</option>
                        </select>
                        <br>
              </div> 
            </div>
                                                                                                        

                                                                                                        

                                                                                                        <div class="form-group">
                                                                                                            <div class="maxl">
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="dgender" value="male" checked>
                                                                                                                    <span> Male </span> 
                                                                                                                </label>
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="dgender" value="female">
                                                                                                                    <span>Female </span> 
                                                                                                                </label>
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="dgender" value="others">
                                                                                                                    <span>Others </span> 
                                                                                                                </label>
                                                                                                                

                                                                                                                
                                                                                                            </div>
                                                                                                        </div>


                                                     
                                                                                           



                                                                                                     <a href="#"><input type="submit" class="btnRegister"  value="Register" onclick="signupdriver()"/> </a>
                                                                                                      </form>
                                                                                        </div>
                                                                            
                                                                
                                                            </div>


                                                 </div> 


                                                 <div class="tab-pane fade show" id="carowner" role="tabpanel" aria-labelledby="profile-tab">
                                                            
                                                         
                                                            <h3 class="register-heading">CarOwner Registration</h3>

                                                        
                                                           
                                                       



                                                            <div class="row register-form">
                                                                
                                                                
                                                                            
                                                                           

                                                                            
                                                                            
                                                                            
                                                                                        <div class="col-md-12">
                                                                                            
                                                                                            <form action="<?php echo site_url('controller/insertowner')?>" method="post" name="ownerreg" onSubmit="return" class="oh-autoval-form" enctype="multipart/form-data">
                                                                                                    <div class="form-group">
                                                                                                        <input type="text" name="oname" id="cname"  placeholder="Name *" value=""  class="av-name form-control" av-message="Invalid Input" onkeyup="this.value = this.value.toUpperCase();" />
                                                                                                    </div>

                                                                                                    <!-- <div class="form-group">
                                                                                                        <input type="text" name="lname" id="lname" class="av-name form-control" av-message="Invalid Input" placeholder="Last Name *" value="" />
                                                                                                    </div>-->

                                                                                                    <div class="form-group">
                                                                                                            <input type="email" name="oemail" class="av-email form-control" av-message="Invalid Email" placeholder="Company Email *" value="" />
                                                                                                    </div>

                                                                                                    

                                                                                                    <div class="form-group">
                                                                                                            <input type="text" minlength=""  name="omobile" class="av-mobile form-control" av-message="Invalid Mobile" placeholder="Mobile *" value="" />
                                                                                                    </div> 

                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="opass" id="opass" class="av-password form-control" av-message="Password must contain uppercase,lowercase,special chars,digits and minimum 6 chars" placeholder="Password *" value="" />
                                                                                                    </div>

                                                                                                    <p id="vpass3" style="color:red;"></P>
                                                                                                    <div class="form-group">
                                                                                                        <input type="password" name="ocpass" id="ocpass" class="av-required form-control" av-message="Field should not be null"  placeholder="Confirm Password *" value=""  onChange="ownercpass()" />
                                                                                                    </div>
                                                                                                    <div class="form-group">
                                                                                                            <input type="text" name="adhar" class="av-aadhaar form-control" av-message="Invalid Aadhaar" placeholder="Adhar No *" value="" />
                                                                                                    </div>
                                                                                                                                          
                                                                                        
                                                                                        
                                                                                                      
                                                                                                        

                                                                                                        
            <p id="vownerstate" style="color:red;"></P>
           <div class="form-group">
           <select class=" form-control" name="ownerstate" id="ownerstate" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" onchange="return ownerdist()" >
                  <option value="0">Select State</option>
                  <?php
                  foreach($dis as $row)
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
                  <p id="vownerdist" style="color:red;"></P>
            <div class="form-group">
                  <select  class=" form-control"  name="ownerdistrict" id="ownerdistrict" style="width:100%;height:100%;margin-bottom:5%;padding:4% 4%" onchange="return ownerplac()" >
                    <option value="0">Select District</option>
                  </select>
            </div>

            <p id="vownerplace" style="color:red;"></P>
            <div class="form-group">
              <div id="a" class="col-xs-4" >
                

                        <select  class=" form-control"  name="ownerplace" id="ownerplace"  >
                          <option value="0">Select Place</option>
                        </select>
                        <br>
              </div> 
            </div>
                                          

                                                                                                        

                                                                                                        <div class="form-group">
                                                                                                            <div class="maxl">
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="ogender" value="male" checked>
                                                                                                                    <span> Male </span> 
                                                                                                                </label>
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="ogender" value="female">
                                                                                                                    <span>Female </span> 
                                                                                                                </label>
                                                                                                                <label class="radio inline"> 
                                                                                                                    <input type="radio" name="ogender" value="others">
                                                                                                                    <span>Others </span> 
                                                                                                                </label>
                                                                                                                

                                                                                                                
                                                                                                            </div>
                                                                                                        </div>


                                                     
                                                                                           



                                                                                                     <a href="#"><input type="submit" class="btnRegister"  value="Register" onclick="signupowner()"/> </a>
                                                                                                      </form>
                                                                                        </div>
                                                                            
                                                                
                                                            </div>


                                                 </div>




















                            </div>

                        </div>
                                          
                                               
                                            
                    </div>

                </div>

            </div>
        </div>                           
    </div>
</divv> 
<section>


</body>

</html>