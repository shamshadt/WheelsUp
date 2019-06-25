<?php
class Mymodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

		//check weather email is unique or not
	function checkreguser($duser)
	{
		$querys=$this->db->get_where('login',array('email'=>$duser));
		return $querys->result();
	}

	function checkregowner($duser)
	{
		$querys=$this->db->get_where('login',array('email'=>$duser));
		return $querys->result();
	}

	function checkregdriver($duser)
	{
		$querys=$this->db->get_where('login',array('email'=>$duser));
		return $querys->result();
	}


		//insert user data in to table userreg
	function insertuserreg($userdata)
	{
		$this->db->insert('userreg',$userdata);	
	}


	function states()
{

	$querys=$this->db->get_where('state');
	return $querys->result();
}

function districtselect($sid)
{
	$this->db->order_by("dname", "asc");
	$querys=$this->db->get_where('tbl_district',array('sid'=>$sid));
	return $querys->result();
}

function placeselect($did)
{
	$this->db->order_by("pname", "asc");
	$querys=$this->db->get_where('tbl_place',array('did'=>$did));
	return $querys->result();
}



	function insertregowner($userdata)
	{
		$this->db->insert('ownerreg',$userdata);	
	}

	function insertregdriver($userdata)
	{
		$this->db->insert('driverreg',$userdata);	
	}


			//insert in to login table db
	function insertlogin($data)
	{
		$this->db->insert('login',$data);
		
	}

				//loginn() il call cheyunnadh
	function loguser($duser,$dpass)
	{
		$querys=$this->db->get_where('login',array('email'=>$duser,'password'=>$dpass));  //sessionil ulla email and password db yil undoon check cheyyum
		return $querys->result();
	}


	function disuser($duser)    //$email mymodel illoot pass chydh tables link chydh  login enn paranja single table undakkum
	{
		

		$this->db->join('userreg','login.rid=userreg.uid','inner');
		
		$querys=$this->db->get_where('login',array('email'=>$duser));  // db yilulla email aaanu  sessionil ulladh engil
		
		return $querys->result();


	}

	// function datefromdatabase($place,$model)
	// {
	// 	$this->db->join('cars','booking.carid=cars.cid','inner');
	// 	$query = $this->db->get_where('booking',array('place'=>$place,'model'=>$model));   
	// 	return $query->result();
		
	// }


	function disadmin($data)
	{
		$querys=$this->db->get_where('login',array('email'=>$data)); 
		return $querys->result();
	}

	function disowner($duser)
	{
		$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
		$querys=$this->db->get_where('login',array('email'=>$duser));
		return $querys->result();
	}

	function disdriver($duser)
	{
		$this->db->join('driverreg','login.rid=driverreg.drid','inner');
		$querys=$this->db->get_where('login',array('email'=>$duser));
		return $querys->result();
	}


	// function lists($type)
	// 	{
	// 		$this->db->join('ownerreg','login.email2=ownerreg.oemail','inner');
			
	// 		$querys=$this->db->get_where('login',array('type'=>$type,'ostatus!='=>1));
	// 		return $querys->result();
	// 	}

	//Not approved owner list
  	function approveownerlist($type)
  	{
			$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
			$this->db->join('tbl_place','ownerreg.oplace=tbl_place.pid','inner');

			$querys=$this->db->get_where('login',array('type'=>$type,'status!='=>1));
  			return $querys->result();

  			// $this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		// $this->db->join('tbl_district','tbl_details.did=tbl_district.did','inner');
  	} 

