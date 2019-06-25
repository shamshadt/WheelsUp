<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */




	function __construct()
	
	{
		parent::__construct(); 
		$this->load->model('Mymodel');
		$this->load->helpers(array('url','form'));
		$this->load->library(array('session','upload'));
		
		


	}
	
	public function index()
	{
		$result['dis']=$this->Mymodel->states();
		//$this->load->view('templates/header');
		$this->load->view('templates/index',$result);
		//$this->load->view('templates/footer');
	}


	function districtselect()
	{
	$distt= array();
	$ii=0;
	$sid=$this->input->post('sid');
	//print_r	($sid);
	$dist['dis']=$this->Mymodel->districtselect($sid);
	foreach($dist['dis'] as $row)
	{
	$did=$row->did;
	$dname=$row->dname;
	$distt[$ii]['id']=$did;
	$distt[$ii]['value']=$dname;

	$ii++;
	//echo $did;

	}
	echo json_encode($distt);
	}


	function userdistrictselect()
	{
	$distt= array();
	$ii=0;
	$sid=$this->input->post('sid');
	//print_r	($sid);
	$dist['dis']=$this->Mymodel->districtselect($sid);
	foreach($dist['dis'] as $row)
	{
	$did=$row->did;
	$dname=$row->dname;
	$distt[$ii]['id']=$did;
	$distt[$ii]['value']=$dname;

	$ii++;
	//echo $did;

	}
	echo json_encode($distt);
	}


	function ownerdistrictselect()
	{
	$distt= array();
	$ii=0;
	$sid=$this->input->post('sid');
	//print_r	($sid);
	$dist['dis']=$this->Mymodel->districtselect($sid);
	foreach($dist['dis'] as $row)
	{
	$did=$row->did;
	$dname=$row->dname;
	$distt[$ii]['id']=$did;
	$distt[$ii]['value']=$dname;

	$ii++;
	//echo $did;

	}
	echo json_encode($distt);
	}


	function driverdistrictselect()
	{
	$distt= array();
	$ii=0;
	$sid=$this->input->post('sid');
	//print_r	($sid);
	$dist['dis']=$this->Mymodel->districtselect($sid);
	foreach($dist['dis'] as $row)
	{
	$did=$row->did;
	$dname=$row->dname;
	$distt[$ii]['id']=$did;
	$distt[$ii]['value']=$dname;

	$ii++;
	//echo $did;

	}
	echo json_encode($distt);
	}




	


	function placeselect()
	{
			
	$placee= array();
	$ii=0;
	$did=$this->input->post('did');
	// echo json_encode($did);
	
	$place['diss']=$this->Mymodel->placeselect($did);
	foreach($place['diss'] as $row)
	{
	$pid=$row->pid;

	$pname=$row->pname;
	$placee[$ii]['id']=$pid;
	$placee[$ii]['value']=$pname;

	$ii++;
	//echo $did;

	}
	echo json_encode($placee);
	}

	function ownerplaceselect()
	{
			
	$placee= array();
	$ii=0;
	$did=$this->input->post('did');
	// echo json_encode($did);
	
	$place['diss']=$this->Mymodel->placeselect($did);
	foreach($place['diss'] as $row)
	{
	$pid=$row->pid;

	$pname=$row->pname;
	$placee[$ii]['id']=$pid;
	$placee[$ii]['value']=$pname;

	$ii++;
	//echo $did;

	}
	echo json_encode($placee);
	}


	function driverplaceselect()
	{
			
	$placee= array();
	$ii=0;
	$did=$this->input->post('did');
	// echo json_encode($did);
	
	$place['diss']=$this->Mymodel->placeselect($did);
	foreach($place['diss'] as $row)
	{
	$pid=$row->pid;

	$pname=$row->pname;
	$placee[$ii]['id']=$pid;
	$placee[$ii]['value']=$pname;

	$ii++;
	//echo $did;

	}
	echo json_encode($placee);
	}


	function about()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/about');
		$this->load->view('templates/footer');
	}




	


	function user_home()
	{
		
		$this->load->view('user/user_home');
		
		
	}
	function viewcars()
	{
		
		$this->load->view('user/viewcars');
		
		
	}

	function adminhome()
	{
		
		$this->load->view('admin/admin_home');
		
		
	}   


	function test()
	{
		
		$this->load->view('test');
		
		
	}

	function dashboard()
	{
		
		$this->load->view('admin/dashboard');
		
		
	}

  

  
	

	function admin_car_approval()
	{
		$result['car']=$this->Mymodel->approvecars();
		$this->load->view('admin/admin_car_approval',$result);
		
	}

	function approve_cars_action()
	{
		$cid=$this->input->post('cid');
		$cstatus=$this->input->post('cstatus');
		if($cstatus==1)
		{
			$action=0; 
			$this->Mymodel->owner_updatecstatus($cid,$action);
			$this->admin_car_approval();
		}
	}

	

	
	function ownerapproval()
	{
		$type='4';
		$result['owner']=$this->Mymodel->approveownerlist($type);
		
		$this->load->view('admin/admin_ownerapproval',$result);
	}

	//owner approval
	function approveowneraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==3)
		{
			$action=1; 
			$this->Mymodel->owner_updateblock($email,$action);
			$this->ownerapproval();
		}
	}
	//END approval owner


	function driverapproval()
	{
		$type='3';
		$result['driver']=$this->Mymodel->approvedriverlist($type);
		//print_r($result);
		$this->load->view('admin/admin_driverapproval',$result);
	}

	//owner approval
	function approvedriveraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==3)
		{
			$action=1; 
			$this->Mymodel->driver_updateblock($email,$action);
			$this->driverapproval();
		}
	}
	//END approval owner






		//owner list
	function admin_ownerlist()
	{
		$type='4';
		$result['owners']=$this->Mymodel->ownerlists($type);
		$this->load->view('admin/admin_ownerlist',$result);
	}

		//owner block and unblock
	function blockowneraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==4)
		{
			$action=1;
			$this->Mymodel->owner_updateblock($email,$action);
			$this->admin_ownerlist();
		}
		else
		{
			$action=4;
			$this->Mymodel->owner_updateblock($email,$action);
			$this->admin_ownerlist();
		}
	}



			//userlist
	function admin_userlist()
	{
		$type='2';
		$result['users']=$this->Mymodel->userlists($type);
		$this->load->view('admin/admin_userlist',$result);
	}
			//user block and unblock
	function blockuseraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==1)
		{
			$action=4;
			$this->Mymodel->user_updateblock($email,$action);
			$this->admin_userlist();
		}
		else
		{
			$action=1;
			$this->Mymodel->user_updateblock($email,$action);
			$this->admin_userlist();
		}
	}


	




				//driverlist
	function admin_driverlist()
	{
		$type='3';
		$result['driver']=$this->Mymodel->driverlists($type);
		$this->load->view('admin/admin_driverlist',$result);
	}

				//driver block and unblock
	
	function blockdriveraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==4)
		{
			$action=1;
			$this->Mymodel->driver_updateblock($email,$action);
			$this->admin_driverlist();
		}
		else
		{
			$action=4;
			$this->Mymodel->driver_updateblock($email,$action);
			$this->admin_driverlist();
		}
	}


	



	function admin_BlockedUsersLists()
	{
		$type='2';
		$result['blockedusers']=$this->Mymodel->userblockedlists($type);
		$this->load->view('admin/admin_BlockedUsersLists',$result);
	}

	function blockeduseraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==4)
		{
			$action=1;
			$this->Mymodel->user_updateblock($email,$action);
			$this->admin_BlockedUsersLists();
		}
		
	}

	





	function admin_BlockedOwnersLists()
	{
		$type='4';
		$result['blockedowners']=$this->Mymodel->ownerblockedlists($type);
		$this->load->view('admin/admin_BlockedOwnersLists',$result);
	}


	function blockedowneraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==4)
		{
			$action=1;
			$this->Mymodel->owner_updateblock($email,$action);
			$this->admin_BlockedOwnersLists();
		}
		
	}








	function admin_BlockedDriversLists()
	{
		$type='3';
		$result['blockeddrivers']=$this->Mymodel->driverblockedlists($type);
		$this->load->view('admin/admin_BlockedDriversLists',$result);
	}


	function blockeddriveraction()
	{
		$email=$this->input->post('blockid');
		$blockstatus=$this->input->post('blockstatus');
		if($blockstatus==4)
		{
			$action=1;
			$this->Mymodel->driver_updateblock($email,$action);
			$this->admin_BlockedDriversLists();
		}
		
	}








  //count of approved users
	function countapprove($a)
{
	$approve=$this->Mymodel->countapproval($a);
	return($approve);
}



