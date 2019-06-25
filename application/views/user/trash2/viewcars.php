<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
   
    <div id="products" class="row list-group">
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
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <img class="group list-group-image" src="<?php echo base_url('images/carimages/').$cimage;?>" alt="" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <h4><a href="#"><?php echo "$model" ?></a></h4>
                    <p class="group inner list-group-item-text">
                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?> 
    </div>
</div>
