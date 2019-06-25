

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



																				<?php
																			  		if(!$list)
																			  		{
																			  			echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:36px;color:#FF0000" >No Cars added...!!</h1></center>';
																			  		}
																			  		else
																			  		{
																			 	?>
																<div align="center" style="font-size:18px;color:#000000;width:100%;height:auto; margin-top: 5%" >
																	<table border="5" class="table table-hover col-xs-10" style="background-color:#1351;margin-left:1%;border:5px  solid">
																		<h5>   <font color="green"><?php echo $this->session->flashdata('Update_sucess');  ?> </font></h5>
																					<tr>
																					<th align="center"><font class="tblhead"><center>Car Name</center></th>
																						<th><font class="tblhead"><center>Car Type</center></th>
																						<th><font class="tblhead"><center>Day Rate</center></th>
																							<th><font class="tblhead"><center>Reg No</center></th>
																						<th><font class="tblhead"><center>Security Deposit</center></th>
																						<th><font class="tblhead"><center>Image</center></th>
																						<th><font class="tblhead"><center>Action</center></th></h3>
																						
																					</tr>
																				<?php
																					foreach($list as $row)
																					{
																					$cid=$row->cid;
																					$lid=$row->lid;
																					$cname=$row->cname;
																					$ctype=$row->ctype;
																					$dayrate=$row->dayrate;
																					$sec_depo=$row->sec_depo;
																					$regno=$row->regno;

																					$seatcapacity=$row->seatcapacity;
																					$cimage=$row->cimage;
																					$date=$row->date;
																					$cstatus=$row->cstatus;


																				?>

																				<form action="<?php echo site_url('controller/carsviewchange')?>" method="post" name="userlist">
																				<tr>
																				<input type="hidden" name="cid" value="<?php echo $cid?>">
																				<input type="hidden" name="cstatus" value="<?php echo $cstatus?>">
																				<td style="padding-top: 5%"><?php echo $cname;?></td>
																			    <td style="padding-top: 5%"><?php echo $ctype;?></td> 
																			    <td style="padding-top: 5%"><?php echo $dayrate;?></td>
																			    <td style="padding-top: 5%"><?php echo $regno;?></td>
																			    
																			    <td style="padding-top: 5%"><?php echo $sec_depo;?></td>
																			    <td width=30% height="30%"><a><center><img src="<?php echo base_url('images/carimages/').$cimage;?>" style="height: 25%;width: 30%"></center></a></td>
																			    
																			    <td align="center" style="padding-top: 5%">
																				
																				<input type="submit" name="edit" value="Edit" class="btn btn-success">

																				<input type="submit" name="remove" value="Remove" class="btn btn-success">

																				
																				</td>
																			    
																					






																				</form>

																			<?php
																					}
																			?>

																	</table>

																			<?php }?>
																</div>


									</div>											












































<?php

        include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>









