function approvecars()
  	{
			
  			$this->db->join('login','cars.lid=login.id','inner');
  			$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
			$querys=$this->db->get_where('cars',array('cstatus='=>1));
  			return $querys->result();

  			// $this->db->join('tbl_details','tbl_login.username=tbl_details.email','inner');
		// $this->db->join('tbl_district','tbl_details.did=tbl_district.did','inner');
  	} 
  	//Not approved driver list
  	function approvedriverlist($type)
  	{
			$this->db->join('driverreg','login.rid=driverreg.drid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status'=>3));
  			return $querys->result();
  	}





  				//ownerlist //userlist //driverlist
		function ownerlists($type)
  	{
			$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
			$this->db->join('tbl_place','ownerreg.oplace=tbl_place.pid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status!='=>3));
  			return $querys->result();
  	}

  		function userlists($type)
  	{
			$this->db->join('userreg','login.rid=userreg.uid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status!='=>3));
  			return $querys->result();
  	}

  		function driverlists($type)
  	{
			$this->db->join('driverreg','login.rid=driverreg.drid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status!='=>3));
  			return $querys->result();
  	}


	function owner_updatecstatus($cid,$status)
		{
			$this->db->where('cid',$cid);
			$this->db->update('cars',array('cstatus'=>$status));
		}






  	//user  update action
  		function user_updateblock($email,$block)
		{
			$this->db->where('email',$email);
			$this->db->update('login',array('status'=>$block));
		}
	

  	//owner  update action
		function owner_updateblock($email,$block)
		{
			$this->db->where('email',$email);
			$this->db->update('login',array('status'=>$block));
		}

		//driver Block update action
		function driver_updateblock($email,$block)
		{
			$this->db->where('email',$email);
			$this->db->update('login',array('status'=>$block));
		}





				// view blocked user lists
			function userblockedlists($type)
  	{
			$this->db->join('userreg','login.rid=userreg.uid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status='=>4));
  			return $querys->result();
  	}





			//view blocked owner lists
			function ownerblockedlists($type)
  	{
			$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
			$this->db->join('tbl_place','ownerreg.oplace=tbl_place.pid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status='=>4));
  			return $querys->result();
  	}


  			//view blocked driver lists
			function driverblockedlists($type)
  	{
			$this->db->join('driverreg','login.rid=driverreg.drid','inner');
			$querys=$this->db->get_where('login',array('type'=>$type,'status='=>4));
  			return $querys->result();
  	}




		 //count no of appovel
  	function countapproval($a)
  	{
  		$query=$this->db->get_where('login',array('type'=>$a,'status'=>3));
  		$c=$query->num_rows();
  		return $c;
  	}

  		 //count no of registered users
  	 function countlist($a)
  	{
  		$query=$this->db->get_where('login',array('type'=>$a,'status!='=>3));   //3 = not approve allatrhavare edkkanam adhaayadh blocked unblocked aaayavare
  		$c=$query->num_rows();
  		return $c;
  	}

	 //count no of blocked users
  	 function countblocklist($a)
  	{
  		$query=$this->db->get_where('login',array('type'=>$a,'status='=>4));   
  		$c=$query->num_rows();
  		return $c;
  	}


  			//insert in to login table db
	function insertcars($cardata)
	{
		$this->db->insert('cars',$cardata);
		
	}


	//Check regno in database
	function checkregno($data)
	{
		$quuery=$this->db->get_where('cars',array('regno'=>$data));
		$c=$quuery->num_rows();
		return($c);
	}


	//List cars in admin page
	function carslist($lid)
	{
		
		$query = $this->db->get_where('cars',array('lid'=>$lid,'cstatus!='=>1));
		return $query->result();
	}

	function usercarslist()
	{
		
		$query = $this->db->get_where('cars',array('cstatus='=>0));
		return $query->result();
	}

	function guestcarslist()
	{
		
		$query = $this->db->get_where('cars',array('cstatus='=>0));
		return $query->result();
	}

	//remove cars
	function removecars($id)
	{
		$this->db->where('cid',$id);
		$this->db->delete('cars');
		//$this->db->update('tbl_news',array('nstatus'=>$action));
	}


	//VALUES update cheyyan vendi  db il ninn values edth print cheyyippikum
	function carsupdate($value)
	{
		$this->db->join('tbl_place','cars.place=tbl_place.pid','inner');
		$query = $this->db->get_where('cars',array('cid'=>$value));
		return $query->result();
	}


	//CARS status update
	function updatecars($id,$data)
	{
		$this->db->where('cid',$id);
		$this->db->update('cars',$data);
	}


function updatestatuscars($email,$block)
		{
			$this->db->where('cid',$email);
			$this->db->update('cars',array('cstatus'=>$block));
		}



	//insert modelname
	function insertmodel($model)
	{
		$this->db->insert('models',$model);
		
	}



	//Check modelname in database
	function checkmodel($data)
	{
		$quuery=$this->db->get_where('models',array('m_name'=>$data));
		$c=$quuery->num_rows();
		return($c);
	}


	//VALUES update cheyyan vendi  db il ninn values edth print cheyyippikum
	function modelslist()
	{
		$query = $this->db->get_where('models');
		return $query->result();
	}


	//remove cars
	function removemodels($id)
	{
		$this->db->where('mid',$id);
		$this->db->delete('models');
		
	}


	//VALUES update cheyyan vendi  db il ninn values edth print cheyyippikum
	function modelsupdate($value)
	{
		$query = $this->db->get_where('models',array('mid'=>$value));
		return $query->result();
	}


function check_car_booking($value)
	{
		$query = $this->db->get_where('booking',array('carid'=>$value));
		return $query->result();
	}



	function join_cars_booking($lid)
	{
		
		// $this->db->join('tbl_place','cars.place=tbl_place.pid','inner');
		// $this->db->join('cars','booking.carid=cars.cid','inner');
		// $this->db->join('login','cars.lid=login.id','inner');
		// $this->db->join('userreg','login.rid=userreg.uid','inner');
		
		// $this->db->join('login','userreg.uid=login.rid','inner');



		
		//$query = $this->db->query('SELECT * FROM `login` as l,userreg as u,booking as b,cars as c WHERE b.lid=l.id and b.carid=c.cid and l.rid=u.uid');   
		$query = $this->db->query("SELECT * FROM `login` as l,userreg as u,booking as b,cars as c,tbl_place as p WHERE b.lid=l.id and b.carid=c.cid and l.rid=u.uid and c.place=p.pid and c.lid= '$lid'");
		return $query->result();
	}
		
  	


  function forgotpasswordemailcheck($email)
{
	$querys=$this->db->get_where('login',array('email'=>$email));
	return $querys->result();
}

function forgotpasswordnmrinsert($email,$otp)
{
	$this->db->where(array('email'=>$email));
	$this->db->delete('tbl_otp');   //already otp undengil delete chyum enit insert cheyyum
	$this->db->insert('tbl_otp',array('email'=>$email,'otp'=>$otp));
	$querys=$this->db->get_where('tbl_otp',array('email'=>$email));
	return $querys->result();
}

function otpcheck($emaildb,$otp)
{
	$querys=$this->db->get_where('tbl_otp',array('email'=>$emaildb,'otp'=>$otp));
	//$c=$querys->num_rows();
	//return $c;
	return $querys->result();
}

function otplimit($email)
{
	$this->db->where(array('email'=>$email));
	$this->db->delete('tbl_otp');
}



function updatepassword($email,$password)
{
	$pass=md5($password);
	//$pass=$password;
	$this->db->where('email',$email);
	$this->db->update('login',array('password'=>$pass));
}

	

	


  	



}
?>