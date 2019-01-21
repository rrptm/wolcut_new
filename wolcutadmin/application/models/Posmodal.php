<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posmodal extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

	function get_product()
	{
	    
		$this->db->limit(24);
        $query = $this->db->get('product');
		return $query->result();
	}
	function get_category()
	{
        $query = $this->db->get('category');
		return $query->result();
	}
	public function productfilter1($keyword)
	{ 	
		$this->db->like('p_name', $keyword);
		$query=$this->db->get('product');
		return $query->result();
	}
	public function productfilter($keyword,$category)
	{ 	
		$this->db->like('p_name', $keyword);
		$this->db->where('p_category', $category);
		$query=$this->db->get('product');
		return $query->result();
	}
	public function get_product_by_id($p_id)
	{	
		$this->db->where('p_id', $p_id);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	function orderdetails($data)
	{
        return $this->db->insert('orderpos',$data);
	}

	public function orderdetails_txnid($txnid)
	{	
		$this->db->where('txnid', $txnid);
		$query=$this->db->get('orderpos');;
		return $query->result();
	}
    function search_user($title){
		$this->db->like('u_card', $title , 'both');
		$this->db->or_like('u_contact', $title , 'both');
		$this->db->order_by('u_card', 'ASC');
		$this->db->limit(10);
		return $this->db->get('user')->result();
	}
	function userbyid($u_id)
	{
		$this->db->where('u_id', $u_id);
        $query = $this->db->get('user');
		return $query->result();
	}
	function update_user_amount($u_id,$data)
	{
		$this->db->where('u_id', $u_id);
		return $this->db->update('user', $data);
		
	}
	function addupdate($txnid,$u_card,$data)
	{
		$this->db->where('u_card', $u_card);
		$this->db->where('txnid', $txnid);
		return $this->db->update('orderpos', $data);
		
	}
	function update_user_account($data)
	{
		return $this->db->insert('account', $data);
		
	}
}?>