//count of registered users

	function countall($a)
	{
		$userreg=$this->Mymodel->countlist($a);
		return($userreg);
	}

//count of registered users

	function countblock($a)
	{
		$userreg=$this->Mymodel->countblocklist($a);
		return($userreg);
	}





	





	




	

	








     //inserting into registr and login table 
	function insertuser()
{
	$ufname=$this->input->post('fname');	

	$cpass=$this->input->post('cpass');
	$upassword=md5($cpass);
	$uemail=$this->input->post('email');
	$umobile=$this->input->post('mobile');
	$uadhar=$this->input->post('adhar');
	
	$ugender=$this->input->post('gender');
	$did=$this->input->post('district');
	$place=$this->input->post('place');


				
	$result['id']=$this->Mymodel->checkreguser($uemail);   //email check
	if(!$result['id'])
	{	
		
		$userdata=array('fname'=>$ufname,'phone'=>$umobile,'adhar'=>$uadhar,'gender'=>$ugender,'did'=>$did,'place'=>$place,'prof_img'=>'index.jpeg' );
		$this->Mymodel->insertuserreg($userdata); //registration tablilot insert cheyyunu

		$insert_id = $this->db->insert_id();   //last insert chydha tablile primary id edthu insert_id yil vekkunnu
		
		$userdata1=array('rid'=>$insert_id,'email'=>$uemail,'password'=>$upassword,'type'=>'2','status'=>'1');	
		$this->Mymodel->insertlogin($userdata1);
			
		$this->session->set_flashdata('usersuccess', 'You have registered successfully.');

		redirect('controller/index');

		
	}
	else
	{
		$this->session->set_flashdata('userexist', 'User already exist..!!');
		
		redirect('controller/index');

		
	}		
	
}



