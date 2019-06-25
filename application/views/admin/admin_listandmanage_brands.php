<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {

              include('admin_header.php');

        ?> 



                           
 <!-- Content -->
                        <div class="dashboard-content">

                              </br></br></br></br>
                                            

                                    

                                                                        <H4 align="center"> <u><b> Models  </b></u> </H1>


                                                                            <?php
                                                                                if(!$model)
                                                                                {
                                                                                    echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No Models added...!!</h1></center>';
                                                                                }
                                                                                else
                                                                                {
                                                                            ?>






                                                              <div align="center" style="font-size:18px;color:#000000;width:100%;height:auto; margin-top: 5%" >
                                                                                <table border="5" class="table table-hover col-xs-10" style="background-color:#1351;margin-left:1%;border:5px  solid">
                                                                                    


                                                                        
                                                                        <tr>
                                                                        <th >Sl No</th><th>Model Name</th><th>Creation_date</th><!-- <th>Updation_date</th> --><th style="padding-left: 13%">Action</th>
                                                                        </tr>
                                                                        <?php
                                                                        foreach($model as $row)
                                                                        {

                                                                      $model_name=$row->m_name;
                                                                      $creation_date=$row->creation_date;
                                                                      $updation_date=$row->updation_date;
                                                                      $mid=$row->mid;
                                                                      




                                                                        ?>
                                                                        <form action="<?php echo site_url('controller/model_remove_update')?>" method="post" name="userlist">
                                                                        <tr>
                                                                        <input type="hidden" value="<?php echo $mid ?>" id="mid" name="mid">
                                                                    <td><?php echo $mid;?></td>    
                                                                    <td><?php echo $model_name;?></td>
                                                                    <td width="5%"><?php echo $creation_date;?></td>
                                                                    <!-- <td><?php echo $updation_date;?></td> -->
                                                                    
                                                                    <td style="padding-left: 13%" >
                                                                     <input type="submit" name="edit" value="Edit" class="btn btn-success">

                                                                    <!-- <input type="submit" name="remove" value="Remove" class="btn btn-dangers"> -->
                                                                    </td>
                                                                    
                                                                   
                                                                   
                                                                        </tr></form>
                                                                         <?php
                                                                        }
                                                                        ?>
                                                                        </table>


                                                                        </div>




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