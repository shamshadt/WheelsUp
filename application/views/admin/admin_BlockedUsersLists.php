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
                             

                                    

                                            <H4 align="center"> <u><b> Blocked Users </b></u> </H1>


                                                <?php
                                                    if(!$blockedusers)
                                                    {
                                                        echo '<center><h1 style="font-family:Times New Roman, Times, serif;font-size:25px;color:#FF0000; margin-top:5%;" >No Blocked Users...!!</h1></center>';
                                                    }
                                                    else
                                                    {
                                                ?>






                                  <div align="center" style="font-size:18px;color:#000000;width:100%;height:auto; margin-top: 5%" >
                                                    <table border="5" class="table table-hover col-xs-10" style="background-color:#1351;margin-left:1%;border:5px  solid">
                                                        


                                            
                                            <tr>
                                            <th align="center">Name</th><th>Email</th><th>Phone</th><th>Aadhar<th>Gender</th><th>Action</th>
                                            </tr>
                                            <?php
                                            foreach($blockedusers as $row)
                                            {
                                          $name=$row->fname;
                                          $email=$row->email;
                                          $phone=$row->phone;
                                          $adhar=$row->adhar;
                                         
                                          $gender=$row->gender;
                                          $status=$row->status;
                                            ?>
                                            <form action="<?php echo site_url('controller/blockeduseraction')?>" method="post" name="userlist">
                                            <tr>
                                            <input type="hidden" value="<?php echo $email ?>" id="blockid" name="blockid">
                                            <input type="hidden" value="<?php echo $status ?>" id="blockstatus" name="blockstatus">
                                        <td><?php echo $name;?></td>
                                        <td width="15%"><?php echo $email;?></td>
                                        <td><?php echo $phone;?></td>
                                        <td><?php echo $adhar;?></td>
                                      
                                        <td><?php echo $gender;?></td>
                                        </td>
                                        <td>
                                            <?php
                                            if($status==4)
                                            {
                                            echo '<input type="submit" value="UnBlock" class="btn btn-success"> </button>';
                                            }
                                           
                                            ?>
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