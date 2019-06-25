

<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {

        include('admin_header.php');


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
	
   	
 <style>
* {
  box-sizing: border-box;
}

.zoom {
  padding: 0px;
  background-color: ;
  transition: transform .2s;
  
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(3); 
}
</style>






   
</head>
<body>


																				<?php
																			  		if(!$list)
																			  		{
																			  			echo '<div  style="padding-top: 9%; padding-left: 	35%" >';
																			  			echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:36px;color:#FF0000" >No Car Requests...!!</h1></center>';
																			  			echo '</div>';
																			  		}
																			  		else
																			  		{
																			 	?>

	

	
        
        <h5>   <font color="green"><?php echo $this->session->flashdata('Update_sucess');  ?> </font></h5>
			
			<!-- Listings -->
			<!-- <div  style="padding-left: 15%" > -->
				<div class="dashboard-list-box" style="width: 98%; padding-left:16%; padding-top:3%;">
					<center>	<h4 style="width: 100%">Added Cars</h4>  </center>

					 <div>
		                 <!-- not approved login in loginn controller --> 
		                <center> <h5>   <font size="5px" color="red"><?php echo $this->session->flashdata('Unavailiable');  ?> </font></h5>  </center>
		            </div> 
					



						
						
							
							<table   style="background-color:#fffffff" >
								
																					<tr>
																					
																						<th><font class="tblhead"><center>Model </center></th>
																						<th><font class="tblhead"><center>Name</center></th>
																						<th align="center"><font class="tblhead"><center>CarImage</center></th>
																							
																						<th><font class="tblhead"><center>Seats</center></th>
																						<th><font class="tblhead"><center>Aprice</center></th>
																						<th><font class="tblhead"><center>Rprice</center></th></h3>
																							
																						

																						<th><font class="tblhead"><center>Regno</center></th></h3>
																						<th><font class="tblhead"><center>Regimage</center></th></h3>
																						<th><font class="tblhead"><center>Date </center></th></h3>
																						
																						<th style="width: 18%" ><font class="tblhead" ><center>Action  </center></th></h3>
																						<th  ><font class="tblhead"><center>Status </center></th></h3>
																						

																						
																					</tr>



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
																					$lock=$row->centerlock	;


																					$regno=$row->regno;
																					$cimage=$row->cimage;
																					$regimage=$row->regimage;
																					$date=$row->date;
																					$cstatus=$row->cstatus;

																						
																							
																				?>

																					<form action="<?php echo site_url('controller/carsviewchange')?>" method="post" name="userlist">
																					<tr>
																					<input type="hidden" name="cid" value="<?php echo $cid?>">
																					<input type="hidden" name="cstatus" value="<?php echo $cstatus?>">

																					
																					<td ><?php echo $model;?></td>
																					<td ><?php echo $name;?></td>
																					<td class="list-box-listing-img"><div class="zoom"><a><img src="<?php echo base_url('images/carimages/').$cimage;?>" ></a></div></td>
																					
																					<td ><?php echo $seats;?></td>
																					<td ><?php echo $aprice;?></td>
																					<td ><?php echo $rprice;?></td>
																					
																					<td ><?php echo $regno;?></td>
																					<td class="list-box-listing-img"><div class="zoom"><a><img src="<?php echo base_url('images/regimages/').$regimage;?>" ></a></div>
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

																					</td>
																					<td ><?php echo $date;?></td>
																					
																					<td >
																						<input type="submit" name="same" value="Edit" class="btn btn-success">

																						<input type="submit" name="same" value="Remove" class="btn btn-dangers">
																					</td>
																					
																					<td>		
																						 <?php
										                                                    if($cstatus==0)
										                                                    {
										                                                    echo '<input type="submit" name="same" value="Availiable" class="btn btn-danger">';
										                                                    }
										                                                    else
										                                                    {
										                                                    echo '<input type="submit" name="same" value="Unavailiable" class="btn btn-success">';
										                                                    }
										                                                    ?>
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

        include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>









































