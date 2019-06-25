

<?php
$CI =& get_instance();
$a=$CI->sessionin(4) ;
if($a==1)
    {

        include('owner_header.php');


        ?> 

        						


                                 <!--  district  -->
<script>

function dist()
{
  var state=document.getElementById('state').value;
  var data=new FormData();
  data.append('sid',state);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("ownercontroller/districtselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
      console.log(result);
    //alert(result);
       var r=JSON.parse(result);
       //alert(r[0]);
       $('#district').html("<option value=0>"+"Select District"+"</option>");

       for(i=0;i<r.length;i++){
         $('#district').append("<option value="+r[i].id+">"+r[i].value+"</option>");
       }
         //$('#district').append("<option value="+result+">"+result+"</option>");
        // $('#file').append('<input id="cpic" accept=".png, .jpg, .jpeg,.JPG" name="cpic"  type="file" style="font-size: 120">');
        }
  });
}


function places()
{
  var district=document.getElementById('district').value;
  var data=new FormData();
  data.append('did',district);
  $.ajax({
    method:'post',
    url:"<?php echo site_url("ownercontroller/placeselect"); ?>",
    processData: false,
    contentType: false,
    data: data,
    success:function(result){
    // alert(result);
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
  

<script> 
   function  validatestate()
    {
        document.getElementById("vstate").innerHTML="";
          var state=document.getElementById('state').value;
        if(state == 0)
        {
          document.getElementById("vstate").innerHTML="Please select your state";
          return false;
        }


        document.getElementById("vdist").innerHTML="";
        var dist=document.getElementById('district').value;
        if(dist == 0)
        {
          document.getElementById("vdist").innerHTML="Please select your district";
          return false;
        }

        document.getElementById("vplace").innerHTML="";
        var dist=document.getElementById('place').value;
        if(dist == 0)
        {
          document.getElementById("vplace").innerHTML="Please select your Place";
          return false;
        }

       
  
    }

</script>
                         <script>
                            function Validatevno()
                            {
                                var val = document.getElementById('regno').value;
                                if (!val.match(/^[A-Z]{2}[ -][0-9]{1,2}(?: [A-Z])?(?: [A-Z]*)? [0-9]{1,4}$/))
                                {
                                    $("#vno_l").html('Provide A Valid Register Number Like KL 06 J 957..!').fadeIn().delay(4000).fadeOut();
                                    document.getElementById('regno').value = "";
                                    return false;
                                }
                                return true;
                            }
                            </script>

  
                                            
                                    </head>


                 <!-- Content -->  
                        <div class="dashboard-content">
                            <br><br><br><br><br><br>

                                            <?php
                                            if(!$dis)    //if $dis il value illengil add car  cheyyum. Value undengil  update cheyyum
                                            {
                                            ?>




                                                                           



 <div class="innercms">
<div class="container bootstrap snippet">
    <div class="row"   >
        <div class="col-sm-5"><h1></h1></div>
        <!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
    </div>
    <div class="row" >
    
        <div class="col-sm-1"><!--left col-->    
        </div>   
       
        <!--/col-3-->
        <div class="col-sm-9"  style="  background: #ffffff"  >
          <h5>   <font color="green"><?php echo $this->session->flashdata('caradded');  ?> </font></h5>
             <h5>   <font color="red"><?php echo $this->session->flashdata('regno_exist');  ?> </font></h5>
          <center>  <h3>Add Car</h3> </center><hr> </br> 

          <div class="tab-content">
            
                  <form   action="<?php echo site_url('ownercontroller/owneraddcars')?>" enctype="multipart/form-data" class="cv-form" method="post" onsubmit="return">
                    
                      
                            
                           

                     

                      
                      <div class="form-group">
                         
                          <div class="col-xs-6">


                             <label for="model"><h4>Model</h4></label> 
                              <select name="model" id="model"  class="cv-required"  cv-message="Please Select any Model">
                                                                      

                              <option value="">--select--</option>
                              <?php
                              foreach($model as $row)
                              {
                              $model_name=$row->m_name; 
                              $mid=$row->mid;
                              ?>
                              <option value="<?php echo $model_name;?>"><?php echo $model_name;?></option> 
                             
                               <?php }    ?>
                              </select> 

                              
                   
                            
                      </div>


                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Name</h4></label>
                              <input  type="text" class="cv-name form-control" cv-message="Invalid Input" name="name" id="name" value="" placeholder="name" >
                         <div id=p1></div>
                            </div>
                      </div>

                      <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="millege"><h4>Millege</h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="millege" id="millege" value="" placeholder="millege" >
                         </div>
                     </div>

                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="seats"><h4>Seats</h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="seats" id="seats" value="" placeholder="seats" >
                             <div id=p4></div> </div>
                     </div>
                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="advance_price"><h4>Advance_price</h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="aprice" id="aprice" value="" placeholder="Advance Price" >
                             <div id=p5></div> </div>
                     </div>
                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="last_name"><h4>Rent Charge</h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="rprice" id="rprice" value="" placeholder="Rent Price" >
                             <div id=p6></div> </div>
                     </div>

                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="fuel"><h4>Fuel</h4></label>
                             <select name="fuel" id="fuel" class="cv-required"  cv-message="Please select any Value" >
                             <option value="">--select--</option>
                               <option value="petrol">Petrol</option>
                               <option value="diesel">Diesel</option>
                              </select>
                              <div id=p7></div>
                         </div>
                     </div>
                      <span id="h">
                     <div class="form-group">
                         
                         <div id="a" class="col-xs-6">
                           <label for="ac"><h4>Air Condition</h4></label>
                             <select name="ac" id="ac" class="cv-required"  cv-message=" Please select any Value" >
                             <option value="">--select--</option>
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                              </select>
                              <div id=p9></div>
                         </div>
                     </div>

                     <div class="form-group">
                         
                         <div id="b" class="col-xs-6">
                           <label for="music"><h4>Music System</h4></label>
                             <select name="music" id="music"  class="cv-required"  cv-message="Select any Value" >
                             <option value="">--select--</option>
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                              </select>
                              <div id=p10></div>
                         </div>
                     </div>

                     <div class="form-group">
                         
                         <div id="c" class="col-xs-6">
                           <label for="steering"><h4>Power Steering</h4></label>
                             <select name="steering" id="steering"  class="cv-required"  cv-message="Please select any Value" >
                             <option value="">--select--</option>
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                              </select>
                              <div id=p11></div>
                         </div>
                     </div>

                     <div class="form-group">
                         
                         <div id="d" class="col-xs-6">
                           <label for="lock"><h4>Center Lock</h4></label>
                             <select name="lock" id="lock"  class="cv-required"  cv-message="Please select any Value">
                             <option value="">--select--</option>
                               <option value="Yes">Yes</option>
                               <option value="No">No</option>
                              </select>
                              <div id=p12></div>
                         </div>
                     </div>

</span>
                    <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Regno </h4></label>
                              <label style="display:nne; color:red" id="vno_l"> </label>
                              <input  type="text" class="cv-vehicle_number form-control" cv-message="Please enter the correct Register" name="regno" id="regno" value="" placeholder="Register No  eg: KL50B2702 "  onkeyup="this.value = this.value.toUpperCase();">
                         <div id=p1></div>
                            </div>
                      </div>




                     <div class="form-group">
                        <div class="col-xs-6">
                              <label for="photo"><h4>Photo:</h4></label>
                              <div id="p11"></div>
                              <input type="file" name="cimage" id="cimage"   class="cv-image text-center center-block file-upload" cv-message="Car Image" title="Image format">                 
                              </div>
                             
                        </div>
                    </div>
                        
                        <div class="form-group">
                        <div class="col-xs-6">
                              <label for="verify"><h4>RC book:</h4></label>
                              <div id="p12"></div>
                              <input type="file" name="regimage" id="regimage" class="cv-image text-center center-block file-upload" cv-message="RC  Scanned Copy" title="Choose a clear scanned copy(Image Format)" >                      
                             
                            </div>
                        </div>




                        
                        <div class="form-group">
                         
                              <div id="a" class="col-xs-6" >
                                 <label for="state"><h4>State</h4></label>
                                 <p id="vstate" style="color:red;"></P>
                                  <select  name="state" id="state"   class="cv-required form-control"  cv-message="Select any Value"  onchange="return dist()">
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

                          <div id="a" class="col-xs-6" >
                            <label for="District"><h4>District</h4></label>
                            <p id="vdist" style="color:red;"></P>

                                    <select  class=" form-control"  name="district" id="district"  onchange="return places()"  >
                                      <option value="0">Select District</option>
                                    </select>
                          </div>
                        </div>




                        <div class="form-group">

                          <div id="a" class="col-xs-6" >
                            <label for="Place"><h4>Place</h4></label>
                            <p id="vplace" style="color:red;"></P>

                                    <select  class=" form-control"  name="place" id="place"  >
                                      <option value="0">Select Place</option>
                                    </select>
                          </div>
                        </div>







                    

             
                 


                                                                                                   
          

                     
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                 <center><button style="width: 100%" class="btn btn-lg btn-success pull-right" type="submit" onclick="validatestate()"><i class="glyphicon glyphicon-ok-sign"></i> Add</button></center> 

                                
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                      <br><br>
                      
                </form>
              <!-- </div> -->
              
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
</div><!--/row-->
</div>  

                                            <?php
                                            }
                                           
                                            else
                                            {    
                                            
                                            foreach($dis as $row)
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
                                          $place=$row->pname;
                                            ?>       


<div class="innercms">
<div class="container bootstrap snippet">
    <div class="row"   >
        <div class="col-sm-5"><h1></h1></div>
        <!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div> -->
    </div>
    <div class="row" >
    
        <div class="col-sm-1"><!--left col-->    
        </div>   
       
        <!--/col-3-->
        <div class="col-sm-9"  style="  background: #ffffff"  >
          <h5>   <font color="green"><?php echo $this->session->flashdata('caradded');  ?> </font></h5>
             <h5>   <font color="red"><?php echo $this->session->flashdata('regno_exist');  ?> </font></h5>
          <center>  <h3>Update Car</h3> </center><hr> </br> 

          <div class="tab-content">
            
                  <form   action="<?php echo site_url('ownercontroller/ownerupdatecars')?>" enctype="multipart/form-data" method="post"  onSubmit="return" class="oh-autoval-form">
                    
                      
                            
                           

                     

                      
                      <div class="form-group">
                         
                          <div class="col-xs-6">


                             <label for="model"><h4>Model</h4></label> 
                              
                              <input type="text" value="<?php echo $model ?>" readonly>  
                          </div>                                     

                    
                      </div>


                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Name</h4></label>
                              <input  type="text" name="name" id="name" value="<?php echo $name ?>" readonly >
                         
                            </div>
                      </div>

                      <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="millege"><h4>Millege</h4></label>
                             <input  type="text"  name="millege" id="millege" value="<?php echo $millege ?>" readonly >
                         </div>
                     </div>

                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="seats"><h4>Seats</h4></label>
                             <input  type="text"  name="seats" id="seats"  value="<?php echo $seats ?>" readonly >
                             <div id=p4></div> </div>
                     </div>
                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="advance_price"><h4>Advance_price <font color="red">*</font> </h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="aprice" id="aprice" value="<?php echo $aprice ?>" placeholder="Advance Price" >
                          </div>
                     </div>
                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="last_name"><h4>Rent Charge <font color="red">*</font> </h4></label>
                             <input  type="text" class="cv-number form-control" cv-message="Invalid Input" name="rprice" id="rprice" value="<?php echo $rprice ?>" placeholder="Rent Price" >
                             <div id=p6></div> </div>
                     </div>

                     <div class="form-group">
                         
                         <div class="col-xs-6">
                           <label for="fuel"><h4>Fuel</h4></label>
                           <input type="text" value="<?php echo $fuel ?>" readonly>
                             
                             
                         </div>
                     </div>
                      
                    <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="name"><h4>Regno </h4></label>
                              <input  type="text"  name="regno" id="regno" value="<?php echo $regno ?>" readonly>
                         <div id=p1></div>
                            </div>
                      </div>




                     <div class="form-group">
                        <div class="col-xs-6">
                              <label for="photo"><h4>Photo <font color="red">*</font></h4></label>
                              <div id="p11"></div>
                              <input type="file" name="cimage" id="cimage"   class=" text-center center-block file-upload"  title="Image format">   </br>              
                              </div>

                             
                        </div>
                    </div>
                        
                       




                        
                        <div class="form-group">
                         
                              <div id="a" class="col-xs-6" >
                                 <label for="state"><h4>Place</h4></label>
                                <input  type="text" class=" form-control"  value="<?php echo $place ?>" placeholder="Advance Price" >
                         
             
                              </div>
                        </div>

                        
                       



                      <input type="hidden" name="cid" value="<?php echo $cid ?> ">



                    

             
                 


                                                                                                   
          

                     
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                 <center><button style="width: 100%" class="btn btn-lg btn-success pull-right" type="submit" ><i class="glyphicon glyphicon-ok-sign"></i> Update</button></center> 

                                
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                      <br><br>
                      
                </form>
              <!-- </div> -->
              
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
</div><!--/row-->
</div>










                                                                            <!-- <div id="addcars" style="padding-left:30%" >

                                                                                    <div class="col-md-6" style="background:#bdcece">

                                                                                        <div >

                                                                                                
                                                                                                 <h5>   <font color="green"><?php echo $this->session->flashdata('regno_exist');  ?> </font></h5>
                                                                                                        <h3 style="padding-left: 15%">Update Car</h3> 
                                                                                                
                                                                                                
                                                                                                <form action="<?php echo site_url('controller/adminupdatecars')?>" method="post" name="driverlist" enctype="multipart/form-data">
                                                                                                    
                                                                                                    <div class="form">

                                                                                                        <input type="hidden" name="cid" value="<?php echo $cid?>">

                                                                                                         

                                                                                                            
                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Vehicle Name <span>(Required Field)</span></label>
                                                                                                                <input type="text" class="field size1" name="car_name" required  value="<?php echo($cname); ?>"/>
                                                                                                            </p>  

                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Vehicle Make <span>(Required Field)</span></label>
                                                                                                                <input type="text" class="field size1" name="car_type" required value="<?php echo($ctype); ?>"/>
                                                                                                            </p>
                                                                                                            
                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Vehicle Day Rate <span>(Required Field)</span></label>
                                                                                                                <input type="text" class="field size1" name="day_rate" required value="<?php echo($dayrate); ?>" />
                                                                                                            </p>
                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Security Deposit<span>(Required Field)</span></label>
                                                                                                                <input type="text" class="field size1" name="sec_deposit" required value="<?php echo($sec_depo); ?>"/>
                                                                                                            </p>
                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Vehicle Image <span>(Required Field)</span></label>
                                                                                                                <input type="file" class="field size1" name="carimage"  accept=".png, .jpg, .jpeg,.JPG" />
                                                                                                            </p>
                                                                                                            <p>
                                                                                                                        
                                                                                                                <label>Vehicle Capacity<span>(Required Field)</span></label>
                                                                                                                <input type="text" class="field size1" name="capacity" required value="<?php echo($seatcapacity); ?>"/>
                                                                                                            </p>  

                                                                                                             <p>
                                                                                                                        
                                                                                                                <label>Registration No<span>(Required Field)</span></label>
                                                                                                                <input readonly type="text" class="field size1" name="regno" required value="<?php echo($regno); ?>"/>
                                                                                                            </p>  
                                                                                                        

                                                                                                    </div>

                                                                                                    
                                                                                                        
                                                                                                       
                                                                                                    
                                                                                                    
                                                                                                   

                                                                                                    <div class="buttons">
                                                                                                    


                                                                                                        <input type="submit" class="button"  value="Update" >
                                                                                                    </div>
                                                                                                    
                                                                                                </form>
                                                                                                
                                                                                        
                                                                                        
                                                                                        </div>
                                                                                    </div>                                              
                                                                            </div>  --> 


                                            <?php
                                            }
                                            }
                                            ?>






                        </div>





<?php

        include('owner_footer.php');
}

else
    {

        $CI->index();


    }

?>      