<?php
$CI =& get_instance();
$a=$CI->sessionin() ;
if($a==1)
	{

?> 

		<!-- <div align="center" class="col-xs-3"><a href="<?php echo site_url('controller/logout')?>" ><button class="header_button">Logout</button></a></div> -->

		<!-- <?php
		
		$foo = $this -> session -> userdata('email');
		echo $foo;


		foreach($dis as $row)
		{
			$fname=$row->fname;
			$address=$row->address;
			$gender=$row->gender;
			$email=$row->email;
			$phone=$row->phone;
			
		}

		echo $fname; 


		?> -->



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title>WheelsUp</title>
<meta name="description" content=""/>
<meta name="keywords" content="Myles Search Results"/>
<meta content='index,follow' name=''>


	

<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/responsive.css')?>" type="text/css">


<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/bootstrap.min.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/angular-material.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/angular-material.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/myles.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/homefooter.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/jquery.datetimepicker.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/jquery.mCustomScrollbar.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/jquery-ui.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/al-style.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/responsive.7803.css')?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url('assets/user_home/css/font-awesome.min.7803.css')?>" type="text/css">



<!-- <link rel="stylesheet" type="text/css" href="../css/responsive.css">
<link rel="stylesheet" href="../../css/bootstrap.min.7803.css"/>
<link rel="stylesheet" href="../../css/angular-material.7803.css"/>
<link rel="stylesheet" href="../../css/myles.7803.css"/>
<link rel="stylesheet" href="../../css/homefooter.7803.css"/>
<link rel="stylesheet" href="../../css/jquery.datetimepicker.7803.css"/>
<link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.7803.css"/>
<link rel="stylesheet" href="../../css/jquery-ui.7803.css"/>
<link rel="stylesheet" href="../../css/al-style.7803.css"/>
<link rel="stylesheet" href="../../css/responsive.7803.css"/>
<link rel="stylesheet" href="../../css/font-awesome.min.7803.css"/> -->


<script src="<?php echo base_url('assets/user_home/js/jquery.7803.js')?>" ></script>
<script src="<?php echo base_url('assets/user_home/js/jquery-ui.7803.js')?>" ></script>
<script src="<?php echo base_url('assets/user_home/js/myles.7803.js')?>" ></script>
<script src="<?php echo base_url('assets/user_home/js/jquery.datetimepicker.7803.js')?>" ></script>
<script src="<?php echo base_url('assets/user_home/js/jquery.mCustomScrollbar.concat.min.7803.js')?>" ></script>
<script src="<?php echo base_url('assets/user_home/js/bootstrap.min.7803.js')?>" ></script>


<!-- <script src="../../js/jquery.7803.js"></script>
<script src="../../js/jquery-ui.7803.js"></script>
<script src="../../js/myles.7803.js"></script>
<script src="../../js/jquery.datetimepicker.7803.js"></script>
<script src="../../js/jquery.mCustomScrollbar.concat.min.7803.js"></script>
<script src="../../js/bootstrap.min.7803.js"></script> -->

</head>
<body>

		<?php
			include ('user_header.php');
		?>
<!-- <div style="padding-top: 50px; "></div> -->
<div class="bodyPart">
<div id="nocarfoundid" class="errorClass bggColor" style="display: none;">Sorry, we do not have any car available matching your search criteria.</div>
<span id="carnotavdiv" style="color:red"></span>
<center></center>
<div class="container al-contain">
<div class="row Product_Box">
<div class="saveloderSearch" id="saveloderSearch"><img src="../../img/32.gif" alt="loading" data-pagespeed-url-hash="790819062" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></div>
<div class="mylesContaniner searchPage">
<div id="sortingdivfornormal">
<form></form>


<?php
						// include '../includes/config.php';
						// $sel = "SELECT * FROM cars WHERE status = 'Available'";
						// $rs = $conn->query($sel);
						// while($rws = $rs->fetch_assoc())

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

<div class="col-sm-4 car-al sgle1 toogle1 " locactionids="375:463" pricesort="24140" namesort="Toyota Etios" sits="5" fuel="Diesel" transmission="trans0" carcat="Sedan" id="carbox_1" cldiv="showMe1" indicatedprice="24140:31938:45836">
<div class="HomeP_carBr ">
<div class="HomeP_carTextP carTextP">
<ul class="carName">
<li> <?php echo $cname;?> </li>
</ul>
</div>
<div class="HomeP_car_box">
<div class="col-sm-6 col-md-6 borderRight">
<img class="carBr_img" src=" " data-pagespeed-url-hash="4126279522" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/>
</div>
<div class="col-sm-6 col-md-6">
<ul class="HomeP_carAbt">
<li>
<span><img alt="Transmission" title="Transmission" src="../../images/am-icon.png" data-pagespeed-url-hash="3877600223" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>Manual
</li>
<li><span><img alt="Luggage" title="Luggage" src="../../images/luggage-icon.png" data-pagespeed-url-hash="1602192865" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>2 Luggage</li>
<li><span><img src="../../images/seater-icon.png" alt="" data-pagespeed-url-hash="1874506489" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></span>5 Seater </li>
<li class="HseaterDiesel"><span><img src="../../images/diesel-icon2.png" alt="" data-pagespeed-url-hash="1001693515" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
Diesel
</span></li>
<li>
<img style="margin-right:3px;" src="../../images/fuel-icon.png" alt="" data-pagespeed-url-hash="1748861133" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
Full tank to full tank
</li>
</ul>
</div>
<div class="clr"></div>
</div>
<div class="BorderLine"></div>
<div class="m_package">
<div class="col-sm-6 col-md-6">
<span class="chooseHdn">Choose Package</span>
</div>
<div class="col-sm-6 col-md-6">
<div class="sdw">Security Deposit
<a href="javascript:void(0);" class="infoBtn">
<svg width="13" fill="#878787" version="1.1" x="0px" y="0px" viewBox="0 0 512 640" enable-background="new 0 0 512 512" xml:space="preserve"><g><path d="M256,2C115.7,2,2,115.7,2,256c0,140.3,113.7,254,254,254s254-113.7,254-254C510,115.7,396.3,2,256,2z M256,459.1   C144,459.1,52.9,368,52.9,256C52.9,144,144,52.9,256,52.9c112,0,203.1,91.1,203.1,203.1C459.1,368,368,459.1,256,459.1z"/><path d="M256,103.9c-14.1,0-25.5,11.4-25.5,25.5c0,14.1,11.4,25.5,25.5,25.5s25.5-11.4,25.5-25.5   C281.5,115.3,270.1,103.9,256,103.9z"/><path d="M256,205.7c-14.1,0-25.5,11.4-25.5,25.5V384c0,14.1,11.4,25.5,25.5,25.5s25.5-11.4,25.5-25.5V231.2   C281.5,217.1,270.1,205.7,256,205.7z"/></g></svg>
<div class="tooltip">
<div class="tooLtrip_subBox">
<span class="sdwhdn">Security Deposit</span>
<ul>
<li>
<span class='sebox'>Refundable Security Deposit :<span class="refundableAmount"><?php echo $rws['sec_deposit'];?>-</span>
</span>
</li>
</ul>
</div>
<div class="arrow_down"> </div>
</div>
</a>
</div>
</div>
<div class="clear"></div>
<div class="kmsBox col-sm-12 col-md-12">
<div class="kmsScroll owl-carousel owl-theme">
<div class="item">
<div id="highlighterid0" class="kmsBoxin  mrgLft0 active_kms  highlighterclass0" ">
<svg width="14" fill="#575757" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g>
<path d="M23.1,19.6h22.8c4.7,0,8.8,3,10.4,7.4H23.1v9.9h33.2c-1.6,4.4-5.8,7.4-10.4,7.4h-28l43.6,46.3l6.9-7.1L40.9,54.4h5.5   c9.9-0.3,18.1-7.7,20.3-17.3h13.7v-9.9H66.6c-0.5-2.7-1.6-5.2-3-7.4h16.7V10H23.1V19.6z"/></g></svg>
<!-- <?php echo $rws['day_rate'];?> --> filllllll - Per Day <span>55 - Kms Free</span>
</div>
</div>

</div>
<div class="clear"></div>
</div>
<div class="additionalBox">


</div>
</div>

<div class="divsublocation_error" id="sublocation_error0"></div>
<div class="HomeP_btnBox ">
<div class="Hcenter">
<!-- <a href="book_car.php?id=<?php echo $rws['car_id'] ?>"> -->
<button class="H_Button" type="button" type="button" >Book This Car</button></a>
</div>
</div>
</div>
</div>
<form>
</form>
<?php
}
?>


			








		
		
			

	

			
		

<?php
	}

else
	{

		$CI->index();


	}

?>