//State selection
// function states()
// {
// $result1['dis']=$this->Mymodel->states();
// $this->load->view('templates/header',$result1);
// }




function insertowner()
{
	$oname=$this->input->post('oname');	
	$oemail=$this->input->post('oemail'); 
	$omobile=$this->input->post('omobile');
	


	$ocpass=$this->input->post('ocpass');
	$opass=md5($ocpass);
		
	
	
	//$imgrc=$this->input->post('imgrc');
	//$ucity=$this->input->post('city');
	$ogender=$this->input->post('ogender');
	$adhar=$this->input->post('adhar');
	$place=$this->input->post('ownerplace');
	


				
	$result['id']=$this->Mymodel->checkregowner($oemail);   //email check
	if(!$result['id'])
				   {

				  //  		$folderPath = "../codeignetor/images/certificate/";
						// $cimage =  time().$_FILES['imgrc']['name'];
						// move_uploaded_file($_FILES['imgrc']['tmp_name'],$folderPath.$cimage);

							$userdata=array('oname'=>$oname,'oemail'=>$oemail,'omobile'=>$omobile,'opassword'=>$opass,'gender'=>$ogender,'oadhar'=>$adhar,'oplace'=>$place,'ostatus'=>3 );
							$this->Mymodel->insertregowner($userdata);


							$insert_id = $this->db->insert_id(); 

		

						
						

		


						
						$userdata1=array('rid'=>$insert_id,'email'=>$oemail,'password'=>$opass,'type'=>'4','status'=>'3');
						
						$this->Mymodel->insertlogin($userdata1);
							
								$this->session->set_flashdata('ownersuccess', 'You have registered successfully.');

								redirect('controller/index');

							
					}
					else
					{
						
							
						
						$this->session->set_flashdata('ownerexist', 'User already exist..!!');
						redirect('controller/index');
					}		
	
}

