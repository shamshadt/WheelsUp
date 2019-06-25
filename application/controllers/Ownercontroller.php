<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ownercontroller extends CI_Controller {

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
		$this->load->model(array('Mymodel','Usermodel','Ownermodel'));
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


function owner_home()   
			{

		 

		
		$this->load->view('owner/owner_home');

			}

function owner_addcars()   
			{

		 $result['dis']=$this->Mymodel->carsupdate(0);  //0 ennadh databasil illa so add cform varanam adhinu vendiyaaan
		 $result['model']=$this->Mymodel->modelslist();
		 $result['diss']=$this->Mymodel->states();

		$this->load->view('owner/owner_addcars',$result	);

			}


function owneraddcars()
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
			


			
						$userdata=array('lid'=>$lid,'model'=>$model,'name'=>$name,'millege'=>$millege,'seats'=>$seats,'aprice'=>$aprice,'rprice'=>$rprice,'fuel'=>$fuel,'ac'=>$ac,'music'=>$music,'steering'=>$steering ,'centerlock'=>$lock,'cimage'=>$cimage,'regno'=>$regno,'regimage'=>$regimage,'place'=>$place,'date'=>$date ,'cstatus'=>1 );
						$this->Mymodel->insertcars($userdata);


						$this->session->set_flashdata('caradded', 'Car added sucessfully...!');
						//$this->owner_addcars();
						//redirect('controller/owner_addcars');
						// $result['dis']=$this->Mymodel->carsupdate(0);
						//$this->load->view('admin/admin_addcars',$result);
						//redirect('controller/owner_addcars',$result);
						$this->owner_addcars();
						redirect('Ownercontroller/owner_addcars');
		}
		else
		{
			$this->session->set_flashdata('regno_exist', 'Car Registered already');
			// $result['dis']=$this->Mymodel->carsupdate(0);

			 

			// redirect('controller/owner_addcars',$result);
			$this->owner_addcars();
			redirect('Ownercontroller/owner_addcars');

		}

			
	}


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



	function owner_viewcars()
	{	
		$lid=$this->session->userdata('id');
		$db['list']=$this->Ownermodel->cars();
		

		$result['list']=$this->Ownermodel->carslists($lid);
		$this->load->view('owner/owner_viewcars',$result);	
	}


	//cars VIEW CHANGE
	function carsviewchange()
	{			$email=$this->session->userdata('email');
				$lid=$this->session->userdata('id');
				$cid=$this->input->post('cid');
				$status=$this->input->post('cstatus');
				
				$remove=$this->input->post('same');
				$edit=$this->input->post('same');

				$availiable=$this->input->post('same');
				$unavailiable=$this->input->post('same');

				
				if($remove=='Remove')
									{
										$this->Ownermodel->removecars($cid);
										$result['list']=$this->Ownermodel->carslists($lid);
										$this->load->view('owner/owner_viewcars',$result);
									}
				elseif ($edit=="Edit") 
									{
					# code...
											$result['dis']=$this->Ownermodel->carsupdate($cid);


											$this->load->view('owner/owner_addcars',$result);

									}


				else 
								{


										
										$cstatus=$this->input->post('cstatus');
										if($cstatus==0)
										{

											$ccid['list']=$this->Ownermodel->check_car_booking($cid);
											if ($ccid['list'])
											{
													$this->session->set_flashdata('Unavailiable', 'The car is already booked');
													redirect('ownercontroller/owner_viewcars ');	

											}

											else
											{


													$action=2;
													$this->Ownermodel->updatestatuscars($cid,$action);
													$this->owner_viewcars();
											}
										}
										else
										{
											$action=0;
											$this->Ownermodel->updatestatuscars($cid,$action);
											$this->owner_viewcars();
										}
									
								}
			}
	//cars VIEW CHANGE



function ownerupdatecars()
	{
			// $regno=$this->input->post('regno');
			// $res=$this->Mymodel->checkregno($regno);
			// if($res == 0)
			// {

					$cid=$this->input->post('cid');
					$lid=$this->input->post('lid');
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
						$s=$this->Ownermodel->updatecars($cid,$data);
						$this->session->set_flashdata('Update_sucess', 'car Update Sucessfully');
						
						$result['list']=$this->Ownermodel->carslists($lid);
						//$this->load->view('admin/admin_viewcars',$result);
						redirect('ownercontroller/owner_viewcars',$result);
					}
					else 
					{
						$data=array('aprice'=>$aprice,'rprice'=>$rprice );
						$s=$this->Ownermodel->updatecars($cid,$data);
						$this->session->set_flashdata('Update_sucess', 'CAr Update Sucessfully');
						$result['list']=$this->Ownermodel->carslists($lid);
						//$this->load->view('admin/admin_viewcars',$result);
						redirect('ownercontroller/owner_viewcars ',$result);
					}
}

