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

                                                <h4 align="center"> <u><b> Registered Owners </b></u> </h4>


                                                <?php
                                                    if(!$owners)
                                                    {
                                                        echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No Owners Registered...!!</h1></center>';
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
                                                      foreach($owners as $row)
                                                            {
                                                            $name=$row->oname;
                                                            $email=$row->oemail;
                                                            $mobile=$row->omobile;

                                                            $adhar=$row->oadhar;
                                                            $place=$row->pname;
                                                            
                                                              
                                                            
                                                            $gender=$row->gender;

                                                            $status=$row->status;
                                                            
                                                          
                                                            ?>
                                                    <form action="<?php echo site_url('controller/blockowneraction')?>" method="post" name="userlist">
                                                    <tr>
                                                       
                                                    <input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
                                                    <input type="hidden" value="<?php echo $status ?>" id="blockstatus" name="blockstatus">
                                                    <td><?php echo $name;?></td>
                                                    <td width="15%"><?php echo $email;?></td>
                                                    <td><?php echo $mobile;?></td>
                                                    <td><?php echo $adhar;?></td>
                                                    <td><?php echo $gender;?></td>
                                                    <td><?php echo $place;?></td>
                                                    
                                                   <!--  <td align=center><a href="<?php echo base_url('images/certificate/').$imgrc; ?>">View </a>
                                                    </td> -->
                                                    <td>
                                                    <?php
                                                    if($status==1)
                                                    {
                                                    echo '<input type="submit" value="Block" class="btn btn-danger">';
                                                    }
                                                    else
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