
<?php
$CI =& get_instance();
$a=$CI->sessionin(2) ;
if($a==1)
    {

        include('user_header.php');
             

        ?> 
<head>


	<link rel="stylesheet" href="<?php echo base_url('assets/dashboardasset/css/navtabs.css" type="text/css')?>">


	<!-- <script > $(function() {
			$('.pop').on('click', function() {
				$('.imagepreview').attr('src', $(this).find('img').attr('src'));
				$('#imagemodal').modal('show');   
			});		
	});
	</script> --> 
</head>
<body>


																				<?php
																			  		if(!$booking)
																			  		{
																			  			echo '<div  style="padding-top: 9%; padding-left: 	1%" >';
																			  			echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:36px;color:#FF0000" >No Cars  Booked...!!</h1></center>';
																			  			echo '</div>';
																			  		}
																			  		else
																			  		{
																			 	?>

	

	
        
       <!--  <h5>   <font color="green"><?php echo $this->session->flashdata('Update_sucess');  ?> </font></h5> -->
			
			<!-- Listings -->
			<!-- <div  style="padding-left: 15%" > -->
				<div class="dashboard-list-box" style="width: 98%; padding-left:2%; padding-top:3%;">
					<center>	<h4 style="width: 100%">Booking Status</h4>  </center>

					 <div>
		                 <!-- not approved login in loginn controller --> 
		                <center> <h5>   <font size="5px" color="red"><?php echo $this->session->flashdata('Unavailiable');  ?> </font></h5>  </center>
		            </div> 
					



						
						
							
							<table   style="background-color:#fffffff" >
								
																					<tr>
																						<th><font class="tblhead"><center>User Name</center></th>
																						<th><font class="tblhead"><center>Email</center></th>
																						<th><font class="tblhead"><center>Mobile</center></th>
																						<th align="center"><font class="tblhead"><center>Car Image</center></th>
																						<th><font class="tblhead"><center>Car Model </center></th>
																						<th><font class="tblhead"><center>CAr Name</center></th>
																						
																						<th><font class="tblhead"><center>Aprice</center></th>
																						<th><font class="tblhead"><center>Rprice</center></th></h3>
																						
																						<th><font class="tblhead"><center>Place</center></th>
																						<th><font class="tblhead"><center>Pickup </center></th>
																						<th><font class="tblhead"><center>Drop-off</center></th>
																						<th><font class="tblhead"><center>Cancel Booking</center></th>
																						

																							
																						

																						
																						
																						
																						

																						
																					</tr>



																					<?php
																					foreach($booking as $row)
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
																					$lock=$row->centerlock	;


																					$regno=$row->regno;
																					$cimage=$row->cimage;
																					$regimage=$row->regimage;
																					$date=$row->date;
																					$cstatus=$row->cstatus;

																					$email=$row->email;
																					$username=$row->fname;
																					$mobile=$row->phone;

																					$fromdate=$row->fromdate;
																					$todate=$row->todate;
																					$place=$row->pname;

																					$bookingid=$row->bid;



																						
																							
																				?>

																					<form action="<?php echo site_url('usercontroller/cancel_booking')?>" method="post" name="userlist">
																					<tr>
																					<input type="hidden" name="cid" value="<?php echo $cid?>">
																					<input type="hidden" name="cstatus" value="<?php echo $cstatus?>">


																					<td ><center><?php echo $username;?></td></center>
																					<td ><center><?php echo $email;?></td></center>
																					<td ><center><?php echo $mobile;?></td></center>
																					<td class="list-box-listing-img"><a><img src="<?php echo base_url('images/carimages/').$cimage;?>" ></a></td>
																					<td ><?php echo $model;?></td>
																					<td ><?php echo $name;?></td>
																					
																					
																					<td ><?php echo $aprice;?></td>
																					<td ><?php echo $rprice;?></td>
																					<td ><?php echo $place;?></td>
																					<td ><?php echo $fromdate;?></td>
																					<td ><?php echo $todate;?></td>
																					
																					
																					
																					<!-- <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																					  <div class="modal-dialog" data-dismiss="modal">
																					    <div class="modal-content"  >              
																					      <div class="modal-body">
																					      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																					        <img src="<?php echo base_url('images/regimages/').$cimage;?>" class="imagepreview" style="width: 50%;" >
																					      </div> 
																					   
																					          
																					          
																					    </div>
																					  </div>
																					</div> -->
																					<input type="hidden" value="<?php echo $bookingid ?>" id="bookid" name="bookid">
																					<td >
																						

																						<input type="submit" name="same" value="Cancel" class="btn btn-dangers">
																					</td>
																					
																					
																					


																					
																					</tr>


																					</form>

																					<?php
																					}
																					?>

							</table>

																			<?php }?>

																			    
																				




																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							
																							

									
								
						
						





							
																		











						
					</ul>
				</div>
			</div>


		
        
	
	<!-- Content / End -->
</div>



</body>

			        			 										












































<?php

         include('user_footer.php');
}

else
    {

        $CI->index();


    }

?>









































