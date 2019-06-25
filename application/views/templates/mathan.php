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


                                                         
                                                                                               



                                                                                                         <a href="#"><input type="submit" name="submit" class="btnRegister"  value="Register"/> </a>
                                                                                                          
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

                                                                                                    <!-- <div class="form-group">
                                                                                                        <input type="text" name="lname" id="lname" class="av-name form-control" av-message="Invalid Input" placeholder="Last Name *" value="" />
                                                                                                    </div>-->

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
                                                                                                        <input type="file" name="imglicence" id="imglicence" class=" " accept=".pdf"  placeholder=""  />
                                                                                                        </div>  </br>
                                                                                                        

                                                                                                        

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


                                                     
                                                                                           



                                                                                                     <a href="#"><input type="submit" class="btnRegister"  value="Register"/> </a>
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
                                                                                                            <input type="email" name="oemail" class="av-email form-control" av-message="Invalid Email" placeholder="Your Email *" value="" />
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
                                                                                                                                          
                                                                                        
                                                                                        
                                                                                                    	
                                                                                                        

                                                                                                        

                                                                                                        <div class="">
                                                                                                        <label>Upload verified Reg Certificate </label>
                                                                                                        <input type="file" name="imgrc" id="imgrc" class=" " accept=".pdf"  placeholder="" value="" />
                                                                                                    	</div>  </br>
                                                                                                        

                                                                                                        

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


                                                     
                                                                                           



                                                                                                     <a href="#"><input type="submit" class="btnRegister"  value="Register"/> </a>
                                                                                                      </form>
                                                                                        </div>
                                                                            
                                                                
                                                            </div>


                                                 </div>




















                            </div>

                        </div>
                                          
                                               
                                            
                    </div>

                </div>