function insertdriver()
{
	$dname=$this->input->post('dname');	
	$demail=$this->input->post('demail'); 
	$dmobile=$this->input->post('dmobile');
	


	$dcpass=$this->input->post('dcpass');
	$dpass=md5($dcpass);
		
	
	
	$imgrc=$this->input->post('imglicence');
	//$ucity=$this->input->post('city');
	$dgender=$this->input->post('dgender');

	$dplace=$this->input->post('driverplace');




				
	$result['id']=$this->Mymodel->checkregdriver($demail);   //email check
	if(!$result['id'])


					{	
						$folderPath = "../codeignetor/images/licence/";
						$cimage =  time().$_FILES['imglicence']['name'];
						move_uploaded_file($_FILES['imglicence']['tmp_name'],$folderPath.$cimage);

						$userdata=array('dname'=>$dname,'demail'=>$demail,'dmobile'=>$dmobile,'dpassword'=>$dpass,'imglicence'=>$cimage,'dgender'=>$dgender,'dstatus'=>3, 'dplace'=>$dplace, 'dprofile_img'=>'index.jpeg' );
						$this->Mymodel->insertregdriver($userdata);
						$insert_id = $this->db->insert_id(); 


						$userdata1=array('rid'=>$insert_id,'email'=>$demail,'password'=>$dpass,'type'=>'3','status'=>'3');
						
						$this->Mymodel->insertlogin($userdata1);
						
						$this->session->set_flashdata('driversuccess', 'You have registered successfully.');
						redirect('controller/index');
					}
					else
					{
						
						$this->session->set_flashdata('driverexist', 'User already exist..!!');
						redirect('controller/index');
					}		
	
}


	


	

	
function loginn()
	{
		
		//$this->load->view('loginn');
		$email=$this->input->post('email');
		$pass1=$this->input->post('password');
		$pass=md5($pass1);
		$loginresult['login']=$this->Mymodel->loguser($email,$pass);
		if(!$loginresult['login'])
		{
			 //echo  "Invalid login...!!";

			
			$this->session->set_flashdata('invalidlogin', 'Email or Password wrong..!! ');
			redirect('controller/index'); 
			
		}

		else

		{	
			foreach($loginresult['login'] as $row)
			{
				$lid=$row->id;
				$email=$row->email;
				$password=$row->password;
				$type=$row->type;
				$status=$row->status;
				

				if($status=='3')
				{
					$this->session->set_flashdata('notapproved', 'User not approved..!! ');
					
					redirect('controller/index');

				}
				elseif($status=='4')
				{
					$this->session->set_flashdata('blocked', 'Blocked Login...!!');
					redirect('controller/index');

					
					
				}
				else
				{

					if($type=='2') //type 2 aaanengil session variable create chyeanam ennit adhilek email and pass store cheyyum
					{
						$this->session->set_userdata('id',$lid);
						$this->session->set_userdata('email',$email);   //session variable set cheyunnu
						$this->session->set_userdata('password',$password);
						//$this->session->set_userdata('fname',$fname);
						
						$result['model']=$this->Mymodel->modelslist();
						$result['diss']=$this->Mymodel->states();
						$result['dis']=$this->Mymodel->disuser($email);   //$email mymodel illoot pass chydh tables link chydh  login enn paranja single table undakkum
						$result['list']=$this->Mymodel->usercarslist();
						$this->load->view('user/user_index',$result);  //result is passed to the next page ie userhome
						
					}
					
					else if($type=='1')
					{
					$this->session->set_userdata('id',$lid);
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('password',$password);
			
					$result['dis']=$this->Mymodel->disadmin($email);
			
					$this->load->view('admin/admin_home',$result);
					}

					else if($type=='4')
					{
					$this->session->set_userdata('id',$lid);
					$this->session->set_userdata('email',$email);
					$this->session->set_userdata('password',$password);
			
					$result['dis']=$this->Mymodel->disowner($email);
			
					$this->load->view('owner/owner_home',$result);
					}


					 else
				    {
						$this->session->set_userdata('id',$lid);
						$this->session->set_userdata('email',$email);
						$this->session->set_userdata('password',$password);
			
						$result['dis']=$this->Mymodel->disdriver($email);
			
						$this->load->view('driver/driver_home',$result);
					}
				
		
			

				}

			}

		}
	}



function admininsert_models()
		{
			$model=$this->input->post('model');
			$res=$this->Mymodel->checkmodel($model);
			if($res == 0)
			{

			
			
			
			$cdate=date("Y/m/d  h:i:sa");

			
						$userdata=array('m_name'=>$model,'creation_date'=>$cdate,'updation_date'=>NULL);
						$this->Mymodel->insertmodel($userdata);


						$this->session->set_flashdata('modeladded', 'Model added sucessfully...!');
						redirect('controller/admin_addmodels');

						// $result['model']=$this->Mymodel->modelslist(0);
						// $this->load->view('admin/admin_listandmanage_brands',$result);
			}
			else
			{
				$this->session->set_flashdata('model_exist', 'Model Added already');
				$result['diss']=$this->Mymodel->modelsupdate(0);  

				redirect('controller/admin_addmodels',$result);

			}

			
	}











