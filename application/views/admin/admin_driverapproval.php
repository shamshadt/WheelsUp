<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {


    				include('admin_header.php');

        ?> 

   <head>
   	
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


 						<!-- Content -->
					                    <div class="dashboard-content">
					                             				</br></br>
					                             				</br></br>

					                             				<H4 align="center"> <u><b> DRIVER APPROVAL </b></u> </H1>




					                             				<?php
																	if(!$driver)
																	{
																		echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No DRIVER REQUESTS...!!</h1></center>';
																	}
																	else
																	{
																?>
														



													<div align="center" style="font-size:18px;color:#000000;width:100%;height:auto; margin-top: 5%" >
															<table border="5" class="table table-hover col-xs-10" style="background-color:#1351;margin-left:1%;border:5px  solid">
															<tr >
				        
																<th align="center">Name</th>
														        <th>Email</th>
														        <th>Mobile</th>
														        <th>License</th>
														        <th>Gender</th>
														        
														        <th>Action</th>
															</tr>
															<?php
															foreach($driver as $row)
																		{
																		$name=$row->dname;
																		$email=$row->demail;
																		$mobile=$row->dmobile;
																		$license=$row->imglicence;
																   		
																    	
																		
																		$gender=$row->dgender;

																		$status=$row->status;
																		
																	
																		?>
															<form action="<?php echo site_url('controller/approvedriveraction')?>" method="post" name="driverlist">
															<tr>
															<input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
															<input type="hidden" value="<?php echo $status ?>" id="blockstatus" name="blockstatus">
															<td><?php echo $name;?></td>
													    <td width="15%"><?php echo $email;?></td>
													    <td><?php echo $mobile;?></td>
													    <td><div class="zoom"><img height="100px" src="<?php echo base_url('images/licence/').$license;?>" > </div></td>
													    <td><?php echo $gender;?></td>
													   
													    <td>
															<?php
															if($status==3) //status=3 ennaal notapprove ennan. status 3 aanengil button value approve aaakkanam
															{
															echo '<input type="submit" value="Approve" class="btn btn-success">';
															}
															elseif($status==4)  //status 4 = block
															{
															echo '<input type="submit" value="Unblock" class="btn btn-success">';
															}
															else
															{
															echo '<input type="submit" value="Block" class="btn btn-success">';
															}
															?>
															</td>
															</tr></form>



															 <?php
															}
															?>
															</table>
															</div>
													<?php }?>
									</div>







	                                    
	                           
<?php


			include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>