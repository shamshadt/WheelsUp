<?php
$CI =& get_instance();
$a=$CI->sessionin(1) ;
if($a==1)
    {


                    include('admin_header.php');

        ?> 



                            

                                <!-- Content -->
                                 <div class="dashboard-content">
                                                </br></br>
                                                </br></br>

                                                <h4 align="center"> <u><b> Blocked Owners </b></u> </h4>


                                                <?php
                                                    if(!$blockedowners)
                                                    {
                                                        echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No Owners Blocked...!!</h1></center>';
                                                    }
                                                    else
                                                    {
                                                ?>





                                                    <div align="center" style="font-size:18px;color:#000000;width:100%;height:auto; margin-top: 5%" >
                                                    <table border="5" class="table table-hover col-xs-10" style="background-color:#1351;margin-left:1%;border:5px  solid">
                                                    <tr >
                                                        <th align="center">Name</th>
                                                            <th>Email</th>
                                                            <th>Mobile</th>
                                                            <th>Adhar No</th>
                                                            <th>Gender</th>
                                                            <th>Place</th>
                                                            <th>Action</th>
                                                    </tr>
                                                      <?php
                                                      foreach($blockedowners as $row)
                                                            {
                                                            $name=$row->oname;
                                                            $email=$row->oemail;
                                                            $mobile=$row->omobile;
                                                            $adhar=$row->oadhar;
                                                            $place=$row->pname;
                                                            
                                                            $gender=$row->gender;

                                                            $status=$row->status;
                                                            
                                                          
                                                            ?>
                                                    <form action="<?php echo site_url('controller/blockedowneraction')?>" method="post" name="userlist">
                                                    <tr>
                                                       
                                                    <input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
                                                    <input type="hidden" value="<?php echo $status ?>" id="blockstatus" name="blockstatus">
                                                    <td><?php echo $name;?></td>
                                                    <td width="15%"><?php echo $email;?></td>
                                                    <td><?php echo $mobile;?></td>
                                                    <td><?php echo $adhar;?></td>
                                                    <td><?php echo $gender;?></td>
                                                    <td><?php echo $place;?></td>
                                                    
                                                    
                                                    <td>
                                                    <?php
                                                    if($status==4)
                                                    {
                                                    echo '<input type="submit" value="Unblock" class="btn btn-success">';
                                                    }
                                                    
                                                    ?>
                                                    </td>
                                                    </tr>
                                                  </form>
                                                     <?php
                                                    }
                                                    ?>
                                                    </table>
                                                    </div>

                                                    <?php }?>
                                 </div>

                                    














                            
                           
<?php

                include('admin_footer.php');
}

else
    {

        $CI->index();


    }

?>