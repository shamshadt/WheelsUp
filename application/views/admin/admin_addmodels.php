
<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {

              include('admin_header.php');

        ?> 
 											 <?php
                                            if(!$diss)    //if $dis il value illengil add car  cheyyum. Value undengil  update cheyyum
                                            {
                                            ?> 

   </div>     			
<div style="padding-left: 30%; padding-top: 10%	">

					<div class="col-lg-8 col-md-8">
					<form class="cv-form"  action="<?php echo site_url('controller/admininsert_models')?>"  method="post" id="model"  onsubmit="return">
                    	<div class="add_listing_info">
                            <h3>Create Brand</h3>	
                            <h5>   <font color="green"><?php echo $this->session->flashdata('modeladded');  ?> </font></h5>
            				 <h5>   <font color="red"><?php echo $this->session->flashdata('model_exist');  ?> </font></h5>			
                            <div class="form-group">
                                    <label class="label-title">Brand Name</label>
                                    <input type="text"  name="model" class=" cv-name form-control" cv-message="Please Enter the Model Name">
                            </div>

	                        <div class="add_listing_info">
	                            <input type="submit" value="Submit" class="btn">
	                        </div>   
                    </form>




                    	 <?php }else { ?> 

	


                    		</div>     			
<div style="padding-left: 30%; padding-top: 10%	">
												<?php foreach ($diss as $row) 
												{
													     $model=$row->m_name;
												}	?>

																	

					<div class="col-lg-8 col-md-8">
					<form class=" cv-form "  action="<?php echo site_url('controller/admininsert_models')?>"  method="post" id="model"  onsubmit="return">
                    	<div class="add_listing_info">
                            <h3>Update Brand</h3>	
                            <h5>   <font color="green"><?php echo $this->session->flashdata('modeladded');  ?> </font></h5>
            				 <h5>   <font color="red"><?php echo $this->session->flashdata('model_exist');  ?> </font></h5>			
                            <div class="form-group">
                                    <label class="label-title">Brand Name</label>
                                    <input type="text"  value="<?php echo $model ?>"name="model" class=" cv-name form-control" cv-message="Please Enter the Model Name">
                            </div>

	                        <div class="add_listing_info">
	                            <input type="submit" value="Update" class="btn">
	                        </div>   
                    </form>
                    	

                    	 <?php } ?> 
 











<?php

        include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>