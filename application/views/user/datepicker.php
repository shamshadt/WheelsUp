<?php


        include('user_header.php');


        ?> 


<head>
            
            <!-- date picker -->
 <link rel="stylesheet" href="<?php echo base_url('assets/user/css/http _ajax.googleapis.com_ajax_libs_jqueryui_1.8_themes_base_jquery-ui.css" type="text/css')?>">
  <script src="<?php echo base_url('assets/user/js/date_jquery.min.js')?>"></script>
                            
<script src="<?php echo base_url('assets/user/js/date_jquery-ui.js')?>"></script> 

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="Stylesheet"type="text/css"/> -->


<script>
  $(function () {
    $("#txtFrom").datepicker({
        // numberOfMonths: 1,
        changeYear:true,
        changeMonth:true,
        minDate:'0',
        maxDate:'1m',
        onSelect: function (selected) {
            var minday = new Date(selected);
            var maxday = new Date(selected);
            minday.setDate(minday.getDate() );
            maxday.setDate(maxday.getDate() + 30);
            // alert(maxday);
            $("#txtTo").datepicker("option", "minDate", minday);
            $("#txtTo").datepicker("option", "maxDate", maxday);
        }
    });
    $("#txtTo").datepicker({
        // numberOfMonths: 1,
        changeYear:true,
        changeMonth:true,
        minDate:'0',
        maxDate:'1m',
        onSelect: function (selected) {
            var minday = new Date(selected);
            minday.setDate(minday.getDate() - 1);
        }
        
    });
});
</script>

</head>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

 <div class="form-group">
                                <div class="col-xs-6">

                                    <input type="text" id="txtFrom" name="txtFrom"  class="form-control" placeholder="To date" required>
                                </div>
                    

                                 <div class="form-group">
                                     <div class="col-xs-6">
                                        <input type="text" id="txtTo" name="txtTo" class="form-control" placeholder="From date" required>
                                    </div>
                                </div><br><br><br>
                     </div>  