function admin_addcars()
	{


		$result['dis']=$this->Mymodel->carsupdate(0);  //0 ennadh databasil illa so add cform varanam adhinu vendiyaaan
		$result['model']=$this->Mymodel->modelslist();
		$result['diss']=$this->Mymodel->states();

		$this->load->view('admin/admin_addcars',$result	);	
	}

	function owner_addcars()
	{
		
		$this->load->view('owner/owner_addcars');	
	}
	
	function admin_viewcars()

	{
		$lid=$this->session->userdata('id');
		$result['list']=$this->Mymodel->carslist($lid);
		$this->load->view('admin/admin_viewcars',$result);	
	}



		function admin_addmodels()
	{


		$result['diss']=$this->Mymodel->modelsupdate(0);

		$this->load->view('admin/admin_addmodels',$result);
		
		
	} 


	function admin_listandmanage_brands()
	{
		$result['model']=$this->Mymodel->modelslist();
		$this->load->view('admin/admin_listandmanage_brands',$result);
		
		
	}

	
	function admin_booking_details()
	{

		$lid=$this->session->userdata('id');
		$result['booking']=$this->Mymodel->join_cars_booking($lid);

		$this->load->view('admin/admin_booking_details',$result);
	}

		
	





function adminaddcars()
		{
			$regno=$this->input->post('regno');
			$res=$this->Mymodel->checkregno($regno);
			if($res == 0)
			{

			$lid=$this->session->userdata('id');
			$model=$this->input->post('model');	
			$name=$this->input->post('name'); 
			$millege=$this->input->post('millege');
			
			$seats=$this->input->post('seats');	
			$aprice=$this->input->post('aprice'); 
			$rprice=$this->input->post('rprice');

			$fuel=$this->input->post('fuel');	
			$ac=$this->input->post('ac'); 
			$music=$this->input->post('music');
			$steering=$this->input->post('steering');	
			$lock=$this->input->post('lock'); 
			$cimage=$this->input->post('cimage');
			$regimage=$this->input->post('regimage');
			$place=$this->input->post('place');
			$date=date("Y/m/d  h:i:sa");



			$cimage =  time().$_FILES['cimage']['name'];
			$path='../codeignetor/images/carimages/';
			move_uploaded_file($_FILES['cimage']['tmp_name'],$path.$cimage);


			$sourceProperties = getimagesize($path.$cimage);
			$this->imagecheckcars($sourceProperties,$path.$cimage);



			$regimage =  time().$_FILES['regimage']['name'];
			$path1='../codeignetor/images/regimages/';
			move_uploaded_file($_FILES['regimage']['tmp_name'],$path1.$regimage);

			$sourceProperties1 = getimagesize($path1.$regimage);
			$this->imagecheckcars($sourceProperties1,$path1.$regimage);
			


			
						$userdata=array('lid'=>$lid,'model'=>$model,'name'=>$name,'millege'=>$millege,'seats'=>$seats,'aprice'=>$aprice,'rprice'=>$rprice,'fuel'=>$fuel,'ac'=>$ac,'music'=>$music,'steering'=>$steering ,'centerlock'=>$lock,'cimage'=>$cimage,'regno'=>$regno,'regimage'=>$regimage,'place'=>$place,'date'=>$date ,'cstatus'=>0 );
						$this->Mymodel->insertcars($userdata);


						$this->session->set_flashdata('caradded', 'Car added sucessfully...!');
						redirect('controller/admin_addcars');
						$result['dis']=$this->Mymodel->carsupdate(0);
						//$this->load->view('admin/admin_addcars',$result);
						redirect('controller/admin_addcars',$result);
		}
		else
		{
			$this->session->set_flashdata('regno_exist', 'Car Registered already');
			$result['dis']=$this->Mymodel->carsupdate(0);  
			redirect('controller/admin_addcars',$result);

		}

			
	}



