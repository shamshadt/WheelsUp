<?php
class Usermodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}



	function carinform($value)
	{
		$this->db->join('tbl_place','cars.place=tbl_place.pid','inner');
		$query = $this->db->get_where('cars',array('cid'=>$value));
		return $query->result();
	}

	function driverinform($value)
	{
		$this->db->join('tbl_place','driverreg.dplace=tbl_place.pid','inner');
		$query = $this->db->get_where('driverreg',array('drid'=>$value));
		return $query->result();
	}


	function cardetail()
	{
		
		$query = $this->db->get_where('cars',array('cstatus='=>0));
		return $query->result();
		
	}


	function insertbooking($bookdata)
	{
		$this->db->insert('booking',$bookdata);	
	}




	function datefromdatabase()
	{
		
		$query = $this->db->get_where('booking');   
		return $query->result();
		
	}


	function usercarslist($place,$model)
	{
		
		//$this->db->join('cars','booking.carid=cars.cid','inner');
		$this->db->join('tbl_place','cars.place=tbl_place.pid','inner');

		$query = $this->db->get_where('cars',array('model'=>$model,'place'=>$place,'cstatus='=>0));   
		return $query->result();
	}

		

	function userfullcarslist($place)
	{
		
		//$this->db->join('cars','booking.carid=cars.cid','inner');
		$this->db->join('tbl_place','cars.place=tbl_place.pid','inner');
		
		$query = $this->db->get_where('cars',array('place'=>$place,'cstatus='=>0));   
		return $query->result();
	}

	function comments($userdata)
	{
		$this->db->insert('feedback',$userdata);	
	}
	function commentselect($cid)
{
	
	
	$query = $this->db->query("SELECT * FROM feedback as f,login as l,userreg as u,cars as c WHERE f.lid=l.id and f.cid=c.cid and l.rid=u.uid and c.cid='$cid' order by fid desc");
	// SELECT * FROM feedback as f, `login` as l,userreg as u,cars as c WHERE l.rid=u.uid and c.lid=l.rid and c.cid='64' 
	 return $query->result();
}

		function profile($email1)
  	{
			$this->db->join('userreg','login.rid=userreg.uid','inner');
			$querys=$this->db->get_where('login',array('email'=>$email1));
  			return $querys->result();
  	}

  	function payment($data)
	{
		$querys=$this->db->get_where('tbl_bank',$data);
		return $querys->result();
	}


	function join_cars_booking($lid)
	{
		
		// $this->db->join('tbl_place','cars.place=tbl_place.pid','inner');
		// $this->db->join('cars','booking.carid=cars.cid','inner');
		// $this->db->join('login','cars.lid=login.id','inner');
		// $this->db->join('userreg','login.rid=userreg.uid','inner');
		
		// $this->db->join('login','userreg.uid=login.rid','inner');



		
		//$query = $this->db->query('SELECT * FROM `login` as l,userreg as u,booking as b,cars as c WHERE b.lid=l.id and b.carid=c.cid and l.rid=u.uid');   
		$query = $this->db->query("SELECT * FROM `login` as l,userreg as u,booking as b,cars as c,tbl_place as p WHERE b.lid=l.id and b.carid=c.cid and l.rid=u.uid and c.place=p.pid and b.lid= '$lid'");
		return $query->result();
	}


	function cancel_cars_booking($bid)
	{
		
		$this->db->where('bid',$bid);
		$this->db->delete('booking');
	}



	function updateprofile($uid,$data)
		{
			$this->db->where('uid',$uid);
			$this->db->update('userreg',$data);
		}

	function driver_list($place)
	{
		
		//$this->db->join('cars','booking.carid=cars.cid','inner');
		// $this->db->join('tbl_place','driverreg.dplace=tbl_place.pid','inner');
		// $this->db->join('login','driverreg.drid=login.rid','inner');

		$query = $this->db->query("SELECT * FROM `login` as l,driverreg as d,tbl_place as p WHERE  l.rid=d.drid and d.dplace=p.pid and d.dplace='2' and d.demail=l.email");
		
		// $query = $this->db->get_where('driverreg',array('pid'=>$place,'status='=>1));   
		return $query->result();
	}

}
?>