<?php
class Drivermodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}



		function profile($email1)
  	{
			$this->db->join('driverreg','login.rid=driverreg.drid','inner');
			$this->db->join('tbl_place','driverreg.dplace=tbl_place.pid','inner');
			$querys=$this->db->get_where('login',array('email'=>$email1));
  			return $querys->result();
  	}


  	function updateprofile($uid,$data)
		{
			$this->db->where('drid',$uid);
			$this->db->update('driverreg',$data);
		}

	function driver_updatestatus($email,$block)
		{
			$this->db->where('email',$email);
			$this->db->update('login',array('status'=>$block));
		}









}
?>