//cars VIEW CHANGE
	function carsviewchange()
	{
		$lid=$this->session->userdata('id');
		$cid=$this->input->post('cid');
				$status=$this->input->post('cstatus');
				$remove=$this->input->post('same');
				$edit=$this->input->post('same');

				$availiable=$this->input->post('same');
				$unavailiable=$this->input->post('same');
				if($remove=='Remove')

				{
											$this->Mymodel->removecars($cid);
											$result['list']=$this->Mymodel->carslist($lid);
											$this->load->view('admin/admin_viewcars',$result);
				}
				elseif ($edit=="Edit")

				{
										$result['dis']=$this->Mymodel->carsupdate($cid);
										$this->load->view('admin/admin_addcars',$result);
				}



				else 
								{

										
										$cstatus=$this->input->post('cstatus');
										if($cstatus==0)
										{
											$ccid['list']=$this->Mymodel->check_car_booking($cid);
											if ($ccid['list'])
											{
													$this->session->set_flashdata('Unavailiable', 'The car is already booked');
													redirect('controller/admin_viewcars ');	

											}

											else
											{
													$action=2;
													$this->Mymodel->updatestatuscars($cid,$action);
													$this->admin_viewcars();
											}
										}
											else
										{
												$action=0;
												$this->Mymodel->updatestatuscars($cid,$action);
												$this->admin_viewcars();
										}
									
								}






			}
	//cars VIEW CHANGE

			//model VIEW CHANGE
	function model_remove_update()
	{

		$mid=$this->input->post('mid');
				
				$remove=$this->input->post('remove');
				$edit=$this->input->post('edit');
				if($remove=='Remove')
				{
					$this->Mymodel->removemodels($mid);
					$result['model']=$this->Mymodel->modelslist();
					$this->load->view('admin/admin_listandmanage_brands',$result);
				}
				else
				 {
					$result['diss']=$this->Mymodel->modelsupdate($mid);
					
					//$result['model']=$this->Mymodel->modelslist();
					$this->load->view('admin/admin_addmodels',$result);
				}
			}
	//model VIEW CHANGE






function imagecheckcars($sourceProperties,$path)
	{
		$imageType = $sourceProperties[2];
		switch ($imageType) 
		{


			case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($path);
			$targetLayer = $this->imageResizecars($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$path);
			break;


			case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($path);
			$targetLayer = $this->imageResizecars($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$path);
			break;


			case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($path);
			$targetLayer =$this->imageResizecars($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$path);
			break;


			default:
			echo "Invalid Image type.";
			exit;
			break;

		}
	}

	function imageResizecars($imageResourceId,$width,$height)
	{
		$targetWidth =400;
		$targetHeight =250;
		$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
		imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
		return $targetLayer;
	}







 // //UPDATE cars
	function adminupdatecars()
	{
			// $regno=$this->input->post('regno');
			// $res=$this->Mymodel->checkregno($regno);
			// if($res == 0)
			// {

					$cid=$this->input->post('cid');
					//$lid=$this->input->post('lid');
					$lid=$this->session->userdata('id');
					$aprice=$this->input->post('aprice'); 
					$rprice=$this->input->post('rprice');
					$cimage=$this->input->post('cimage');
					

					// $car_name=$this->input->post('car_name');	
					// $car_type=$this->input->post('car_type'); 
					// $day_rate=$this->input->post('day_rate');
					// $regno=$this->input->post('regno');
					// $sec_deposit=$this->input->post('sec_deposit');	
					// $capacity=$this->input->post('capacity'); 
					// $carimage=$this->input->post('carimage');
					// $date=date("Y/m/d  h:i:sa");
				
				if($_FILES['cimage']['name'] !=="")  //image value undegilum illengilum upload cheyyan ulla if conditionaan edh
					{
						$cimage =  time().$_FILES['cimage']['name'];
						$path="../codeignetor/images/carimages/";
						move_uploaded_file($_FILES['cimage']['tmp_name'],$path.$cimage);

						$sourceProperties = getimagesize($path.$cimage);
						$this->imagecheckcars($sourceProperties,$path.$cimage);

						$data=array('aprice'=>$aprice,'rprice'=>$rprice,'cimage'=>$cimage );
						$s=$this->Mymodel->updatecars($cid,$data);
						$this->session->set_flashdata('Update_sucess', 'car Update Sucessfully');
						$result['list']=$this->Mymodel->carslist($lid);
						//$this->load->view('admin/admin_viewcars',$result);
						redirect('controller/admin_viewcars',$result);
					}
					else 
					{
						$data=array('aprice'=>$aprice,'rprice'=>$rprice );
						$s=$this->Mymodel->updatecars($cid,$data);
						$this->session->set_flashdata('Update_sucess', 'CAr Update Sucessfully');
						$result['list']=$this->Mymodel->carslist($lid);
						//$this->load->view('admin/admin_viewcars',$result);
						redirect('controller/admin_viewcars ',$result);
					}
		// 	}
		// else
		// {
		// 	$this->session->set_flashdata('Update_sucess', 'The car already registered');
		// 	$result['list']=$this->Mymodel->carslist();
		// 	//$this->load->view('admin/admin_viewcars',$result);
		// 	redirect('controller/admin_viewcars',$result);
		// }
	}

