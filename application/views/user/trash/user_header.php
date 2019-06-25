<?php
$CI =& get_instance();
$a=$CI->sessionin() ;
if($a==1)
    {
?>    

        <!DOCTYPE html>
        <html lang="en">
        <head>
         <!--  <title>Bootstrap Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          
         <link rel="stylesheet" href="<?php echo base_url('assets/user_bootstrap_css/css/bootstrap.min.css')?>" type="text/css">

          <script src="<?php echo base_url('assets/user_bootstrap_css/js/jquery.min.js')?>" ></script>
          <script src="<?php echo base_url('assets/user_bootstrap_css/js/bootstrap.min.js')?>" ></script>   -->
        </head>
        <body>
       
                  <nav class="navbar navbar-inverse">
                  <div class="container-fluid" >
                    <div class="navbar-header">
                      <a class="navbar-brand" ><img src="<?php echo base_url('assets/img/wheel.png'); ?>" alt="" title="" /></a>
                    </div>
                    
                   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>&nbsp&nbsp
      <a class="nav-item nav-link" href="#">Features </a> &nbsp&nbsp
      <a class="nav-item nav-link" href="#">Pricing</a>&nbsp&nbsp
      <a class="nav-item nav-link disabled" href="#">Disabled</a>&nbsp&nbsp
    </div>
          
                  </div>
                </nav>



        </body>
        </html>



<?php
  }

else
  {

    $CI->index();


  }

?>