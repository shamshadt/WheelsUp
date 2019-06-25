<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usercontroller extends CI_Controller {

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
		$this->load->model(array('Mymodel','Usermodel'));
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
	$sid=$this->input->get('sid');
	// print_r	($sid);
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
	$did=$this->input->get('did');
	 //echo json_encode($did);
	
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





	function home()
	{
		$result['model']=$this->Mymodel->modelslist();
		$result['diss']=$this->Mymodel->states();
		$result['list']=$this->Mymodel->usercarslist();
		$this->load->view('user/user_index',$result);
		
	}

	
	function guest_home()
	{
		
		$result['list']=$this->Mymodel->guestcarslist();
		$this->load->view('guest/guest_home',$result);
		
	}
	function message()
	{
		
		$this->session->set_flashdata('resgister_account', 'Register Account to view Details...!');
		redirect('usercontroller/home');
		//$this->load->view('guest/guest_home',$result);
		
	}

	

	function contact_us()
	{
		
		
		$this->load->view('guest/contact_us');
		
	}

	function about_us()
	{
		
		
		$this->load->view('guest/about_us');
		
	}






	function user_car_listing()
	{
		
		$this->load->view('user/user_car_listing');
		
		
	}

	function datepicker()
	{
		
		$this->load->view('user/datepicker');
		
		
	}
	

	function car_information()
	{
		
		$this->load->view('user/car_information');
		
		
	}

	function car_inform()
		{
			$cid=$this->input->post('cid');
			$frmdate=$this->input->post('fromdate');
			$todate=$this->input->post('todate');
			$place=$this->input->post('place');
			// echo $place;

			
			$start_date = strtotime($frmdate); 
    		$end_date = strtotime($todate); 
 
    		$days=($end_date - $start_date)/60/60/24; 
    		$no_of_days= $days+1;





			$carid['id']=$this->Usermodel->carinform($cid);
			$carid['fromdate']=$frmdate;
			$carid['todate']=$todate;
			$carid['no_of_days']=$no_of_days;
			$carid['dis']=$this->Usermodel->commentselect($cid);

			// $carid['place']=$place;

			// $result['list']=$this->Usermodel->cardetail();
			$this->load->view('user/car_information',$carid);
		}


	function profile()
	{

		
		$email=$this->session->userdata('email');
		$result['dis']=$this->Usermodel->profile($email);
		//print_r($result);
		//echo $email;
		// $result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
		$this->load->view('user/profile',$result);


	}

function commentinsertt()
	{
		echo "hello";
		 $llid=$this->session->userdata('id');
		$ccid=$this->input->post('cid');
		$comments=$this->input->post('comment');

		

		$userdata=array('fid'=>null,'lid'=>$llid,'cid'=>$ccid,'comments'=>$comments);
		
		
		$this->Usermodel->comments($userdata);
		$result['dis']=$this->Usermodel->commentselect($ccid);
		// print_r($result['dis']);
		echo json_encode($result['dis']);
		// $this->load->view('user/car_information',$result);
		
	}



	//user edit profile
	function user_profile_edit()
	{
		$email=$this->session->userdata('email');
		
		
		$result['dis']=$this->Usermodel->profile($email);
		$this->load->view('user/profile_edit',$result);
		
	}

	
	//user update profile
	function user_profile_update()
	{
		$email=$this->session->userdata('email');
		$uid =$this->input->post('uid');
		
		
		//$profilepic=$this->input->post('profilepic');
		$name =$this->input->post('name');
		$phone =$this->input->post('phone');
		if (isset($name))
		{



			if($_FILES['profilepic']['name'] !=="")
			{
					$p=$_FILES['profilepic']['name']	;
					$folderPath = "../codeignetor/images/user_profile_pic/";
					$image =  time().$_FILES['profilepic']['name'];
					move_uploaded_file($_FILES['profilepic']['tmp_name'],$folderPath.$image);
					$sourceProperties = getimagesize($folderPath.$image);
					$ext = pathinfo($_FILES['profilepic']['name'], PATHINFO_EXTENSION);
					$this->imagecheck($sourceProperties,$folderPath.$image);
					

					$userdata=array('fname'=>$name,'phone'=>$phone,'prof_img'=>$image);

					$result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
					//print_r($result);
					$result['dis']=$this->Usermodel->profile($email);
					$this->load->view('user/profile',$result);
				}
				else
				{
					$userdata=array('fname'=>$name,'phone'=>$phone);

					$result['dis']=$this->Usermodel->updateprofile($uid,$userdata);
					
					 $result['dis']=$this->Usermodel->profile($email);
						// print_r($result);
					$this->load->view('user/profile',$result);
				}

		}
		else

		{

					 $result['dis']=$this->Usermodel->profile($email);
						// print_r($result);
					$this->load->view('user/profile',$result);


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



			




	function paymentpage()
	{
		// $result =$this->input->post('cid');
		//$result=$this->input->post('lid');
		$result['cid'] =$this->input->post('cid');
		$result['lid'] =$this->input->post('lid');
		$result['fromdate'] =$this->input->post('fromdate');
		$result['todate'] =$this->input->post('todate');
		$result['place'] =$this->input->post('place');
		$result['tamount'] =$this->input->post('tamount');
		// print_r($result);

		$this->load->view('user/payment',$result);
	}


	function payment()
{
	$loginid=$this->input->post('lid');	

	$carid=$this->input->post('cid');
	
	$fromdate=$this->input->post('fromdate');


	$todate=$this->input->post('todate');
	$place=$this->input->post('place');

	$cardnumber = $this->input->post('cardnumber');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$cardCVV = $this->input->post('cardCVV');
		$holdername = $this->input->post('holdername');
		$bank = $this->input->post('banktype');
		
		
		$data=array('banktype'=>$bank,'card_no'=>$cardnumber,'month'=>$month,'year'=>$year,'cvv'=>$cardCVV);
		$count['dis']=$this->Usermodel->payment($data);
		if($count['dis'])
		{
			$cardata=array('lid'=>$loginid,'carid'=>$carid,'fromdate'=>$fromdate,'todate'=>$todate,'status'=>1 );
			
			
			$this->Usermodel->insertbooking($cardata);

			$this->session->set_flashdata('usersuccess', 'Booking Succesfull');

			$result['lid'] = $loginid;
			$result['fromdate'] = $fromdate;	
			$result['todate'] =$todate;
			$result['place'] =$place;
			$this->load->view('user/ask_driver',$result);

			



			
			


		}
		else
		{
			echo "<script>alert('Payment Card Details Incorrect')</script>";
			$this->home();
		}
	// }
	// else
	// {
	// 	$this->home();
	// }
}


	function ask_driver()
	{


		$this->load->view('user/ask_driver');


	}

	function driver_listing()
	{
		$carid=$this->input->post('cid');
		$fromdate=$this->input->post('fromdate');
		$todate=$this->input->post('todate');
		$place=$this->input->post('place');
		//echo $carid;
		$result['list']=$this->Usermodel->driver_list($place);
		//print_r($result);
		$this->load->view('user/driver_listing',$result);


	}

	function driver_information()
		{
			
			
			$this->session->set_flashdata('information', 'For More Details Contact the Driver');
	
			redirect('usercontroller/driver_listing');
		}


	
	function return_home()
	{


		$this->home();


	}




	function bookingdetailsinsert()
	{

	$loginid=$this->input->post('lid');	

	$carid=$this->input->post('cid');
	
	$fromdate=$this->input->post('fromdate');


	$todate=$this->input->post('todate');

	// $period = new DatePeriod(
	// 		     new DateTime($fromdate),
	// 		     new DateInterval('P1D'),
	// 		     new DateTime($todate  )
	// 									);

	// 			foreach ($period as $key => $value)
	// 			 {
				 	
	// 		    echo $value->format('m/d/Y') ;      
				
	// 			}
	// 			echo $todate;

	


	$cardata=array('lid'=>$loginid,'carid'=>$carid,'fromdate'=>$fromdate,'todate'=>$todate,'status'=>1 );
	$this->Usermodel->insertbooking($cardata);

	$this->session->set_flashdata('usersuccess', 'Booked succesfully');
	
	redirect('usercontroller/home');
		





	}


	
	function booking_status()
	{


		$lid=$this->session->userdata('id');
		$result['booking']=$this->Usermodel->join_cars_booking($lid);
		//print_r($result);

		$this->load->view('user/booking_status',$result);



	}

	function cancel_booking()
	{


		$bookingid=$this->input->post('bookid');	
		$result['booking']=$this->Usermodel->cancel_cars_booking($bookingid);
		//print_r($result);

		//$this->load->view('user/booking_status',$result);
		redirect('usercontroller/booking_status');

	}



	function searchcars()    //buttonil click cheyyumboyaan ee function wrk cheyyunnadh
		{
				$a=array();

				$fromdate=$this->input->post('txtFrom');
				$todate=$this->input->post('txtTo');
				$place=$this->input->post('place');
				$model=$this->input->post('model');



				$period = new DatePeriod(
			     new DateTime($fromdate),
			     new DateInterval('P1D'),
			     new DateTime(date('Y-m-d', strtotime("+1 Day", strtotime($todate)))  )
										);

				$resultt=$this->Usermodel->datefromdatabase();

				$i=0;
				foreach ($period as $key => $value)
				 {
					 $flag=0;
					
				    $currDate = $value->format('m/d/Y') ;  //kodtha from date
				    // echo "<br>" ; //FROMDATE edkkum nammal kodthadhil ninnn
				    // echo "currentdate:".$currDate."</br>";

			    	foreach ($resultt as $row)    //resultinte ullil orupad values und

			    	{
			    		
			    		// echo (string)$fromdate."<br/>";
			    		$dbfromdate = $row->fromdate;
			    		$dbtodate = $row->todate;
			    		// $interval = $date1->diff($date2);
			    		// print_r( $interval->format('%R%a days') );
			    		// echo ":datediff<br>";
			    		// echo strtotime($value);

			    			if(strtotime($dbfromdate) <= strtotime($currDate) && strtotime($dbtodate) > strtotime($currDate) || strtotime($dbfromdate) == strtotime($currDate) || strtotime($dbtodate) == strtotime($currDate)) //nammal kodtha value databaseil undengil.   flag=1 . $row enandg $a[i] loooot edth vechu. enitt i increment cheyyum. next save cheyyumbo a[2] yiloot akum save cheyyuka
			    			   
			    			{


			    				
			    				$flag =1;
			    				$a[$i]=$row->carid;
			    				$i++;
			    				// break;


			    			}

			    	}

			    	    

				
				}


				$b=array_unique($a);     //orupaad karyangal repeat cheyyadhirikkan
				// print_r($b);
				// die();
				$z=0;
				$m=array();

					if ($model=='Any')
					{
					$result['list']=$this->Usermodel->userfullcarslist($place);

					}
					else
					{
					$result['list']=$this->Usermodel->usercarslist($place,$model);
					}
						// print_r($result['list']);
						// die();
					  foreach($result['list'] as $row)
                                         
                        {
                        	$flag=0;
                            $cid=$row->cid;

                            	if(sizeof($b)>0)
                            	{

								foreach ($b as $be) 
								{ 
									
		                        	if ($cid==$be)    //mukalil edth vecha carid yum , $a enna arrayk ullil ulla idyum onnano enn check cheyyum		                    
	                        		{
	                        			$flag=1;

	                        		}
		           		                        }

		           		                        if(!$flag )    //flag!=0 aanengil aa carne oru arraylooot vekku   ie car ne book chydhitilla
                        			{
                        				$m[$z]=$row;
                        				$z++;

                        			}

		                    }
		                    else
		                    {
		                    	$m[$z]=$row;
                        		$z++;
		                    }
                        }


				// print_r($m);
				// return;
				//echo json_encode($m);

                 $result['fromdate']=$fromdate;
                  $result['todate']=$todate;

				$result['list']=$m;
				// print_r($result);
		$this->load->view('user/user_car_listing',$result);


				



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