function forgotpassword()
{
	$result['email']=""; //error adikkandirikkanaan edh ivde inagne kodukkune
	$this->load->view('forgotpassword',$result);	
}	


function forgotpasswordemailcheck()
{
	$email=$this->input->post('email');
	$result['id']=$this->Mymodel->forgotpasswordemailcheck($email);
	if(!$result['id'])
	{
		//$this->session->set_userdata('msg','Email not registered ...!!');
		$this->session->set_flashdata("msg","Email not registered ...!!");
		//$this->forgotpassword();
		redirect('controller/forgotpassword');
	}
	else
	{
		$otp=rand(111111,999999);
		$from_email = "admin@wheelsUp.com";
		$this->load->library('email');

				$this->email->from($from_email, 'WheelsUp');
        $this->email->to($email);
        $this->email->subject('Reset password');
        $this->email->message('We received a request to reset your WheelsUp password. Click here to change your password. Alternatively, you can enter the following password reset code:  '. $otp);

				if($this->email->send())
				{
				$this->session->set_userdata('email',$email);
				$result['email']=$this->Mymodel->forgotpasswordnmrinsert($email,$otp);
       			 $this->session->set_flashdata("msg","OTP sent to your email.");
				$this->session->set_userdata('count',0);
				$this->load->view('forgotpassword',$result);
			 }
         else
         $this->session->set_flashdata("msg","Error in sending Email.");
         $this->forgotpassword();
	}
}

function otpcheck()
{

	$emaildb=$this->session->userdata('email');
	$otp=$this->input->post('otp');
	$result['email']=$this->Mymodel->otpcheck($emaildb,$otp);
	if($result['email'])
	{
		$this->session->set_userdata('otp',123);
		$this->load->view('Resetpassword');
	}
	else
	{
		$count=$this->session->userdata('count');
		if($count==3)
		{
			$this->Mymodel->otplimit($emaildb);
			$count=0;
			$this->session->set_flashdata("msg","Forgot password process is failed");
			$this->forgotpassword();
		}
		$count++;
		$this->session->set_userdata('count',$count);
		$this->session->set_flashdata("msg","Invalid OTP ");
		$result['email']="hi";
		$this->load->view('forgotpassword',$result);
	}
}

function resetpassword()
{
	$email=$this->session->userdata('email');
	$password=$this->input->post('password1');

	$this->Mymodel->updatepassword($email,$password);
	$this->session->sess_destroy();
	$this->session->set_flashdata("reset_sucess","Password reset Successful");
	
	$this->index();
	// redirect('controller/index');
}















// function sessionin()   //userhomele session ivde call cheyunu
// 			{

// 				$email=$this->session->userdata('email');	   //sessionil edth vecha email and password

// 				$password=$this->session->userdata('password');

// 				$loginresult['login']=$this->Mymodel->loguser($email,$password);

// 				if($loginresult['login'])
// 				{
// 					return(1);   //if the email is same in both session nd database then return 1

// 				}
// 				else

// 				{
// 					return(0);

// 				}


// 			}


function sessionin($t)
	{	
		$email=$this->session->userdata('email');	   //sessionil edth vecha email and password

		$password=$this->session->userdata('password');
		$loginresult['login']=$this->Mymodel->loguser($email,$password);
		if($loginresult['login'])
		{
			foreach ($loginresult['login'] as $key)
			{
				$z=$key->type;
				if($z==$t)
				{
					return(1);
				}
				else
				{
					return(0);
				}
			}

		}
		else
		{
			return(0);
		}
	}



function logout()
{
	$this->session->sess_destroy();
	
	redirect('controller/index');
}





}
