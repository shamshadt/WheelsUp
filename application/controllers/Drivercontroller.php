<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drivercontroller extends CI_Controller {

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
		$this->load->model(array('Mymodel','Drivermodel'));
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


	function driver_home()   
			{

		$this->load->view('driver/driver_home');

			}

function status_change()
	{
		$email=$this->session->userdata('email');
		$status=$this->input->post('status');
		if($status==1)
		{
			$action=5;
			$this->Drivermodel->driver_updatestatus($email,$action);
			$this->profile();
		}
		else
		{
			$action=1;
			$this->Drivermodel->driver_updatestatus($email,$action);
			$this->profile();
		}
	}



function profile()
	{

		
		$email=$this->session->userdata('email');
		$result['dis']=$this->Drivermodel->profile($email);
		//print_r($result);
		//echo $email;
		// $result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
		$this->load->view('driver/driver_profile',$result);
	}
//user edit profile
	function driver_profile_edit()
	{
		$email=$this->session->userdata('email');
		
		
		$result['dis']=$this->Drivermodel->profile($email);
		$this->load->view('driver/driver_profile_edit',$result);
		
	}



function driver_profile_update()
	{
		$email=$this->session->userdata('email');
		$uid =$this->input->post('uid');
		
		
		//$profilepic=$this->input->post('profilepic');
		$name =$this->input->post('name');
		$phone =$this->input->post('phone');
		$age =$this->input->post('age');
		$amount =$this->input->post('amount');
		
		if (isset($name))
		{



			if($_FILES['profilepic']['name'] !=="")
			{
					$p=$_FILES['profilepic']['name']	;
					$folderPath = "../codeignetor/images/driver_profile_pic/";
					$image =  time().$_FILES['profilepic']['name'];
					move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
					$sourceProperties = getimagesize($folderPath.$image);
					$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
					$this->imagecheck($sourceProperties,$folderPath.$image);
					

					$userdata=array('dname'=>$name,'dmobile'=>$phone,'dprofile_img'=>$image,'age'=>$age,'amount'=>$amount);

					$result['dis']=$this->Drivermodel->updateprofile($uid,$userdata);
					//print_r($result);
					$result['dis']=$this->Drivermodel->profile($email);
					$this->load->view('driver/driver_profile',$result);
				}
				else
				{
					$userdata=array('dname'=>$name,'dmobile'=>$phone,'age'=>$age,'amount'=>$amount);

					$result['dis']=$this->Drivermodel->updateprofile($uid,$userdata);
					
					 $result['dis']=$this->Drivermodel->profile($email);
						// print_r($result);
					$this->load->view('driver/driver_profile',$result);
				}

		}
		else

		{

					 $result['dis']=$this->Drivermodel->profile($email);
						// print_r($result);
					$this->load->view('driver/driver_profile',$result);


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









}
