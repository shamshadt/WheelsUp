<!DOCTYPE HTML>
<head>
<title>Concept | Portfolio</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link rel="stylesheet" href="<?php echo base_url('assets/userr/css/http _fonts.googleapis.com_css family=Quicksand.css" type="text/css')?>">

<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo base_url('assets/userr/css/style.css" type="text/css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/userr/menu/css/simple_menu.css" type="text/css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/userr/css/nivo-slider.css" type="text/css')?>">


<!-- JS Files -->
 <script src="<?php echo base_url('assets/userr/js/jquery.min.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/custom.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/slides/slides.min.jquery.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/cycle-slider/cycle.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/nivo-slider/jquery.nivo.slider.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/tabify/jquery.tabify.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/prettyPhoto/jquery.prettyPhoto.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/twitter/jquery.tweet.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/scrolltop/scrolltopcontrol.js')?>"></script> 

<script src="<?php echo base_url('assets/userr/js/portfolio/filterable.js')?>"></script>


<script src="<?php echo base_url('assets/userr/js/modernizr/modernizr-2.0.3.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/easing/jquery.easing.1.3.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/kwicks/jquery.kwicks-1.5.1.pack.js')?>"></script>

<script src="<?php echo base_url('assets/userr/js/swfobject/swfobject.js')?>"></script> 



<!-- FancyBox -->
<link rel="stylesheet" href="<?php echo base_url('assets/userr/js/fancybox/jquery.fancybox.css" type="text/css')?>" media="all">

<script src="<?php echo base_url('assets/userr/js/fancybox/jquery.fancybox-1.2.1.js')?>"></script>

</head>
<body>


   


<!-- Main Menu -->

<ol id="menu">
  <li><a href="<?php echo site_url('usercontroller/viewcars')?>">Home</a>
  <li><a href="index.html">Home</a>
    <!-- sub menu -->
    <ol>
      <li><a href="nivo.html">Nivo Slider</a></li>
      <li><a href="ei-slider.html">EI Slider</a></li>
      <li><a href="fullscreen-gallery.html">Fullscreen Slider</a></li>
      <li><a href="image-frontpage.html">Static Image</a></li>
    </ol>
  </li>
  <!-- end sub menu -->
  <li><a href="#">Pages</a>
    <!-- sub menu -->
    <ol>
      <li><a href="magazine.html">Magazine</a></li>
      <li><a href="blog.html">Blog</a></li>
      <li><a href="full-width.html">Full Width Page</a></li>
      <li><a href="columns.html">Columns</a></li>
    </ol>
  </li>
  <!-- end sub menu -->
  <li><a href="elements.html">Elements</a></li>
  <li><a href="#">Galleries</a>
    <!-- sub menu -->
    <ol>
      <li><a href="gallery-simple.html">Simple</a></li>
      <li><a href="portfolio.html">Filterable</a></li>
      <li><a href="gallery-fader.html">Fade Scroll</a></li>
      <li><a href="video.html">Video</a></li>
      <li class="last"><a href="photogrid.html">PhotoGrid</a></li>
    </ol>
  </li>
  <!-- end sub menu -->
  <li><a href="contact.html">Contact</a></li>
</ol>
<div id="container">
  <div id="site_title"><a href="index.html"><img src="img/logo.png" alt=""></a></div>
  <div id="portfolio">
    <ul id="filterable">
      <li class="first">
        <h5>Sort by:</h5>
      </li>
      <li class="current"><a class="all" href="#all">All</a></li>
      <li><a class="web" href="#web">Webdesign</a></li>
      <li><a class="logos" href="#logos">Logo</a></li>
      <li><a class="branding" href="#branding">Branding</a></li>
      <li><a class="video" href="#video">Video</a></li>

      <li><a class="mangos" href="#mangos">mango</a></li>
      


      
    </ul>

   
    <!--END filtering-nav-->
    <div class="portfolio-container" id="columns">
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
                                          $lock=$row->centerlock  ;


                                          $regno=$row->regno;
                                          $cimage=$row->cimage;
                                          $regimage=$row->regimage;
                                          $date=$row->date;
                                          $cstatus=$row->cstatus;
                                          ?>
                                            
                                              
    <div class="one-half">                                  
      <ul>
         

            <li class="one-fourth web">

     
    
            </br></br></br>
              <p> <a title="Caption Text1111" href=" <?php echo base_url('images/carimages/').$cimage;?>" class="portfolio-item-preview" data-rel="prettyPhoto">
                <img src="<?php echo base_url('images/carimages/').$cimage;?>" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
                 
              <h4><a href="#"><?php echo "$model" ?></a></h4>
              

              
       
           
      
             
        
            </li>
        </div>

         <div class="one-half">
    <div class="heading_bg">
      <h2>One half</h2>
    </div>
    <p>Perquiramus atque ut casus tui ex quae ad te ad suis caelo dicit hoc. Tempore percussus ait est amet consensit cellula rei civibus in modo ad nomine. Navibus celebrent duo dominus Lampsacenus tu bestias terras navis cupit quae vero quo. A his domino vias multis miraculum manibus individuationis quae ad suis ut diem obiecti invidunt cum magna duobus auro purpurea vobis.</p>
  </div>



     
         <!-- 
        <li class="one-fourth logos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Logo Design</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>

         <li class="one-fourth mangos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Mango Design</a></h4>
          <p> Mangos </p>
        </li>

        <li class="one-fourth logos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Logo Design</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>

         <li class="one-fourth mangos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Mango Design</a></h4>
          <p> Mangos </p>
        </li>
        <li class="one-fourth logos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Logo Design</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>

         <li class="one-fourth mangos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Mango Design</a></h4>
          <p> Mangos </p>
        </li> -->


        <!-- <li class="one-fourth video">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Watch Video</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth web">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Wordpress Master</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth logos">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Endless Logo Design</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth web">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Worpdress Widgets</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth web">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Magento Development</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth web">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Joomla Shopping</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth branding">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">T-Shirts Designs</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth video">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Youtube Video</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth branding">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Brand Everything</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li>
        <li class="one-fourth video">
          <p> <a title="" href="img/demo/slide_2.jpg" class="portfolio-item-preview" data-rel="prettyPhoto"><img src="img/portfolio/portfolio-img-01.jpg" alt="" width="210" height="145" class="portfolio-img pretty-box"></a> </p>
          <h4><a href="#">Another Video</a></h4>
          <p> Lorem ipsum dolor sit amet, tollite fit manibus individuationis omnibus civitas ad quia. </p>
        </li> -->
      </ul>
       <?php } ?>


      <!--END ul-->
    </div>

    <!--END portfolio-wrap-->
  </div>
  <div style="clear:both; height: 40px"></div>

</div>

<!-- close container -->
<div id="footer">
  <!-- First Column -->
  <div class="one-fourth">
    <h3>Useful Links</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
      Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->



</body>



</html>