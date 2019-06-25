<?php
class Ownermodel extends CI_Model
{


function cars()
	{
		
		$query = $this->db->get_where('cars');
		return $query->result();
	}

//List cars in owner page
	function carslists($lid)
	{
		
		$query = $this->db->get_where('cars',array('lid'=>$lid,'cstatus!='=>1));
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


	//owner  update action
  		function updatestatuscars($email,$block)
		{
			$this->db->where('cid',$email);
			$this->db->update('cars',array('cstatus'=>$block));
		}


		//CARS status update
	function updatecars($id,$data)
	{
		$this->db->where('cid',$id);
		$this->db->update('cars',$data);
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


		function profile($email1)
  	{
			$this->db->join('ownerreg','login.rid=ownerreg.oid','inner');
			$this->db->join('tbl_place','ownerreg.oplace=tbl_place.pid','inner');
			$querys=$this->db->get_where('login',array('email'=>$email1));
  			return $querys->result();
  	}

  	function updateprofile($oid,$data)
		{
			$this->db->where('oid',$oid);
			$this->db->update('ownerreg',$data);
		}




}