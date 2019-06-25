<?php
$CI =& get_instance();
$a=$CI->sessionin() ;
if($a==1)
	{

                  include('user_header.php');

		?> 






		<section class="listings">
		<div class="wrapper">
		<h3 style="text-decoration:underline; text-align:center;">Message Admin Here</h3>
			<ul class="properties_list">
			<form method="post">
				<table>
					<tr>
						<td style="color: #003300; font-weight: bold; font-size: 12px">Enter Your Message Here:</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>
							<textarea rows = "10" cols= "100"name="message" placeholder="Enter Message Here" class="txt"></textarea>
						</td>
					</tr>
					<tr>
						<td><button class="H_Button" type="submit" name="send">Send Message</td>
					</tr>
				</table>
			</form>
				
			</ul>
		</div>
	</section>	

		



			








		
		
			

	

			
		

<?php
	}

else
	{

		$CI->index();


	}

?>





