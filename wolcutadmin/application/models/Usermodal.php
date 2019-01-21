<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usermodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    


		function get_members_card($u_card)
	{
		$this->db->where('u_card',$u_card);
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user()
	{
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user_wid($wid)
	{	
		$this->db->join('warehouse', 'warehouse.w_id = user.u_wid');
		$this->db->where('u_wid', $wid);
        $query = $this->db->get('user');
		return $query->result();
	}
	function add_user($data)
	{
		return $this->db->insert('user', $data);
	}
	function update_user($u_id,$data)
	{
		$this->db->where('u_id', $u_id);
		return $this->db->update('user', $data);
		
	}
	function update_user_amount($u_card,$data)
	{
		$this->db->where('u_card', $u_card);
		return $this->db->update('user', $data);
		
	}
	function update_user_account($data)
	{
		return $this->db->insert('account', $data);
		
	}
	
	function user_account($u_id)
	{
	    
		$this->db->where('u_id', $u_id);	
		$this->db->join('admin_login', 'admin_login.a_id = account.a_id');
        $query = $this->db->get('account');
		return $query->result();
		
	}
	function userbyid($u_id)
	{
		$this->db->where('u_id', $u_id);
        $query = $this->db->get('user');
		return $query->result();
	}

	function get_warehouse()
	{
        $query = $this->db->get('warehouse');
		return $query->result();
	}



}?>