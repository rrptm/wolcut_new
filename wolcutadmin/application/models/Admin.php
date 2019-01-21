<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
    function adminlogin($email, $pwd)
	{
		$this->db->where('a_mail', $email);
		$this->db->where('a_pass', md5($pwd));
        $query = $this->db->get('admin_login');
        $data['a_lastseen'] = date("Y-m-d H:i:s");
		$update = $this->db->update('admin_login',$data);
		return $query->result();
	}

	function insert_admin($data)
    {
    	$data['a_created'] = date("Y-m-d H:i:s");
		return $this->db->insert('admin_login', $data);
	}

	function update_admin($id,$data)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $data);
	}
	
	function update_admin_login($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}

	function get_admin($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin');
		return $query->result();
	}

	function get_admin_login($id)
	{
		$this->db->where('a_id', $id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function get_members()
	{  
        $query = $this->db->get('admin_login');
		return $query->result();
	}

	function add_member($data)
	{
		return $this->db->insert('admin_login', $data);
	}
	function update_member($a_id,$data)
	{
		$this->db->where('a_id', $a_id);
		return $this->db->update('admin_login', $data);
		
	}
	function memberbyid($a_id)
	{
		$this->db->where('a_id', $a_id);
        $query = $this->db->get('admin_login');
		return $query->result();
	}


	function toggle_design($a_design,$status)
	{
		$this->db->where('a_design', $a_design);
		$data['status'] = $status;
		return $this->db->update('admin_login', $data);
	}
	function toggle_member($a_id,$status)
	{
		$this->db->where('a_id', $a_id);
		$data['status'] = $status;
		return $this->db->update('admin_login', $data);
	}

	function update_pass($id,$logindata)
	{
		$this->db->where('a_id',$id);
		return $this->db->update('admin_login', $logindata);
	}
	function get_category()
	{
        $query = $this->db->get('category');
		return $query->result();
	}
	function get_category_id($c_id)
	{   $this->db->where('c_id', $c_id);
        $query = $this->db->get('category');
		return $query->result();
	}
	function add_category($data)
	{
		return $this->db->insert('category', $data);
	}
	function toggle_category($c_id,$c_status)
	{
		$this->db->where('c_id', $c_id);
		$data['c_status'] = $c_status;
		return $this->db->update('category', $data);
	}
	function update_category($c_id,$data)
	{  
		$this->db->where('c_id', $c_id);
		return $this->db->update('category', $data);
		
	}
	function get_brand()
	{
        $query = $this->db->get('brand');
		return $query->result();
	}
	function get_brand_id($b_id)
	{   $this->db->where('b_id', $b_id);
        $query = $this->db->get('brand');
		return $query->result();
	}
	function add_brand($data)
	{
		return $this->db->insert('brand', $data);
	}
	function toggle_brand($b_id,$b_status)
	{
		$this->db->where('b_id', $b_id);
		$data['b_status'] = $b_status;
		return $this->db->update('brand', $data);
	}
	function update_brand($b_id,$data)
	{  
		$this->db->where('b_id', $b_id);
		return $this->db->update('brand', $data);
		
	}
	function get_order()
	{	$this->db->order_by("order_id","desc");
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_order_wid($wid)
	{	
		$this->db->where('o_wid', $wid);
		$this->db->order_by("order_id","desc");
                $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_orderid($id)
	{	
		$this->db->where('order_id', $id);
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	public function get_product_id($id)
	{	
		$this->db->where('p_id', $id);
		$query=$this->db->get('product');
		return $query->result();
	}

	function get_order_filter($s,$e,$w_id)
	{	
	    $this->db->where('o_time BETWEEN "'. date('Y-m-d', strtotime($s)). '" and "'. date('Y-m-d', strtotime($e)).'"');
		$this->db->where('o_wid',$w_id);
		$this->db->where('o_status', "1");
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_order_filterd($o)
	{	$this->db->where('o_time =',$o);
		$this->db->where('o_wid=',$w_id);
		$this->db->where('o_status', "1");
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	
	function get_order_home_delivery()
	{	
		$this->db->where('payment_mode',"Home");
	    $this->db->order_by("order_id","desc");
        $query = $this->db->get('orderpos');
		return $query->result();
	}
	function get_order_wid_home_delivery($wid)
	{	
		$this->db->where('o_wid', $wid);
		$this->db->where('payment_mode',"Home");
		$this->db->order_by("order_id","desc");
         $query = $this->db->get('orderpos');
		return $query->result();
	}
	function countproduct_wid($wid)
	{
		$this->db->select_sum('p_id');
		$this->db->where('p_warehouse', $wid);
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countproduct()
	{
		$this->db->select_sum('p_id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countsell($date,$wid)
	{
		$this->db->select_sum('order_id');
		$this->db->where('o_time =', $date);
		$this->db->where('o_wid', $wid);
	    $this->db->from('orderpos');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function sumsell_wid($wid)
	{
		$this->db->select_sum('amount');
		$this->db->where('o_status =', "1");
		$this->db->where('o_wid =', $wid);
        $res = $this->db->get('orderpos'); 
         if ($res->num_rows() != 1) {
        // there should only be one row - anything else is an error
        return false;
    }
    return $res->row()->amount;

	}
	function sumsellday($date)
	{
		$this->db->select_sum('amount');
		$this->db->where('o_status =', "1");
		$this->db->where('o_time =', $date);
        $res = $this->db->get('orderpos'); 
         if ($res->num_rows() != 1) {
        // there should only be one row - anything else is an error
        return false;
    }
    return $res->row()->amount;

	}
	function lastsumsellday($date)
	{
		$this->db->select_sum('amount');
		$this->db->where('o_status =', "1");
		$this->db->where('o_time BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
        $res = $this->db->get('orderpos'); 
         if ($res->num_rows() != 1) {
        // there should only be one row - anything else is an error
        return false;
    }
    return $res->row()->amount;

	}
	function sumsell()
	{
		$this->db->select_sum('amount');
		$this->db->where('o_status =', "1");
        $res = $this->db->get('orderpos'); 
         if ($res->num_rows() != 1) {
        // there should only be one row - anything else is an error
        return false;
    }
    return $res->row()->amount;

	}
	function sumcreditday($date)
	{
		$this->db->select_sum('u_amount');
		$this->db->where('timestatus =', $date);
		$this->db->where('p_c =', "Credit");
        $res = $this->db->get('account'); 
         if ($res->num_rows() != 1) {
        // there should only be one row - anything else is an error
        return false;
    }
    return $res->row()->u_amount;

	}
	
	function counthomedelivery($date)
	{
		$this->db->select_sum('order_id');
		$this->db->where('o_time BETWEEN DATE_SUB(NOW(), INTERVAL 2 DAY) AND NOW()');
		$this->db->where('payment_mode', "Home");
	    $this->db->from('orderpos');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}function countcod($date)
	{
		$this->db->select_sum('order_id');
		$this->db->where('o_time BETWEEN DATE_SUB(NOW(), INTERVAL 2 DAY) AND NOW()');
		$this->db->where('payment_mode', "cod");
	    $this->db->from('orderpos');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countcounter($date)
	{
		$this->db->select_sum('order_id');
		$this->db->where('o_time BETWEEN DATE_SUB(NOW(), INTERVAL 2 DAY) AND NOW()');
		$this->db->where('payment_mode', "Counter");
	    $this->db->from('orderpos');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countuser30()
	{
		$this->db->select_sum('u_id');
		$this->db->where('u_visit BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
		$this->db->where('u_status', "1");
	    $this->db->from('user');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countuser()
	{
		$this->db->select_sum('u_id');
	    $this->db->from('user');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function countvendor()
	{
		$this->db->select_sum('a_id');
	    $this->db->from('admin_login');
        $this->db->where('status',"1");
	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function update_order($id,$data)
	{
		$this->db->where('order_id', $id);
		return $this->db->update('orderpos', $data);
		
	}
		function update_user_account_amount($u_id,$data)
	{
		$this->db->where('u_id', $u_id);
		return $this->db->update('user', $data);
		
	}
		function update_user_account($data)
	{
		return $this->db->insert('account', $data);
		
	}
	function get_user_uid($u_id)
	{	
		$this->db->where('u_id', $u_id);
                $query = $this->db->get('user');
		return $query->result();
	}
}?>