// function availiableaction()
// 	{	
		
// 		$email=$this->session->userdata('email');
// 		$cstatus=$this->input->post('cstatus');
// 		if($cstatus==0)
// 		{
// 			$action=2;
// 			$this->Mymodel->updatecars($email,$action);
// 			$this->admin_userlist();
// 		}
// 		else
// 		{
// 			$action=1;
// 			$this->Mymodel->user_updateblock($email,$action);
// 			$this->admin_userlist();
// 		}	
// 	}



function owner_booking_details()   
			{

		 		$lid=$this->session->userdata('id');
				$result['booking']=$this->Ownermodel->join_cars_booking($lid);
				// print_r($result);

				$this->load->view('owner/owner_booking_details',$result);

			}

		
	

function owner_profile()
	{

		
		$email=$this->session->userdata('email');
		$result['dis']=$this->Ownermodel->profile($email);
		//print_r($result);
		//echo $email;
		// $result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
		$this->load->view('owner/owner_profile',$result);
	}

function owner_profile_edit()
	{
		$email=$this->session->userdata('email');
		
		
		$result['dis']=$this->Ownermodel->profile($email);
		$this->load->view('owner/owner_profile_edit',$result);
		
	}

function owner_profile_update()
	{
		$email=$this->session->userdata('email');
		$oid =$this->input->post('oid');
		
		
		//$profilepic=$this->input->post('profilepic');
		$name =$this->input->post('name');
		$phone =$this->input->post('phone');
		if (isset($name))
		{



			if($_FILES['profilepic']['name'] !=="")
			{
					$p=$_FILES['profilepic']['name']	;
					$folderPath = "../codeignetor/images/owner_profile_pic/";
					$image =  time().$_FILES['profilepic']['name'];
					move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
					$sourceProperties = getimagesize($folderPath.$image);
					$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
					$this->imagecheck($sourceProperties,$folderPath.$image);
					

					$userdata=array('oname'=>$name,'omobile'=>$phone,'oprofile'=>$image);

					$result['dis']=$this->Ownermodel->updateprofile($oid,$userdata);
					//print_r($result);
					$result['dis']=$this->Ownermodel->profile($email);
					$this->load->view('owner/owner_profile',$result);
				}
				else
				{
					$userdata=array('oname'=>$name,'omobile'=>$phone);

					$result['dis']=$this->Ownermodel->updateprofile($oid,$userdata);
					
					 $result['dis']=$this->Ownermodel->profile($email);
						// print_r($result);
					$this->load->view('owner/owner_profile',$result);
				}

		}
		else

		{

					 $result['dis']=$this->Ownermodel->profile($email);
						// print_r($result);
					$this->load->view('owner/owner_profile',$result);


		}
		
		
			// $path='../codeignetor/images/user_profile_pic/';
			// move_uploaded_file($_FILES['profilepic']['tmp_name'],$path.$profilepic);


			// $sourceProperties = getimagesize($path.$profilepic);
			// $this->imagecheckcars($sourceProperties,$path.$prof_img);

		

		// $userdata=array('fname'=>$name,'phone'=>$phone,'prof_img'=>$profilepic);

		// $result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
		// //print_r($result);
		// $result['dis']=$this->Usermodel->profile($email);
		// $this->load->view('user/profile',$result);
		
	}

function imagecheck($sourceProperties,$path)
{
	$imageType = $sourceProperties[2];
	switch ($imageType) {


		case IMAGETYPE_PNG:
		$imageResourceId = imagecreatefrompng($path);
		$targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagepng($targetLayer,$path);
		break;


		case IMAGETYPE_GIF:
		$imageResourceId = imagecreatefromgif($path);
		$targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagegif($targetLayer,$path);
		break;


		case IMAGETYPE_JPEG:
		$imageResourceId = imagecreatefromjpeg($path);
		$targetLayer =$this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
		imagejpeg($targetLayer,$path);
		break;


		default:
		echo "Invalid Image type.";
		exit;
		break;

	}
}

function imageResize($imageResourceId,$width,$height)
{
	$targetWidth =200;
	$targetHeight =200;
	$targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
	imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);
	return $targetLayer;
}
	



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