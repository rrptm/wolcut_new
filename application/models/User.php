<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	//user
	function insert_user($data)
    {
    	$data['u_visit'] = date("Y-m-d H:i:s");
		return $this->db->insert('user', $data);
	}
	function get_user($u_mail,$u_pass)
	{
		$this->db->where('u_mail', $u_mail);
		$this->db->where('u_pass', md5($u_pass));
        $query = $this->db->get('user');
		return $query->result();
	}
	function get_user_by_id($id)
	{
		$this->db->where('u_id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	function update($id, $u_name, $u_lname, $u_contact)
    {	
    	$data = array('u_name'=>$u_name, 'u_lname'=>$u_lname, 'u_contact'=>$u_contact);
    	$this->db->where('u_id', $id);
		return $this->db->update('user', $data);
	}
	function update_password($id, $password)
    {	
    	$data = array('u_pass'=>$password);
    	$this->db->where('u_id', $id);
		return $this->db->update('user', $data);
	}

	//address
	public function deliveryadd($u_id)
	{	
		$this->db->where('u_id',$u_id);
		$query=$this->db->get('delivery');
		return $query->result();
	}
	function insert_delivery($data,$u_id,$id)
    {
		 $this->db->where('u_id',$u_id);
		 $this->db->where('id',$id);
	   $q = $this->db->get('delivery');

	   if ( $q->num_rows() > 0 ) 
	   {
	      $this->db->where('u_id',$u_id);
	     return  $this->db->update('delivery',$data);
	   } else {
	      $this->db->set('u_id', $u_id);
	      return $this->db->insert('delivery', $data);
	   }
	}
	//product
	public function showcategory()
	{
		$query=$this->db->get('category');;
		return $query->result();
	}
	public function showcategory_id($category)
	{	
		$this->db->where('c_name', $category);
		$query=$this->db->get('category');;
		return $query->result();
	}
	function countproduct_category($category)
	{	
	    
		$this->db->join('category', 'category.c_id = product.p_category');
		$this->db->where('c_name', $category);
		$this->db->where('p_status', "1");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	public function showproduct_category($limit, $start,$category)
	{	
		$this->db->limit($limit, $start);
		$this->db->join('category', 'category.c_id = product.p_category');
		$this->db->where('c_name',$category);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function showproduct()
	{	
		$this->db->join('category', 'category.c_id = product.p_category');
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		$this->db->order_by("p_id", "desc");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function get_product_id($p_category,$p_name)
	{	
		$this->db->join('category', 'category.c_id = product.p_category');
		$this->db->where('c_name', $p_category);
		$this->db->where('p_name', $p_name);
		$this->db->where('p_status', "1");
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
	public function get_size_id($id)
	{	
		$this->db->where('p_id',$id);
		$this->db->select('size');
		$this->db->distinct();
		$query=$this->db->get('productattr');
		return $query->result();
	}
	public function get_color_id($id)
	{	
		$this->db->where('p_id',$id);
		$this->db->select('color');
		$this->db->distinct();
		$query=$this->db->get('productattr');
		return $query->result();
	}
	public function viewqty_product($pid,$size,$color)
	{	
		$this->db->where('productid',$pid);
		$this->db->where('size',$size);
		$this->db->where('color',$color);
		$query=$this->db->get('attributevalue');
		return $query->result();
	}
	public function showproduct_mostview_cat()
	{ 	$this->db->limit(8);
		$this->db->order_by("p_view", "desc");
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproduct_mostview_cat1($p_category)
	{ 	$this->db->limit(3);
		$this->db->order_by("p_view", "desc");
		$this->db->where('p_category', $p_category);
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	public function showproduct_recent()
	{ 	$this->db->limit(6);
		$this->db->order_by("p_time", "desc");
		$this->db->where('p_status', "1");
		$query=$this->db->get('product');
		return $query->result();
	}
	function updateview($p_id,$p_view)
    {	
    	$data = array('p_view'=>$p_view);
    	$this->db->where('p_id', $p_id);
		return $this->db->update('product', $data);
	}
	function get_cart_qty($u_id,$p_id)
	{
	    $this->db->where('p_id', $id);
	    $this->db->where('u_id', $uid);
	    $query = $this->db->get('cart');
	    return $query->result();
	}
	function countproduct($id)
	{	
		$this->db->where('u_id', $id);
		$this->db->select_sum('id');
	    $this->db->from('cart');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	    public function showproduct_sale()
	{ 	
		$query=$this->db->get('sale');
		return $query->result();
	}
	public function showproduct_sale_pid($p_id)
	{	$this->db->or_like('p_id',$p_id);
		$query=$this->db->get('sale');
		return $query->result();
	}
	public function get_image_id($id)
	{	
		$this->db->where('p_id',$id);
		$query=$this->db->get('image');
		return $query->result();
	}
	//wishlist
	function check_wish($uid,$id)
	{
	    $this->db->where('p_id',$id);
	    $this->db->where('u_id',$uid);
	    $query = $this->db->get('wishlist');
	    return $query->result();
	}

	public function showwishlist($id)
	{	
		$this->db->where('u_id', $id);
		$query=$this->db->get('wishlist');;
		return $query->result();
	}
	//cart
	public function showcart($u_id)
	{	
		$this->db->where('u_id', $u_id);
		$query=$this->db->get('cart');;
		return $query->result();
	}
	//subscribe
	function insert_subscriber($email)
    {$data = array('s_mail'=>$email);
		return $this->db->insert('subscribe', $data);
	}

	//contact message
	function insert_contact($data)
    {
		return $this->db->insert('contact', $data);
	}


	//checkout

	public function order_max()
    {
             $this->db->select_max('order_id','oid');
                $result = $this->db->get('orderadd')->row();  
                $oid1=$result->oid;
                $oid=$oid1+1;
                return $oid;
    }
    
	function orderdetails($data)
	{
        return $this->db->insert('orderadd',$data);
	}

	public function orderdetails_txnid($txnid)
	{	
		$this->db->where('txnid', $txnid);
		$query=$this->db->get('orderadd');;
		return $query->result();
	}
	//search
	function countproduct_search($keyword)
	{	$this->db->like('p_name',$keyword);
		$this->db->where('p_status', "1");
		$this->db->select_sum('id');
	    $this->db->from('product');

	    $total_a = $this->db->count_all_results();

	    if ($total_a > 0)
	    {
	        return $total_a;
	    }

	    return NULL;

	}
	function search($limit, $start,$keyword)
	{
		$this->db->limit($limit, $start);
	    $this->db->like('p_name',$keyword);
			$this->db->where('p_status', "1");
	    $query  =   $this->db->get('product');
	    return $query->result();
	}


	//wholesalecontact message
	function insert_wholesale($data)
    {
		return $this->db->insert('wholesale', $data);
	}

	
}?>