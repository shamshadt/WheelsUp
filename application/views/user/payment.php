<?php
$CI =& get_instance();
$a=$CI->sessionin(2) ;
if($a==1)
    {

        if($cid) //javasscript resubmisson ozhivakunulla code kodukumbo nammal oru pagilek post vazhi ayacha values refresh chydhaal kitoola... adh kittan vendiyaan
             {


        ?>




<html>
<head>
 

 <link rel="stylesheet" href="<?php echo base_url('assets/user/paymentpage/bootstrap.min.css" type="text/css')?>">

 <link rel="stylesheet" href="<?php echo base_url('assets/user/paymentpage/font-awesome.min.css" type="text/css')?>">

  <script src="<?php echo base_url('assets/user/paymentpage/bootstrap.min.js')?>"></script>

  <script src="<?php echo base_url('assets/user/paymentpage/jquery-1.11.1.min.js')?>"></script>

   <script src="<?php echo base_url('assets/user/paymentpage/jquery.validate.min.js')?>"></script>

   <script src="<?php echo base_url('assets/user/paymentpage/jquery.jquery.payment.min.js')?>"></script>




<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"> </script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>  -->
<div style="background:#004eff">
<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</head>

<body background=#004eff style="overflow: hidden">
<div class="container" style="padding-top:5%;;padding-bottom:5%">
    <div class="row"  style="padding-left:30%">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-7">


            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box" style="padding:10px">
                <div class="panel-heading display-table" >
                    <div class="row display-tr"  >
                        <h3 class="panel-title display-td" align=left style="font-size:25px"><b>Payment Details</b></h3> 
                        <div class="display-td" >
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                   
                     <!--  <form   action="<?php echo site_url('usercontroller/bookingdetailsinsert') ?>"  class="cv-form" method="post" onsubmit="return"> -->
                       <form   action="<?php echo site_url('usercontroller/payment') ?>"  class="cv-form" method="post" onsubmit="return">

                      <div class="row">
                          <div class="col-xs-12">
                              <div class="form-group">
                                  <label for="cardNumber">Bank</label>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                    <select class="form-control" autofocus name="banktype">
                                      <option value="FCC">Federal Bank Credit Card</option>
                                      <option value="FDC">Federal Bank Debit Card</option>
                                      <option value="OCC">Other Bank Creadit Card</option>
                                      <option value="ODC">Other Bank Debit Card</option>
                                    </select>
                                  </div>
                              </div>
                          </div>
                      </div>


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        <input
                                            type="tel"
                                            
                                            name="cardnumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            
                                            class="cv-atm form-control" cv-message="Invalid Input"
                                        />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <div class="col-xs-6 col-md-6">
                                    <select name="month" class="form-control">
                                      <option value="Jan" >Jan</option>
                                      <option value="Feb" >Feb</option>
                                      <option value="Mar" >Mar</option>
                                      <option value="Apr" >Apr</option>
                                      <option value="May" >May</option>
                                      <option value="Jun" >Jun</option>
                                      <option value="Jul" >Jul</option>
                                      <option value="Aug" >Aug</option>
                                      <option value="Sept" >Sept</option>
                                      <option value="Oct" >Oct</option>
                                      <option value="Nov" >Nov</option>
                                      <option value="Dec" >Dec</option>
                                    </select>
                                  </div>
                                  <div class="col-xs-6 col-md-6">
                                  <?php
                                    $earliest_year = 2040;
                                    ?>
                                    <select name="year" class="form-control">
                                    <?Php
                                     foreach (range(date('Y'), $earliest_year) as $x)
                                      { ?>
                                    <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                  <?php } ?>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CVV</label>
                                    <input
                                        type="tel"
                                        class="cv-number form-control" cv-message="Invalid Input"
                                        name="cardCVV"
                                        placeholder="CVV"
                                        autocomplete="cc-csc"
                                        maxlength="3"
                                       
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Name</label>
                                    <input type="text"  name="holdername" onkeyup="this.value = this.value.toUpperCase();" placeholder="Card Holder Name" class="cv-name form-control" cv-message="Invalid Input" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                  <div align=left class="col-xs-6">  <label style="font-size:14px"></label> </div>
                                  <div align=right class="col-xs-6">  <label style="font-size:20px"> Total Amount ₹<?php echo $tamount ?>  </label> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                              <!-- <input type="hidden" name="amount" id="amount" value="<?php echo $totalamount ?>">
                              <input type="hidden" name="seatid" id="seatid" value="<?php echo $seatid ?>">
                              <input type="hidden" name="seatname" id="seatname" value="<?php echo $seatname ?>"> -->

                              <input type="hidden" name="fromdate" value="<?php echo $fromdate?>" > 
                                    <input type="hidden" name="todate" value="<?php echo $todate?>" >
                                    <input type="hidden" name="cid" value="<?php echo $cid?>" >
                                    <input type="hidden" name="lid" value="<?php echo $lid?>" >
                                    <input type="hidden" name="place" value="<?php echo $place?>" >



                                <input class="subscribe btn btn-success btn-lg btn-block" type="submit" value="Payment">
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CREDIT CARD FORM ENDS HERE -->


        </div>
</div>
</body>
</html>



<?php
 include('user_footer.php');




 //post vazhi kodtha values close cheyyan
       }  
       else
       {
        $CI->home();
       }
  //post vazhi kodtha values close cheyyan -----up to this   







    }
 
else
    {

        $CI->index();


    }

?>
